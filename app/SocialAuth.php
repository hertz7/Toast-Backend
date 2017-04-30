<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAuth extends Model
{
    protected $table = 'social_auth';

    public function user(){

        return $this->belongsTo('App\User');

    }
}
