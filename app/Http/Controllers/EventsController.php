<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventsController
{
    public function __invoke()
    {
        return view('events', [
            'upcomingEvents' => Event::upcoming()->get(),
            'pastEvents' => Event::past()->paginate(),
        ]);
    }
}
