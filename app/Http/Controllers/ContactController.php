<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $today = Carbon::today('Asia/Taipei')->toDateString();
        
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $today .': Email from Portfolio2022';
        $contact->message = $request->message;
        $contact->save();

        $details = [
            'name' => $contact->name,
            'email' => $contact->email,
            'subject' => $contact->subject,
            'message' => $contact->message
        ];
    
        Mail::to('mark.oconnor14@gmail.com')->send(new \App\Mail\PortfolioContactForm($details));
    

        // dd($contact);
        return back()->with('success', 
            'Hi, ' . $request->name . '! Thank you for contacting me! 
            I will get back to you as soon as possible.'
        );
    }
}
