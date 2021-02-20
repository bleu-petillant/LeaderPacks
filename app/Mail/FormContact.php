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
        $name = $request->name;
        $email = $request->email;
        $sujet = $request->sujet;
        $societe = $request->societe;
        $message = $request->message;
        $contact_mail = 'virgil.dablon@bleupetillant.com';
        return $this
        ->subject($sujet)
        ->from($email)
        ->to($contact_mail)
        ->view('email.contact');

    }
}
