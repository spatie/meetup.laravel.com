<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\CalendarLinks\Link;

class Event extends Model
{
    use HasFactory;

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

    public function hasTalkTitle(int $number): bool
    {
        return ! empty($this->{"speaker_{$number}_talk_title"});
    }

    public function talkTitle(int $number): string
    {
        return $this->{"speaker_{$number}_talk_title"};
    }

    public function calendarLink(): \Spatie\CalendarLinks\Link
    {
        $from = $this->held_at;
        $to = $this->held_at->addHour();

        $talkTitles = [];

        if ($this->hasTalkTitle(1)) {
            $talkTitles[] = $this->talkTitle(1);
        }

        if ($this->hasTalkTitle(2)) {
            $talkTitles[] = $this->talkTitle(2);
        }

        $link = Link::create('Laravel Worldwide Meetup', $from, $to)
            ->description(implode(PHP_EOL, $talkTitles));

        return $link;
    }
}
