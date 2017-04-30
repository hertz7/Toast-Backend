<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    //
    public function drinks(){

        return $this->belongsToMany('App\Event','event_drink','drink_id','event_id');
    }
}
