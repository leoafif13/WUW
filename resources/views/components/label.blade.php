@props(['value' => null])

<label 
    {{ $attributes->merge(['class' => 'block text-[13px] font-semibold text-[#000353] mb-1']) }}>
    {{ $value ?? $slot }}
</label>
