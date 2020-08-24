<li>
    <div class="block focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
        <div class="flex items-center px-4 py-4 sm:px-6">
            <div class="min-w-0 flex-1 flex items-start">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="{{ $photo }}" alt="{{ $name }}" />
                </div>
                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                    <div>
                        <div class="text-sm leading-5 text-gray-500 font-bold truncate">
                            {{ $name }}
                        </div>
                        <div class="mt-1 flex items-center text-sm leading-5 text-gray-500">
                            {{ $title }}
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div>
                            <div class="text-sm leading-5 text-gray-900">
                                Presenting:
                            </div>
                            <div class="mt-1 flex items-center text-sm leading-5 text-gray-500">
                                {{ $talkTitle  }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
