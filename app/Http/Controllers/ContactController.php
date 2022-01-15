<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
    //
    public function sendEmail(ContactFormRequest $request)
    {

            Mail::send(
                'emails.contact',
                array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'user_message' => $request->get('comment')
                ),
                function ($message) {

                    $message->from('website@rhjcontracts.co.uk');
                    $message->to(['rob.cooper@sellonlinedirect.com','rhjcontracts@outlook.com'], 'Admin')->subject('Website Contact Form');
                }
            );


            return redirect()->route('homepage', ['#cform'])->with('message', 'Your message has been sent!');
    }
}
