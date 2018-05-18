<?php

namespace ShareRideInc\Http\Controllers;

use ShareRideInc\Booking;
use ShareRideInc\Mail\BookingReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use ShareRideInc\RideSchedule;

class BookingController extends Controller
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
        $booking = new Booking;
        $booking->ride_schedule_id = $request->ride_schedule_id;
        $booking->user_id = $request->user_id;
        $booking->save();

        $available_seats = $request->available_seats;
        if ($available_seats - 1 === 0){
            $this->updateRideAvailability($request->ride_schedule_id);
        }

        $rideSchedule = RideSchedule::findOrFail($request->ride_schedule_id);

        Mail::to(Auth::user()->email)->send(new BookingReceived($rideSchedule));

        $request->session()->flash('status', 'You have booked a ride successfully!');

        return redirect('/home');
    }

    public function updateRideAvailability($id)
    {
        \ShareRideInc\RideSchedule::where('id', $id)->update(['is_available' => false]);

    }

    public function show()
    {

    }

    public function destroy()
    {

    }
}
