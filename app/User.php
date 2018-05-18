<?php

namespace ShareRideInc;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rides()
    {
        return $this->hasMany('ShareRideInc\Ride');
    }

    public function bookings()
    {
        return $this->hasMany('ShareRideInc\Booking');
    }
}
