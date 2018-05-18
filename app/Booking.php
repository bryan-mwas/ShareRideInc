<?php

namespace ShareRideInc;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('ShareRideInc\User');
    }

    public function schedule()
    {
        return $this->belongsTo('ShareRideInc\RideSchedule');
    }
}
