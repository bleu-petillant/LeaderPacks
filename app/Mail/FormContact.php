<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class FormContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->contact = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $country = $request->country;
        $message = $request->message;
        $contact_mail = 'leaderpacks.conatct@test.com';
        return $this
        ->subject('message from Leaderpacks contact page')
        ->from($email)
        ->to($contact_mail)
        ->view('email.contact');

    }
}
