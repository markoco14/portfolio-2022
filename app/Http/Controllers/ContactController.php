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

        $date = Carbon::today('Asia/Taipei')->toDateString();
        
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $date .': Email from ' . $request->name . ' Portfolio 2022';
        $contact->message = $request->message;
        $contact->save();

        $details = [
            'name' => $contact->name,
            'email' => $contact->email,
            'subject' => $contact->subject,
            'message' => $contact->message,
            'date' => $date,
        ];
    
        Mail::to('mark.oconnor14@gmail.com')->send(new \App\Mail\PortfolioContactForm($details));
        
        // return redirect(url()->previous() . '#contact')->with('success', 
        //     'Hi ' . $request->name . ', your message was sent. 
        //     Thank you for contacting me, I will reply as soon as possible.'
        // );

        return back()->with('success', 
            'Hi ' . $request->name . ', your message was sent. 
            Thank you for contacting me, I will reply as soon as possible.'
        );
    }
}
