<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use\App\Contact;
class ContactController extends Controller
{
 
    public function create() {
		return view('contact.create');
	}

	public function store(ContactRequest $request){

		$contact = new Contact;
        $contact->contact_name = $request->contact_name;
        $contact->contact_email = $request->contact_email;
        $contact->contact_message = $request->contact_message;
        $contact->contact_date = date('Y-m-d H:i:s');
        $contact->save();

        return view('contact.confirm');
	}

 public function help() {
        return view('help');
    }






}
