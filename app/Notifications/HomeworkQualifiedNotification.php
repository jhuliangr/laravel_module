<?php

namespace App\Notifications;

use App\Models\Homework;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HomeworkQualifiedNotification extends Notification
{
    use Queueable;
    public function __construct(public Homework $homework)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('Your homework has been evaluated.')
            ->greeting('Hello ' . $notifiable->name . ',')
            ->action('See it', url(route('homework.show', $this->homework->id)))
            ->line('Thank you for using our application!');
    }

    public function toArray(object $notifiable): array
    {
        return [
        ];
    }
}
