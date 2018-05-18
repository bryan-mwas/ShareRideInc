<?php

namespace ShareRideInc;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Ride extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('ShareRideInc\User');
    }

    public function schedules()
    {
        return $this->hasMany('ShareRideInc\RideSchedule');
    }

    public function scheduled($id)
    {
        return \ShareRideInc\RideSchedule::all()->contains('ride_id',$id);
    }
}
