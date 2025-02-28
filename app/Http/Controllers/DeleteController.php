<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(int $id)
    {
        $contact = Contact::find($id);

        if ($contact->user_id !== auth()->user()->id) {
            return redirect()->route('contacts.index')->with('status', 'You are not allowed to delete this contact');
        }

        $contact->delete();

        return redirect()->route('contacts.index')->with('status', 'Contact deleted successfully');
    }

}
