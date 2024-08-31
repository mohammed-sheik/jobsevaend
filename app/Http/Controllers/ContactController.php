<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message'=>'required|string|max:255',
            
           
        ]);

        // Save to database, send email, etc.
        // For example:
        Contact::create($validated);

        return redirect()->route('contact.success')->with('success', 'Thank you for your message. We will get back to you soon.');
    }
    public function success()
    {
        return view('/layouts.contact-success');
    }
}