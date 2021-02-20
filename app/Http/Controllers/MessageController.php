<?php

namespace App\Http\Controllers;
use App\Mail\FormContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Validator;
class MessageController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required',
            'email' => 'bail|required|email',
            'societe' => 'sometimes',
            'sujet' => 'required',
            'message' => 'bail|required'
        ]);


        Mail::send(new FormContact($request));
        Session::flash('message', 'Votre message à été envoyez avec succes merci.');
        return redirect()->back();
    }
}
