<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;

class CallFromReceptionist extends Notification
{
    use Queueable;

    protected $content;
    protected $channel;
    protected $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct(User $user)
     {
        $this->user = $user;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * @param $notifiable
     * @return $this
     */
     public function toSlack($notifiable)
    {
        return (new SlackMessage)
        ->content($this->user->last_name . "さん お客様がいらっしゃいました");
    }
}
