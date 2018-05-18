@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">
                        Car ID {{$ride->id}} from {{$ride->origin}} to {{$ride->destination}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="/schedules">
                            @csrf
                            <div class="form-group row">
                                <label for="origin" class="col-sm-4 col-form-label">Origin</label>
                                <div class="col-sm-8">
                                    <input id="origin" class="form-control" type="text" name="origin" value="{{$ride->origin}}" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="destination" class="col-sm-4 col-form-label">Destination</label>
                                <div class="col-sm-8">
                                    <input id="destination" class="form-control" type="text" name="destination"
                                           value="{{$ride->destination}}"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="capacity" class="col-sm-4 col-form-label">Available Seats</label>
                                <div class="col-sm-8">
                                    <input id="capacity" class="form-control" type="number" name="available_seats"
                                           value="{{$ride->capacity}}"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="capacity" class="col-sm-4 col-form-label">Departure Date</label>
                                <div class="col-sm-8">
                                    <input id="schedule_date" class="form-control" type="date" name="schedule_date" required>
                                </div>
                            </div>
                            <input type="hidden" name="ride_id" value="{{$ride->id}}">
                            <input type="hidden" name="is_available" value="{{true}}">
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection