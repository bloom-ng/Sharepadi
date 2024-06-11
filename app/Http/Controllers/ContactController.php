<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'message' => 'string|required',
        ]);

        Contact::create($request->all());

        return redirect()->route('homepage');
    }
}
