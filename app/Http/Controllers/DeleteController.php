<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(int $id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('status', 'Contact deleted successfully');
    }

}
