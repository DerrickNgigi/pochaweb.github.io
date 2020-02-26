<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class ContactController extends Controller
{
   public function contactPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'subject' => 'required', 'message' => 'required' ]);

    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('odhiamboeric0049@gmail.com');
       $message->to('thedscku@gmail.com', 'Admin')->subject('Message from Pocha Website');
   });

    return back()->with('success', 'Thanks for contacting us!'); 
   }
}