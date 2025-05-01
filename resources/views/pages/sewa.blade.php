@extends('layouts.app')
@section('title', 'Cara Menyewa')

@section('content')
<div class="bg-blue-900 flex items-center px-4 py-3">
  <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
    <i class="fas fa-arrow-left"></i>
  </button>
  <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">Syarat dan Panduan Menyewa</h1>
</div>

<main class="py-8">
  <div class="text-center my-8">
    <h2 class="text-2xl font-bold text-blue-900">Syarat dan Panduan Menyewa</h2>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($terms as $term)
      <x-card-item :step="$term['step']" :title="$term['title']" :icon="$term['icon']" />
    @endforeach
  </div>

  <div class="text-center my-8">
    <h2 class="text-2xl font-bold text-blue-900">Panduan Menyewa</h2>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($guides as $guide)
      <x-card-item :step="$guide['step']" :title="$guide['title']" :icon="$guide['icon']" />
    @endforeach
  </div>
</main>

<script>
  document.getElementById('backButton').addEventListener('click', function () {
    window.history.back();
  });
</script>
@endsection
