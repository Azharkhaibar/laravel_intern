<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{
    public function addContact() {
        return view('contact.addContact');
    }

    public function createcontact() {
        return view("contact.createcontact");
    }
    // untuk post data
    public function store(Request $request) {
        $dataContact = $request->validate([
            'name'=>'required',
            'country'=>'required',
            'state'=>'required',
            'company'=>'required',
        ]);

        $newContactData = Contact::create($dataContact);
        return redirect()->route('contact.addContact');

    }
}
