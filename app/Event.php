<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function review(){
        return $this->hasMany('App\Review');
    }

    public function activity(){
        return $this->hasOne('App\Activity');
    }

    public function event_images(){
        return $this->hasMany('App\EventImage');
    }

    public function guest_list(){
        return $this->hasOne('App\Guest');
    }

    public function dietary_preference(){

        return $this->belongsToMany('App\DietaryPreference','dietary_preference_event','event_id','dietary_preference_id');
    }

    public function drinks(){

        return $this->belongsToMany('App\Drink','event_drink','event_id','drink_id');
    }



}
