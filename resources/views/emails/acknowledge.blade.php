@component('mail::message')
    # Booking Successful

    Hi {{$userName}},

    Your booking from {{$origin}} to {{$destination}} scheduled for {{$departure}} is successful!

    Make sure to catch the ride!

    Thanks,
    {{ config('app.name') }}
@endcomponent