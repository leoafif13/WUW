@props(['label', 'name', 'type' => 'text', 'value'])

<div>
  <label for="{{ $name }}" class="block text-blue-900 font-bold text-xs mb-1">{{ $label }}</label>
  <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" 
         value="{{ old($name, $value) }}" 
         class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" 
         autocomplete="{{ $name }}" />
</div>
