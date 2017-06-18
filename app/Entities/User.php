<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function follows() {
        return $this->belongsToMany('App\Entities\User', 'user_follow', 'user_id', 'followed_user_id');
    }

    public function followedBy() {
        return $this->belongsToMany('App\Entities\User', 'user_follow', 'followed_user_id', 'user_id');
    }

    public function notifications() {
        return $this->hasMany('App\Entities\Notification');
    }

    public function pushedNotifications() {
        return $this->hasMany('App\Entities\PushedNotification');
    }

    public function pictures() {
        return $this->hasMany('App\Entities\Picture');
    }
}
