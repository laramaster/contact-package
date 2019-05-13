<?php

namespace arafat\contact\http\controllers;

use App\Http\controllers\Controller;
use Illuminate\Http\Request;
use arafat\contact\Models\Contact;
use arafat\contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::arafat');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_to_mail'))->send(new ContactMailable($request->message));
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back();
    }
}
