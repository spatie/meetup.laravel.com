<?php

namespace App\Http\Components;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class EventListSpeakerComponent extends Component
{
    public string $name;

    public string $link;

    public string $title;

    public string $talkTitle;

    public string $talkAbstract;

    public string $photo;

    public function __construct(Event $event, int $number)
    {
        $this->name = $event->{"speaker_{$number}_name"};
        $this->link = $event->{"speaker_{$number}_link"} ?? '';
        $this->title = $event->{"speaker_{$number}_title"};
        $this->talkTitle = $event->{"speaker_{$number}_talk_title"};
        $this->talkAbstract = $event->{"speaker_{$number}_talk_abstract"};
        $this->photo = Storage::url($event->{"speaker_{$number}_photo"});
    }

    public function render()
    {
        return view('components.event-list-speaker');
    }
}
