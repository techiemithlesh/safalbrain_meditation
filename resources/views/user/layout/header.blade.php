@php
    $header = App\Models\Header::firstOrFail();
@endphp

<header class="w-full" style="background-color: {{ $header->bg_color }}; color: {{ $header->text_color }};">
    <div class="flex justify-center items-center gap-[8px] flex-col py-4 px-2 sticky z-10 top-0 left-0">
        <p class="text-[20px] text-center">{{ $header->description }}</p>
        <button style="background-color: {{ $header->btn_background_color }}; color: {{ $header->btn_text_color }};" class="py-[6px] px-[14px] rounded-full w-full sm:max-w-fit">{{ $header->btn_text }}</button>
    </div>
</header>

