<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Notice1 extends Notification
{
    use Queueable;
    private $noticeA;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($noticeA)
    {
        $this->noticeA=$noticeA;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];

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
                    // ->subject('Admin alert')
                    // ->line('An order has been placed.')
                    // ->action('Notification Action', url('/orders'))
                    // ->line('Thank you!');
                    ->greeting($this->noticeA['greeting'])
                    ->line($this->noticeA['body'])
                    ->action($this->noticeA['actionText'], $this->project['actionURL'])
                    ->line($this->noticeA['thanks']);
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
            //
        ];
    }
}
