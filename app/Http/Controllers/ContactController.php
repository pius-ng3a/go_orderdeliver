<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.contactus');
    }

    public function store(Requests\ContactRequest $request)
    {

        $contact = new Contact;
        $contact->name = $request::get('name');
         $contact->name = $request::get('phone_num');
        $contact->email=$request::get('email');
        $contact->message=$request::get('description');




        $contact->save();
        return \Redirect::back()->with('message', 'Your request has been submitted successfully. We will get back to you soon');


    }

}

