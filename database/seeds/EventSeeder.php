<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::factory()->times(2)->upcoming()->create();

        Event::factory()->times(30)->past()->create();
    }
}
