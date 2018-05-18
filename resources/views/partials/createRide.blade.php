<form method="post" action="/rides" class="col-md-6">
    @csrf

    <div class="form-group row">
        <label for="origin" class="col-sm-4 col-form-label">Origin</label>
        <div class="col-sm-8">
            <select id="origin" class="custom-select" name="origin" required>
                <option value="" selected>Select a destination</option>
                @foreach($locations as $location)
                    <option value="{{$location->location}}">{{$location->location}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="destination" class="col-sm-4 col-form-label">Destination</label>
        <div class="col-sm-8">
            <select id="destination" class="custom-select" name="destination" required>
                <option value="" selected>Select a destination</option>
                @foreach($locations as $location)
                    <option value="{{$location->location}}">{{$location->location}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="capacity" class="col-sm-4 col-form-label">Capacity</label>
        <div class="col-sm-8">
            <input id="capacity" class="form-control" type="number" name="capacity"
                   placeholder="Enter capacity of the ride" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-8">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>

</form>

{{----}}
<div class="col-md-6">
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Capacity</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rides as $ride)
            <tr>
                <th scope="row">{{$ride->id}}</th>
                <td>{{$ride->origin}}</td>
                <td>{{$ride->destination}}</td>
                <td>{{$ride->capacity}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script type="application/javascript">
    $(document).ready(function () {
        $("#destination").change(function () {
            if ($(this).val() === $("#origin").val()) {
                alert('You can not select the same origin and destination');
                $(this).val('');
            }
        });
        $("#origin").change(function () {
            if ($(this).val() === $("#destination").val()) {
                alert('You can not select the same origin and destination');
                $(this).val('');
            }
        });
    });
</script>