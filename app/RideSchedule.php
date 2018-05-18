<?php

namespace ShareRideInc;

use Illuminate\Database\Eloquent\Model;

class RideSchedule extends Model
{
    //
    public function ride()
    {
        return $this->belongsTo('ShareRideInc\Ride');
    }

    public function bookings()
    {
        return $this->hasMany('ShareRideInc\Booking');
    }
}
