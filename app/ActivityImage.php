<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityImage extends Model
{
    //
    public function activity(){

        return $this->belongsTo('App\Activity');
    }
}
