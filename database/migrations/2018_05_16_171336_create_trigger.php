<?php

use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Triggers
        DB::unprepared(
            'CREATE TRIGGER tr_Decrement_Available_Seats AFTER INSERT ON `bookings` FOR EACH ROW
                    BEGIN
                     UPDATE ride_schedules SET available_seats = available_seats - 1 WHERE id = NEW.ride_schedule_id;
                    END
                    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop Trigger
        DB::unprepared('DROP TRIGGER `tr_Decrement_Available_Seats`');
    }
}
