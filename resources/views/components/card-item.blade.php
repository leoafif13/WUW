@props(['step', 'title', 'icon'])

<div class="bg-white p-4 rounded-xl shadow-md text-center">
    <div class="flex justify-center items-left mb-2">
        <div class="w-8 h-8 bg-gray-300 text-black font-bold rounded-full flex items-center justify-center">{{ $step }}</div>
    </div>
    <div class="rounded-full flex justify-center mb-2">
        <img src="{{ asset('img/' . $icon) }}" class="w-20 h-20">
    </div>
    <h3 class="text-sm font-medium ">{{ $title }}</h3>
</div>