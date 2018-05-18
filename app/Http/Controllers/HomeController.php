<?php

namespace ShareRideInc\Http\Controllers;

use ShareRideInc\Location;
use ShareRideInc\Ride;
use ShareRideInc\RideSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $rides = Ride::all()->where('user_id',Auth::user()->id);
        $scheduledRides = RideSchedule::all();
        return view('home',compact('locations','rides', 'scheduledRides'));
    }
}
