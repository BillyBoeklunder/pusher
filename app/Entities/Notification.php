<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function user() {
        return $this->belongsTo('App\Entities\User');
    }

    public function picture() {
        return $this->belongsTo('App\Entities\Picture');
    }

    public function pushedNotifications() {
        return $this->hasMany('App\Entities\PushedNotifications');
    }
}
