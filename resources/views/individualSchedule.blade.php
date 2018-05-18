@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">
                        Booking
                    </div>
                    <div class="card-body">
                        <form method="post" action="/booking">
                            @csrf
                            <div class="form-group row">
                                <label for="destination" class="col-sm-4 col-form-label">Booking ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="ride_schedule_id"
                                           value="{{$rideSchedule->id}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="capacity" class="col-sm-4 col-form-label">Available Seats</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="available_seats"
                                           value="{{$rideSchedule->available_seats}}" readonly>
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{$rideSchedule->ride->user_id}}">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Book Ride</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection