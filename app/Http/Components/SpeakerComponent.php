<?php

namespace App\Http\Components;

use App\Models\Event;
use Illuminate\View\Component;

class SpeakerComponent extends Component
{
    public string $name;

    public string $title;

    public string $talkTitle;

    public string $talkAbstract;

    public string $photo;

    public function __construct(Event $event, int $number)
    {
        $this->name = $event->{"speaker_{$number}_name"};
        $this->title = $event->{"speaker_{$number}_title"};
        $this->talkTitle = $event->{"speaker_{$number}_talk_title"};
        $this->talkAbstract = $event->{"speaker_{$number}_talk_abstract"};
        $this->photo = $event->{"speaker_{$number}_photo"};
    }

    public function render()
    {
        return view('components.speaker');
    }
}
