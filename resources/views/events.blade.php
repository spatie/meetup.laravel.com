<x-main-layout>

    @if(request()->get('page') == 1)
        <h1>Upcoming events</h1>

        @if($upcomingEvents->count())
            <ul>
                @foreach($upcomingEvents as $event)
                    <li>{{ $event->held_at->format('Y-m-d') }}</li>
                @endforeach
            </ul>
        @else
            There are currently no upcoming events
        @endif
    @endif

    @if($pastEvents->count())
        <h1>Past events</h1>

        <ul>
            {{ $pastEvents->links() }}

            @foreach($pastEvents as $event)
                <li>{{ $event->held_at->format('Y-m-d') }}</li>
            @endforeach
        </ul>
    @endif

</x-main-layout>
