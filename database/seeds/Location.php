<?php

use Illuminate\Database\Seeder;

class Location extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Location::class, 20)->create();
    }
}