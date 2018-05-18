<?php

namespace ShareRideInc\Http\Controllers;

use ShareRideInc\RideSchedule;
use Illuminate\Http\Request;

class RideScheduleController extends Controller
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

    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $rideSchedule = new RideSchedule;
        $rideSchedule->ride_id = $request->ride_id;
        $rideSchedule->available_seats = $request->available_seats;
        $rideSchedule->schedule_date = $request->schedule_date;
        $rideSchedule->is_available = $request->is_available;
        $rideSchedule->save();

//        $request->session()->flash('status', 'You have book ride'.$rideSchedule->ride_id;

        return redirect('/home');
    }

    public function show(RideSchedule $rideSchedule)
    {
        return view('individualSchedule', compact('rideSchedule'));
    }

    public function destroy()
    {

    }
}
