<div class="bg-white shadow overflow-hidden sm:rounded-md mb-6">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items flex-wrap sm:flex-no-wrap">
            <h3 class="flex items-center text-lg leading-6 font-medium text-gray-900 mt-4 ml-4">
                {{ $event->held_at->format('F d, Y H:i') }} UTC
            </h3>
            <div class="ml-4 mt-4 flex-shrink-0">
                @unless($event->held_at->isPast())
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ $event->calendarLink()->ics() }}"
                           class="relative inline-flex items-center px-4 py-2 border-2 border-red-500 text-sm leading-5 font-medium rounded-md text-red-500 hover:text-red-600 bg-white focus:outline-none focus:shadow-outline-indigo focus:border-red-700 active:bg-red-700"
                           target="_blank">
                            <x-heroicon-o-calendar class="h-5 w-5 mr-1" />
                            <span class="hidden sm:inline">
                                Add to calendar
                            </span>
                        </a>
                    </span>
                @endunless

                @if ($event->youtube_url)
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ $event->youtube_url }}"
                           class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:shadow-outline-indigo focus:border-red-700 active:bg-red-700"
                           target="_blank">
                            <x-icon-youtube class="h-5 w-5 mr-1" />
                            View on Youtube
                        </a>
                    </span>
                @endif
            </div>
        </div>
    </div>

    @if ($event->hasSpeaker(1) || $event->hasSpeaker(2))
        <ul>
            @if ($event->hasSpeaker(1))
                <x-event-list-speaker :event="$event" number="1"/>
            @endif
            @if ($event->hasSpeaker(2))
                <x-event-list-speaker :event="$event" number="2"/>
            @endif
        </ul>
    @endif
</div>
