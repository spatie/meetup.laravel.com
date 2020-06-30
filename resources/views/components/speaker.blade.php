<div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
    <div class="flex-shrink-0">
        <img class="w-full object-cover" src="{{ $photo }}" alt="Speaker photo"/>
    </div>
    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm leading-5 font-medium text-red-600">
                <a href="{{ $link }}" class="hover:underline">
                    {{ $name }} - {{ $title }}
                </a>
            </p>
            <div class="block">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{ $talkTitle }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {!! $talkAbstract !!}
                </p>
            </div>
        </div>
    </div>
</div>
