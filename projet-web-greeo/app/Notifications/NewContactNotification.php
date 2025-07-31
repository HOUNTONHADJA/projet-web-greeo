<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewContactNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Nouveau message de contact')
            ->greeting('Bonjour Admin,')
            ->line('Un utilisateur vient d’envoyer un message via le formulaire de contact.')
            ->action('Voir les messages', route('admin.contacts.index'))
            ->line('Merci de rester à l’écoute !');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Nouveau message de contact',
            'message' => 'Un utilisateur a envoyé un message via le formulaire de contact.',
            'icon' => '📩',
            'url' => route('admin.contacts.index'),
        ];
    }
}
