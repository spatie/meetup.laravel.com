<?php

namespace App\Http\Components;

use App\Models\Event;
use Illuminate\View\Component;

class SpeakerComponent extends Component
{
    public string $name;

    public string $title;

    public string $talkTitle;

    public string $abstract;

    public string $photo;

    public function __construct(Event $event, int $number)
    {
        $this->name = $this->{"speaker_{$speakerNumber}_name"};
        $this->title = $this->{"speaker_{$speakerNumber}_title"};
        $this->talkTitle = $this->{"speaker_{$speakerNumber}_talk_title"};
        $this->abstract = $this->{"speaker_{$speakerNumber}_abstract"};
        $this->photo = $this->{"speaker_{$speakerNumber}_photo"};
    }

    public function render()
    {
        return view('components.speaker');
    }
}
