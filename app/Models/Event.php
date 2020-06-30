<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $guarded = [];

    public $casts = [
        'held_at' => 'datetime',
    ];

    public static function featured(): ?Event
    {
        return static::query()
            ->where('held_at', '>=', now()->subMinutes(30)->toDateTimeString())
            ->orderBy('held_at')
            ->first();
    }

    public function scopeUpcoming(Builder $query): void
    {
        $query
            ->where('held_at', '>=', now()->toDateTimeString())
            ->orderBy('held_at');
    }

    public function scopePast(Builder $query): void
    {
        $query
            ->where('held_at', '<', now()->toDateTimeString())
            ->orderByDesc('held_at');
    }

    public function announcementTitle(): string
    {
        if ($this->held_at->addHour()->isPast()) {
            return '';
        }

        if ($this->held_at->isPast()) {
            return 'Live now';
        }

        if ($this->held_at->subMinutes(15)->isPast()) {
            return 'Starting soon';
        }

        return 'Next event';
    }

    public function hasSpeaker(int $number): bool
    {
        return ! empty($this->{"speaker_{$number}_name"});
    }
}
