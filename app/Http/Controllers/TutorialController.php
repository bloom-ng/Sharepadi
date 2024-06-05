<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('dashboard.user.tutorials')->with(['tutorials' => $tutorials]);
    }
    
    public function adminIndex()
    {
        $tutorials = Tutorial::paginate();
        return view('dashboard.admin.tutorials.index')->with(['tutorials' => $tutorials]);
    }
    
    public function create()
    {
        return view('dashboard.admin.tutorials.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|string',
            'title' => 'required|string',
        ]);

        Tutorial::create($request->all());

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial created successfully!');
    }
    
    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();
        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial deleted successfully!');
    }

    public function edit(Tutorial $tutorial)
    {
        return view('dashboard.admin.tutorials.edit', compact('tutorial'));
    }

    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'link' => 'required|string',
            'title' => 'required|string',
        ]);

        $tutorial->update($request->all());

        return redirect()->route('admin.tutorials.index')->with('success', 'Tutorial updated successfully!');
    }
}
