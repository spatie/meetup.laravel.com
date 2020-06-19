<x-main-layout>

    <x-slot name="extraHeader">

        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
            <div class="text-center">
                <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                    Laravel
                    <span class="text-red-500">Worldwide Meetup</span>
                </h2>
                <p class="mt-3 max-w-sm mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-xl">
                    Join the official Laravel meetup in the cloud. Learn from various familiar and new speakers. Level
                    up your skills.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    @if(optional($event)->youtube_url)
                        <div class="rounded-md shadow">
                            <a href="{{ $event->youtube_url }}"
                               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                View on YouTube
                            </a>
                        </div>
                    @endif
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="{{ route('proposeTalk') }}"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-500 bg-white hover:text-red-600 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Propose a talk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @if($event)
        <div id="next-event" class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-2xl leading-9 tracking-tight font-extrabold text-gray-600 sm:text-3xl sm:leading-10 mb-2">
                        {{ $event->announcementTitle() }}
                    </h2>
                    <h3 class="text-2xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-3xl sm:leading-10">
                        {{ $event->held_at->format('F d, Y h:i A') }} UTC
                    </h3>
                    <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                        Join us for a bunch of interesting talks!
                    </p>
                </div>
                <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-2 lg:max-w-none">
                    @if($event->hasSpeaker(1))
                        <x-speaker :event="$event" number="1"/>
                    @endif

                    @if($event->hasSpeaker(2))
                        <x-speaker :event="$event" number="2"/>
                    @endif
                </div>
            </div>
        </div>
    @endif
</x-main-layout>
