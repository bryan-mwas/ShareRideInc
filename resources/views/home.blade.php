@extends('layouts.app')

@section('content')
    @if(Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show col-md-8 mx-auto" role="alert">
            <strong>Good Job!</strong>
            {{ Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-flex flex-column">
                <div class="card text-center">
                    <div class="card-header">
                        Get a Ride (Available Rides)
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show mx-auto" role="alert">
                            <strong>Please Note!</strong> You can only book a ride posted by other users.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @include('partials.getRide')
                    </div>
                </div>
            </div>
            <div class="col d-flex align-content-around flex-wrap">
                <div class="card text-center">
                    <div class="card-header">
                        Give a Ride (My Rides)
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show mx-auto" role="alert">
                            <strong>Hello {{Auth::user()->name}}!</strong>
                            Here are the rides you own. If you do not see any ride. Register one.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @include('partials.giveRide')
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        Register a Ride
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @include('partials.createRide')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
