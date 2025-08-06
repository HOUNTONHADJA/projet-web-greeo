<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;

    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function build()
    {
        return $this->view('emails.user-notification')
                    ->subject('Confirmation de réception de votre message')
                    ->with([
                        'userName' => $this->userName,
                    ]);
    }
}

