<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert(
            [
                'location' => 'Muthaiga',
            ]
        );
        DB::table('locations')->insert(
            [
                'location' => 'Runda',
            ]
        );
        DB::table('locations')->insert(
            [
                'location' => 'Ruaka',
            ]
        );
        DB::table('locations')->insert(
            [
                'location' => 'Karen',
            ]
        );
        DB::table('locations')->insert(
            [
                'location' => 'Riverside',
            ]
        );
    }
}
