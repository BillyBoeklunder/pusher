<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PushedNotification extends Model
{

    public function user() {
        return $this->belongsTo('App\Entities\User');
    }

    public function notification() {
        return $this->belongsTo('App\Entities\Notification');
    }
}
