<div class="bg-white shadow overflow-hidden sm:rounded-md mb-6">
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
            <div class="ml-4 mt-4">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $event->held_at->format('F d, Y h:i A') }} UTC
                </h3>
                {{--                                        <p class="mt-1 text-sm leading-5 text-gray-500">--}}
                {{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit quam corrupti consectetur.--}}
                {{--                                        </p>--}}
            </div>
            <div class="ml-4 mt-4 flex-shrink-0">
                @if ($event->youtube_url)
                    <span class="inline-flex rounded-md shadow-sm">
                                                <a href="{{ $event->youtube_url }}" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white  bg-red-500 hover:bg-red-600 focus:outline-none focus:shadow-outline-indigo focus:border-red-700 active:bg-red-700" target="_blank">
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
                <li>
                    <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="/storage/{{ $event->speaker_1_photo }}" alt="{{ $event->speaker_1_name }}" />
                                </div>
                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <div class="text-sm leading-5 text-gray-500 font-bold truncate">
                                            {{ $event->speaker_1_name }}
                                        </div>
                                        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                            {{ $event->speaker_1_title }}
                                        </div>
                                    </div>
                                    <div class="hidden md:block">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-900">
                                                Presenting:
                                            </div>
                                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                                {{ $event->speaker_1_talk_title  }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endif

            @if ($event->hasSpeaker(1))
                <li class="border-t border-gray-200">
                    <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-12 w-12 rounded-full" src="/storage/{{ $event->speaker_2_photo }}" alt="{{ $event->speaker_2_name }}" />
                                </div>
                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <div class="text-sm leading-5 font-medium text-gray-500 font-bold truncate">
                                            {{ $event->speaker_2_name }}
                                        </div>
                                        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                            {{ $event->speaker_2_title }}
                                        </div>
                                    </div>
                                    <div class="hidden md:block">
                                        <div>
                                            <div class="text-sm leading-5 text-gray-900">
                                                Presenting:
                                            </div>
                                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                                {{ $event->speaker_2_talk_title  }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endif
        </ul>
    @endif
</div>
