@props(['foto'])

<div class="w-20 h-20 rounded-full border-4 border-blue-900 bg-white flex items-center justify-center mb-2 overflow-hidden">
  @if ($foto)
    <img src="{{ asset('storage/' . $foto) }}" alt="Foto Profil" class="w-full h-full object-cover">
  @else
    <i class="fas fa-user text-blue-900 text-4xl"></i>
  @endif
</div>
