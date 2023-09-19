<?php

// app/Mail/RegistrationEmail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Welcome to Your App')
            ->view('emails.registration'); // View file for your email template
    }
}
