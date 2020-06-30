<div class="bg-white shadow overflow-hidden sm:rounded-md mb-6">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $event->held_at->format('F d, Y H:i') }} UTC
                </h3>
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
                @if ($event->youtube_url)
                    <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ $event->youtube_url }}"
                                                   class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white  bg-red-500 hover:bg-red-600 focus:outline-none focus:shadow-outline-indigo focus:border-red-700 active:bg-red-700"
                                                   target="_blank">
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
