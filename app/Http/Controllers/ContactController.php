<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
        return view('contact');
    }


    public function ContactRequest(Request $request)
    {
        $request->validate([
            'name' => 'string|max:255',
            'phone' => 'string|max:20',
            'email' => 'email|max:255',
            'subject' => 'string|max:255',
            'message' => 'string',
        ]);

        $contact = new ContactModel();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

}
