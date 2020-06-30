@if(flash()->message)
    <div class="rounded-md bg-{{ flash()->class }}-50 p-4 mb-4">
        <div class="text-sm leading-5 font-medium text-{{ flash()->class }}-800">
            {{ flash()->message }}
        </div>
    </div>
@endif
