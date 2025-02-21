<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UpdateController extends Controller
{
    public function update(int $id)
    {
        $contact = Contact::find($id);

        return view('form', compact('contact'));
    }

}
