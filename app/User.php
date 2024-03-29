<?php

namespace App;

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

    public function event(){

        return $this->hasMany('App\Event');
    }

    public function social_auth(){

        return $this->hasOne('App\SocialAuth');
    }

    public function ratings(){
        return $this->hasMany('App\Review');
    }

    public function guest_list(){
        return $this->belongsToMany('App\Guest');
    }



}
