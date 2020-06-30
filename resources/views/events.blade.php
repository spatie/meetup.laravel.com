<x-main-layout>

    <div class="max-w-2xl mx-auto text-gray-600 px-4">
        @if(! request()->get('page') || request()->get('page') == 1)
            <div class="mb-10">
                <h1 class="text-2xl leading-9 tracking-tight font-extrabold sm:text-3xl sm:leading-10 mb-6">
                    Upcoming events
                </h1>

                @if($upcomingEvents->count())
                    @foreach($upcomingEvents as $event)
                        <x-event-listing :event="$event"/>
                    @endforeach
                @else
                    <p>
                        There are currently no upcoming events
                    </p>
                @endif
            </div>
        @endif

        @if($pastEvents->count())
            <div>
                <h1 class="text-2xl leading-9 tracking-tight font-extrabold sm:text-3xl sm:leading-10 mb-6">
                    Past events
                </h1>

                @foreach($pastEvents as $event)
                    <x-event-listing :event="$event"/>
                @endforeach

                {{ $pastEvents->links() }}
            </div>
        @endif
    </div>

</x-main-layout>
