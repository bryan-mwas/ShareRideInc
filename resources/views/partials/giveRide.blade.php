<div class="table-responsive-md">
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Capacity</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rides as $ride)
            @if(!($ride->scheduled($ride->id)))
            <tr>
                <th scope="row">{{$ride->id}}</th>
                <td>{{$ride->origin}}</td>
                <td>{{$ride->destination}}</td>
                <td>{{$ride->capacity}}</td>
                <td>
                    <a type="button" class="btn btn-sm btn-primary" href="{{url('/rides/'.$ride->id)}}">Give a ride</a>
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>