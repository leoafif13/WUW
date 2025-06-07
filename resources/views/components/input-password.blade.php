@props(['id', 'name', 'label', 'placeholder'])

<div>
  <label class="block text-xs font-bold text-blue-900 mb-1" for="{{ $id }}">{{ $label }}</label>
  <input
    id="{{ $id }}"
    name="{{ $name }}"
    type="password"
    placeholder="{{ $placeholder }}"
    required
    class="w-full bg-gray-300 text-gray-700 text-xs rounded px-3 py-2 focus:outline-none"
/>
</div>
