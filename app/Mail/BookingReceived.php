<?php

namespace ShareRideInc\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use ShareRideInc\RideSchedule;

class BookingReceived extends Mailable
{
    use Queueable, SerializesModels;


    protected $rideSchedule;

    /**
     * Create a new message instance.
     *
     * @param RideSchedule $rideSchedule
     */
    public function __construct(RideSchedule $rideSchedule)
    {
        //
        $this->rideSchedule = $rideSchedule;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Acknowledgement")
                    ->markdown('emails.acknowledge')
                    ->with([
                        'userName' => Auth::user()->name,
                        'origin' => $this->rideSchedule->ride()->first()->origin,
                        'destination' => $this->rideSchedule->ride()->first()->destination,
                        'departure' => $this->rideSchedule->schedule_date,
                    ]);
    }
}
