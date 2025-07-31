<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class NewUserRegisteredNotification extends Notification
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['database', 'mail']; // Notification en base et mail
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouveau utilisateur inscrit')
            ->greeting('Bonjour Admin,')
            ->line('Un nouvel utilisateur vient de s’inscrire.')
            ->line('Nom : ' . $this->user->name)
            ->line('Email : ' . $this->user->email)
            ->action('Voir l’utilisateur', url('/admin/users'))
            ->line('Merci d’utiliser notre application.');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Nouvel utilisateur : ' . $this->user->name,
            'email' => $this->user->email,
        ];
    }
}
