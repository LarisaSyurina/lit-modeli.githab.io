<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(Request $request){
	    $_this=validate($request, [
		    'name' => 'required|min:3|max:50',
		    'tel' => 'required|min:6|max:50',
		    'e_mail' => 'required|email',
		]);
		
		Mail::send('emails.contact-message',[
		    'message'=>$request->message
		], function($mail) use($request){
		    $mail->from($request->email, $request->name);
			
			$mail->to('lsyurina@gmail.com')->subject('Contact Message');
	    });
		
		return redirect()->back()->with('flash_message', 'Ваш запрос отправлен.');
	}
}
