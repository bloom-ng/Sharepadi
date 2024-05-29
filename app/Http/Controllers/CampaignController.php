<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignAction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    private function getStates(string $country)
    {
        switch (strtolower($country)) {
            case 'nigeria':
                return
                    Campaign::NIGERIAN_STATES;
            case 'kenya':
                return Campaign::KENYAN_COUNTIES;
            case 'ghana':
                return
                    Campaign::GHANAIAN_REGIONS;
            default:
                return
                    Campaign::NIGERIAN_STATES;
        }
    }

    public function index(Request $request)
    {
        $validated = $request->validate([
            'limit' => 'integer|nullable',
            'search' => 'string|nullable'
        ]);

        $limit = $validated['limit'] ?? 10;
        $search = $validated['search'] ?? null;

        $states = $this->getStates(Auth::user()->country);
        $actions = CampaignAction::ACTIONS;

        $query = Campaign::with('actions')->where('user_id', $request->user()->id);

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                    ->orWhere('type', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%')
                    ->orWhere('cost', 'like', '%' . $search . '%');
            });
        }

        $campaigns = $query->paginate($limit);

        return view('dashboard.user.campaign', compact('actions', 'states', 'campaigns', 'limit'));
    }


    public function store(Request $request)
    {
        // Define base validation rules
        $rules = [
            'type' => 'string|required|in:custom_task,whatsapp_status_post,whatsapp_add_up',
            'states' => 'string|sometimes',
            'caption' => 'string|sometimes',
            'instructions' => 'string|sometimes',
            'task_file' => 'file|sometimes|max:30720', // 30 MB in KB
            'title' => 'string|required',
            'budget' => 'integer|sometimes',
            'add_up_link' => 'string|sometimes',
            'gender' => 'string|sometimes',
            'quantity' => 'integer|sometimes',
            'actions_number' => 'integer|sometimes',
            'cost' => 'integer|required'
        ];

        // Find all dynamic action fields and add to rules
        foreach ($request->all() as $key => $value) {
            if (preg_match('/^action_\d+$/', $key)) {
                $rules[$key] = 'string|sometimes'; // Adjust the validation rules as needed
            }
        }

        // Validate the request
        $validatedData = $request->validate($rules);

        // Check user's wallet balance
        $balance = Auth::user()->walletBalance();
        if ($balance < $validatedData['cost']) {
            return redirect('/user/campaigns')->with('error', 'Insufficient Funds');
        }

        // Handle the file upload
        if ($request->hasFile('task_image')) {
            try {
                $file = $request->file('task_image');
                $filePath = $file->store('/images/campaign_file', 'public');
                $validatedData['task_image'] = $filePath; // Save the file path to the validated data
            } catch (\Exception $e) {
                return redirect('/user/campaigns')->with('error', 'File upload failed: ' . $e->getMessage());
            }
        }

        // Extract static campaign data from validated data
        $campaignData = [
            'user_id' => $request->user()->id,
            'type' => $validatedData['type'],
            'states' => $validatedData['states'] ?? null,
            'caption' => $validatedData['caption'] ?? null,
            'instructions' => $validatedData['instructions'] ?? null,
            'task_file_url' => $validatedData['task_image'] ?? null,
            'title' => $validatedData['title'],
            'budget' => $validatedData['budget'] ?? null,
            'add_up_link' => $validatedData['add_up_link'] ?? null,
            'gender' => $validatedData['gender'] ?? null,
            'quantity' => $validatedData['quantity'] ?? null,
            'actions_number' => $validatedData['actions_number'] ?? null,
            'status' => Campaign::CAMPAIGN_ACTIVE,
            'cost' => $validatedData['cost']
        ];

        // Extract and save actions
        $actions = [];
        foreach ($validatedData as $key => $value) {
            if (preg_match('/^action_\d+$/', $key)) {
                $actions[] = ['name' => $key, 'value' => $value];
                unset($validatedData[$key]); // Remove actions from validated data to prevent issues during Campaign creation
            }
        }

        try {
            // Debit user wallet
            Wallet::create(['user_id' => Auth::user()->id, 'amount' => $validatedData['cost'], 'type' => Wallet::DEBIT]);

            // Create a new campaign
            $campaign = Campaign::create($campaignData);

            // Save actions to the CampaignAction model
            foreach ($actions as $action) {
                CampaignAction::create([
                    'campaign_id' => $campaign->id, // Use the ID of the created Campaign
                    'action' => $action['value']
                ]);
            }
        } catch (\Exception $e) {
            return redirect('/user/campaigns')->with('error', 'Campaign creation failed: ' . $e->getMessage());
        }

        // Redirect or perform additional logic
        return redirect('/user/campaigns')->with('success', 'Campaign created successfully!');
    }
}
