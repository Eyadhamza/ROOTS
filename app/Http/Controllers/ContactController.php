<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.indexx');
    }
    public function store()
    {
       $data= \request()->validate([
           'first_name'=>'required',
           'last_name'=>'required',
           'email'=>'required|email',
           'phone'=>'required',
           'message'=>'required'

       ]);
        Mail::send('email',
            array(
                'first_name' => \request()->get('first_name'),
                'last_name' => \request()->get('last_name'),
                'email' => \request()->get('email'),
                'phone'=>\request()->get('phone'),
                'user_message' => \request()->get('message')
            ),
            function($message) {
                $message->from('saquib.gt@gmail.com');
                $message->to('eyadhamza0@outlook.com', 'Admin')->subject('Roots Feedback');
            });

            Contact::create($data);
            return view('_thank-you');
    }
}
