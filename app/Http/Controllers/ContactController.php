<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('contact.list')->with('contacts', $contacts);
    }

    public function create(Request $request)
    {
        $contact = new Contact();

        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->objet = $request->objet;
        $contact->msg = $request->msg;

        $contact->save();

        session()->flash('success', 'Forme envoyé avec succès.');

        return redirect()->back();
    }

}
