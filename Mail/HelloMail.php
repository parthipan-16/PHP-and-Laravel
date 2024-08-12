<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     * Define the subject and the view to be used for the email.
     */
    public function build()
    {
        return $this
            ->subject('Hello Mail')
            ->view('mail.hello');  
    }

    /**
     * Get the attachments for the message.
     * This method is optional and can be used to attach files to the email.
     */
    public function attachments()
    {
        return [];
    }
}
