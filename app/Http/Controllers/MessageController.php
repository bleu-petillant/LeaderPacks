<?php

namespace App\Http\Controllers;
use App\Mail\FormContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class MessageController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'email' => 'bail|required|email',
            'lastname' => 'required',
            'country'=>'required',
            'message' => 'required'
        ]);


        Mail::send(new FormContact($request));
        Session::flash('success', 'Congratulations ! Your message has been sent successfully.');
        return redirect()->back();
    }
}
