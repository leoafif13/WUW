<button 
    {{ $attributes->merge(['class' => 'mt-3 w-full bg-[#000353] text-white text-[13px] font-semibold py-2 rounded-sm hover:bg-[#504fe4] transition-colors']) }}
    type="{{ $attributes->get('type') ?? 'button' }}">
    {{ $slot }}
</button>