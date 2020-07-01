<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class user extends Notification  implements ShouldQueue
{
    use Queueable;
    public $user_message;
    public $title;

    /**
     * Create a new notification instance.
     *
     * @param $title
     * @param $user_message
     */

    public function __construct($title, $user_message)
    {
        $this->title=$title;

        $this->user_message = $user_message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('you just received a new Message ! ')
            ->line($this->title)
            ->line($this->user_message)
            ->action('Notification Action', url('/home'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title'=>$this->title,
            'user_message'=>$this->user_message
        ];
    }
}
