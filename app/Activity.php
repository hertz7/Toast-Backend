<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    public function activity_images(){
        return $this->hasMany('App\ActivityImage');
    }

    public function event(){

        return $this->belongsTo('App\Event');
    }
}
