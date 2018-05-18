<?php

namespace ShareRideInc\Http\Controllers;

use ShareRideInc\Ride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RideController extends Controller
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

    public function store(Request $request)
    {
        $ride = new Ride;
        $ride->origin = $request->origin;
        $ride->destination = $request->destination;
        $ride->capacity = $request->capacity;
        $ride->user_id = Auth::user()->id;
        $ride->save();
        return redirect()->back();
    }

    public function show(Ride $ride)
    {
        return view('schedule', compact('ride'));
    }

    public function destroy()
    {

    }
}
