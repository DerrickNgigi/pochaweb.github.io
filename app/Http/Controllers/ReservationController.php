<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ReservationController extends Controller
{
   public function reservation()
{
return view('reservation');
} 
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function reservationPost(Request $request) 
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);

    Mail::send('reservation_email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('thedscku@gmail.com');
       $message->to('thedscku@gmail.com', 'Admin')->subject('Pocha Resevation');
   });

    return back()->with('success', 'Thanks for your reservation. Getting back to you.'); 
   }
}