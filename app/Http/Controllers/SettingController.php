<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    public function index()
    {
        //
    }

    public function getOne(Request $request, $key)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting;
    }
}
