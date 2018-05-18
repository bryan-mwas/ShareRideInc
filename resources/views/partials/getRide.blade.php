<div class="table-responsive-md">
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ride ID</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Capacity</th>
            <th scope="col">Departure</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($scheduledRides as $scheduledRide)
            @if(!($scheduledRide->ride->user_id === Auth::user()->id))
                <tr>
                    <td scope="row">{{$scheduledRide->id}}</td>
                    <td scope="row">{{$scheduledRide->ride->id}}</td>
                    <td>{{$scheduledRide->ride->origin}}</td>
                    <td>{{$scheduledRide->ride->destination}}</td>
                    <td>{{$scheduledRide->available_seats}}</td>
                    <td>{{$scheduledRide->schedule_date}}</td>

                    @if($scheduledRide->is_available)
                        <td>Available</td>
                    @else
                        <td>Fully Booked</td>
                    @endif

                    @if($scheduledRide->is_available && !($scheduledRide->bookings->contains('user_id', Auth::user()->id)))
                        <td>
                            <a href="{{url('/schedules/'.$scheduledRide->id)}}" class="btn btn-sm btn-primary">
                                Get Ride
                            </a>`
                        </td>
                    @else
                        <td>
                            <button class="btn btn-warning btn-sm" disabled>Already booked</button>
                        </td>
                    @endif
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>