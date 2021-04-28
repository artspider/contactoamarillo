<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newMsjToEmployer extends Notification
{
    use Queueable;
    protected $m;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($mesagge)
    {
        $this->m = $mesagge;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        logger('en el toArray');
        logger($this->m);
        return [
            'expert_id' => $this->m['id'],
            'expert_name' => $this->m['name'],
            'expert_msg' => $this->m['message'],
            'expert_picture' => $this->m['picture'],
        ];
    }
}
