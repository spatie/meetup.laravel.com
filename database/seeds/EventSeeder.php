<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        factory(Event::class, 2)->state('upcoming')->create();

        factory(Event::class, 30)->state('past')->create();
    }
}
