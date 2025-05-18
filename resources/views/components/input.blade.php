@props(['type' => 'text'])

<input 
    type="{{ $type }}" 
    {{ $attributes->merge(['class' => 'w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none']) }} 
/>