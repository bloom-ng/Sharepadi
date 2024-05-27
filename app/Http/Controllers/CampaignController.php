<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignAction;
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
            'actions_number' => 'integer|sometimes'
        ];

        // Find all dynamic action fields and add to rules
        foreach ($request->all() as $key => $value) {
            if (preg_match('/^action_\d+$/', $key)) {
                $rules[$key] = 'string|sometimes'; // Adjust the validation rules as needed
            }
        }

        // Validate the request
        $validated = $request->validate($rules);

        // Handle the file upload
        if ($request->hasFile('task_image')) {
            $file = $request->file('task_image');
            $filePath = $file->store('/images/campaign_file', 'public');
            $validated['task_image'] = $filePath; // Save the file path to the validated data
        }

        // Extract static campaign data from validated data
        $campaignData = [
            'user_id' => $request->user()->id,
            'type' => $validated['type'],
            'states' => $validated['states'] ?? null,
            'caption' => $validated['caption'] ?? null,
            'instructions' => $validated['instructions'] ?? null,
            'task_file_url' => $validated['task_image'] ?? null,
            'title' => $validated['title'],
            'budget' => $validated['budget'] ?? null,
            'add_up_link' => $validated['add_up_link'] ?? null,
            'gender' => $validated['gender'] ?? null,
            'quantity' => $validated['quantity'] ?? null,
            'actions_number' => $validated['actions_number'] ?? null,
            'status' => Campaign::CAMPAIGN_PENDING,
            'cost' => 700000
        ];

        // Extract and save actions
        $actions = [];
        foreach ($validated as $key => $value) {
            if (preg_match('/^action_\d+$/', $key)) {
                $actions[] = ['name' => $key, 'value' => $value];
                unset($validated[$key]); // Remove actions from validated data to prevent issues during Campaign creation
            }
        }

        // Create a new campaign
        // dd($request->all());
        $campaign = Campaign::create($campaignData);

        // Save actions to the CampaignAction model
        foreach ($actions as $action) {
            CampaignAction::create([
                'campaign_id' => $campaign->id, // Use the ID of the created Campaign
                'action' => $action['value']
            ]);
        }

        // Redirect or perform additional logic
        return redirect('/user/campaigns')->with('success', 'Campaign and actions saved successfully!');
    }
}
