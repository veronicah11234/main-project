<?php
namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
{
    use SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Verify Your Email')
                    ->view('emails.verification')
                    ->with([
                        'verificationLink' => route('verify.email', ['token' => $this->user->verification_token]),
                    ]);
    }
}

