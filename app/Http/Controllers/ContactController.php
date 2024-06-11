<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate();

        return view('dashboard.admin.contacts.index')->with('contacts', $contacts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'message' => 'string|required',
        ]);

        Contact::create($request->all());

        return redirect()->route('homepage')->with('success', 'Message successfully sent');
    }

    public function destroy(CONTACT $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
