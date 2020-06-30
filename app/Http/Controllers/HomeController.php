<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController
{
    public function __invoke()
    {
        return view('home', [
            'event' => Event::featured(),
        ]);
    }
}
