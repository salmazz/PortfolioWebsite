<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    //
    function index()
    {
     return view('layouts.front.contact');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'fname'     =>  'required',
      'lname'     =>  'required',
      'email'  =>  'required|email',
      'subject' => 'required',
      'message' =>  'required'
     ]);

        $data = array(
            'fname'   => $request->fname,
            'lname'   => $request->lname,
            'email' =>   $request->email,
            'subject'=>  $request->subject,
            'message' => $request->message
        );

       Mail::to('info@ultpower.com')->send(new SendMail($data));
       return back()->with('success', 'Thanks for contacting us!');

    }
}
