@props(['label', 'value'])

<p class="text-gray-700 mb-2 border-b border-gray-200 pb-2">
  <span class="font-semi-bold text-blue-900">{{ $label }}:</span> {{ $value ?? '-' }}
</p>