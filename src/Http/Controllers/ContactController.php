<?php

namespace global\contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use global\contact\Models\contact;
use global\contact\Mail\Contactmailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        // return $request->all();
        Mail::to(config('contact.send_email_to'))->send(new Contactmailable($request->message,$request->name));
       
        contact::create($request->all());
        return redirect(route('contact'));
    }
}
