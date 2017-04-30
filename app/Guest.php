<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    public function event(){

        return $this->belongsTo('App\Event');
    }

    public function user(){

        return $this->hasMany('App\User');
    }

}
