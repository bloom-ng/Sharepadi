<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::paginate();
        return view('dashboard.admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('dashboard.admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'value' => 'required|string',
        ]);

        Setting::create($request->all());

        return redirect()->route('admin.settings.index')->with('success', 'Setting created successfully!');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.settings.index')->with('success', 'Setting deleted successfully!');
    }

    public function getOne(Request $request, $key)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting;
    }
}
