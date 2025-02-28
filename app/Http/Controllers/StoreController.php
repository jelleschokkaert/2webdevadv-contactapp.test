<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class StoreController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->input('id');
        if (empty($id)) {
            $contact = new Contact();
        }

        if (!empty($id)) {
            $contact = Contact::find($id);
        }

        $contact->user_id = auth()->user()->id;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->save();

        return redirect()->route('contacts.index')->with('status', 'Contact saved successfully');

    }

}
