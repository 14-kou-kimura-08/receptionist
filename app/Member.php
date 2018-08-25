<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    /**

     * Get the gropu that owns the member.
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    /* Route notifications for the Slack channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForSlack()
    {
        return env('SLACK_WEBHOOK_URL');
    }
}
