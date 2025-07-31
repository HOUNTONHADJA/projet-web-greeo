<?php



namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $userName;
    public $userEmail;
    public $userMessage;

    public function __construct($userName, $userEmail, $userMessage)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userMessage = $userMessage;
    }

    public function build()
    {
        return $this->view('emails.admin-notification')
                    ->subject('Nouveau message de contact reçu')
                    ->with([
                        'userName' => $this->userName,
                        'userEmail' => $this->userEmail,
                        'userMessage' => $this->userMessage,
                    ]);
    }
}

