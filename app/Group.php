<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Get the users for the group.
     */
    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
