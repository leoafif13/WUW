@props(['label', 'value'])

<p class="text-gray-500 mb-2">
  <span class="font-bold text-blue-900">{{ $label }}:</span> {{ $value ?? '-' }}
</p>
