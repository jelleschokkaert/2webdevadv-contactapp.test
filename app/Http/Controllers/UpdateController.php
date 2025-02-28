<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UpdateController extends Controller
{
    public function update(int $id)
    {
        $contact = Contact::find($id);

        if ($contact->user_id !== auth()->user()->id) {
            return redirect()->route('contacts.index')->with('status', 'You are not allowed to edit this contact');
        }

        return view('form', compact('contact'));
    }

}
