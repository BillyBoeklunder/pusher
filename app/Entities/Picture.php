<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public function notifications() {
        return $this->hasMany('App\Entities\Notification');
    }

    public function user() {
        return $this->belongsTo('App\Entities\User');
    }
}
