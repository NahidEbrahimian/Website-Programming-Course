<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        $Contacts = Contact::all();
        return view("index", [
            "contacts" => $Contacts
        ]);
    }

    function add_contact_form()
    {
        return view("add_contact");
    }

    function add_contact_database(Request $request)
    {
        $contact = new Contact();
        $contact ->first_name = $request["name"];
        $contact ->last_name = $request["family"];
        $contact ->mobile_number = $request["mobile"];
        $contact ->phone_number = $request["phone"];
        $contact ->email = $request["email"];

        $contact->save();

        return redirect()->to('/');
    }

    function delete(Request $request)
    {
        Contact::truncate();
        return redirect()->to('/');
    }
}