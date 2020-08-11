<x-main-layout>
    <div class="max-w-2xl px-4 mx-auto text-gray-600">
        @if(!request()->get('page') || request()->get('page') == 1)
            <div class="mb-10">
                <h1 class="mb-6 text-2xl font-bold leading-10 tracking-tight text-center sm:text-3xl sm:leading-10 text-gray-900">
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
                <h1 class="mb-6 text-2xl font-extrabold leading-9 tracking-tight sm:text-3xl sm:leading-10">
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
