<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DietaryPreference extends Model
{
    //

    public function event(){

        return $this->belongsToMany('App\Event','dietary_preference_event','dietary_preference_id','event_id');
    }
}
