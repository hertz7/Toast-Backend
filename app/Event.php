<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public static $GROUP_COED = 0;
    public static $GROUP_MALE = 1;
    public static $GROUP_FEMALE = 2;

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

    // Util functions

    /**
     * @return bool
     */
    public function isGroupCoed()
    {
        return $this->checkGroup(self::$GROUP_COED);
    }

    public function isGroupMale()
    {
        return $this->checkGroup(self::$GROUP_MALE);
    }

    public function isGroupFemale()
    {
        return $this->checkGroup(self::$GROUP_FEMALE);
    }

    /**
     * Check if the preference matches.
     *
     * @param $preference int GROUP_COED|GROUP_MALE|GROUP_FEMALE
     * @return bool
     */
    private function checkGroup($preference)
    {
        return $this->group_preferences === $preference;
    }
}
