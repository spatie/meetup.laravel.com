<x-main-layout>

    <x-slot name="extraHeader">
        <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:my-12 sm:px-6 md:my-16 lg:my-20 xl:my-28">
            <div class="text-center">
                <img class="mx-auto h-32 sm:h-48 lg:h-56 select-none" src="/img/logo-globe.svg" alt="Laravel Meetup Globe">
                <h1 class="leading-10 font-bold text-gray-900 uppercase">
                    <img class="mx-auto h-12 sm:h-16 lg:h-20 select-none" src="/img/logo-laravel.svg" alt="Laravel">
                    <span class="block text-sm sm:text-base lg:text-xl text-gray-900">Worldwide Meetup</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base sm:text-lg text-gray-600 md:mt-5">
                    Join the official Laravel meetup in the cloud. <br class="hidden sm:block">
                    Learn from various familiar and new speakers. <br class="hidden sm:block">
                    Chat with your fellow artisans.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="{{ route('proposeTalk') }}"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-red-500 bg-white hover:text-red-600 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            <x-heroicon-o-speakerphone class="h-5 w-5 mr-2" />
                            Propose a talk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @if ($event)
        <div id="next-event" class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-2xl leading-9 tracking-tight font-extrabold text-gray-600 sm:text-3xl sm:leading-10 mb-2">
                        {{ $event->announcementTitle() }}
                    </h2>
                    <h3  class="text-2xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-3xl sm:leading-10">
                        <span x-data x-text="convertUTCDateToLocalDate('{{ $event->held_at->toAtomString() }}')"></span>
                        <div class="text-gray-500 text-lg font-medium">({{ $event->held_at->format('F d, Y H:i') }} UTC)</div>
                    </h3>
                    <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                        Join us for a bunch of interesting talks!
                    </p>

                    <div class="mt-5 max-w-xl mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="{{ $event->calendarLink()->ics() }}"
                               class="w-full flex items-center justify-center px-8 py-3 border-2 border-red-500 hover:border-red-600 text-base leading-6 font-medium rounded-md text-red-500 hover:text-red-600 bg-white focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                <x-heroicon-o-calendar class="h-7 w-7 mr-2" />
                                Add to calendar
                            </a>
                        </div>

                        @if ($event->youtube_url)
                            <div class="mt-4 sm:mt-0 sm:ml-4 rounded-md shadow">
                                <a href="{{ $event->youtube_url }}"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-red-500 text-base leading-6 font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                                    <x-icon-youtube class="h-7 w-7 mr-2" />
                                    View on YouTube
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-12 grid gap-10 max-w-lg mx-auto lg:grid-cols-2 lg:max-w-5xl">
                    @if ($event->hasSpeaker(1))
                        <x-speaker :event="$event" number="1"/>
                    @endif

                    @if ($event->hasSpeaker(2))
                        <x-speaker :event="$event" number="2"/>
                    @endif
                </div>
            </div>
        </div>
    @endif

    <div class="max-w-xl mx-auto text-center px-4 mb-8 text-gray-600 text-lg leading-7">
        <h2 class="text-2xl leading-9 tracking-tight font-extrabold text-gray-600 sm:text-3xl sm:leading-10 mb-8">
            Your Host
        </h2>
        <p class="mb-4">
            <a href="https://twitter.com/freekmurze" target="_blank">
                <img src="{{ asset('/img/freek-picture.jpg') }}" width="150" class="rounded-full border-4 border-white shadow-lg enlarge inline-block" alt="Freek Van der Herten">
            </a>
        </p>
        <h3 class="text-lg leading-9 tracking-tight font-extrabold text-gray-900 sm:text-2xl sm:leading-10 mb-2">
            Freek Van der Herten
        </h3>
        <p class="mb-4">
            Freek Van der Herten is a developer and partner at <a href="https://spatie.be/" class="text-red-500 hover:underline">Spatie</a>. Together with his team he has released <a href="https://spatie.be/open-source" class="text-red-500 hover:underline">a great number of packages</a> that are loved by the community.
        </p>
        <p class="mb-4">
            He also records <a href="https://laravelpackage.training" class="text-red-500 hover:underline">video courses</a>, and publishes posts on PHP, Laravel, and programming in general on <a href="https://freek.dev/originals" class="text-red-500 hover:underline">his blog</a>.
        </p>
        <p>
            <a href="https://twitter.com/freekmurze" target="_blank" class="text-red-500 hover:underline">
                @freekmurze
            </a>
        </p>
    </div>

    <div class="bg-50">
        <a id="newsletter">
            <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
                @if (request()->has('email-submitted'))
                    <div class="rounded-md bg-green-200 p-4 mb-4">
                        <div class="text-sm leading-5 font-medium text-green-800">
                            We have sent you an email that contains a link to confirm your subscription.
                        </div>
                    </div>
                @endif

                <div class="px-6 py-6 bg-red-500 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
                    <div class="xl:w-0 xl:flex-1">
                        <h2 class="text-2xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
                            Want to know when our next event is?
                        </h2>
                        <p class="mt-3 max-w-3xl text-lg leading-6 text-white">
                            Sign up for our newsletter to stay up to date.
                        </p>
                    </div>

                    <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
                        <form action="https://spatie.mailcoach.app/subscribe/39740acc-f567-4bef-9539-2f4629ec2afe" method="POST" class="sm:flex">
                            <input type="text" name="name" style="display: none; tab-index: -1;">
                            <input aria-label="Email address" type="email" value="{{ old('email') }}" name="email" required class="appearance-none w-full px-5 py-3 border border-transparent text-base leading-6 rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 transition duration-150 ease-in-out" placeholder="Enter your email" />
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:bg-red-300 transition duration-150 ease-in-out">
                                    Notify me
                                </button>
                            </div>
                        </form>

                        <x-form-field-error name="email" />
                    </div>
                </div>
            </div>
        </a>
    </div>
</x-main-layout>
