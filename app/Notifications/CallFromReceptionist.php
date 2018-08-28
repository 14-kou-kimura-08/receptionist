<?php

namespace App\Notifications;

use App\Member;
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
     public function __construct(Member $member)
     {
        $this->member = $member;
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
        // NOTE 必ずGroupに属している必要がある。
        // NOTE 必ずslack_idを保持している必要がある。
        return (new SlackMessage)
        ->to("#" . $this->member->group->slack_name)
        ->content("<@" . $this->member->slack_id . "> お客様がいらっしゃいました");
    }
}
