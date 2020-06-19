<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $guarded = [];

    public $casts = [
        'held_at' => 'datetime'
    ];
}
