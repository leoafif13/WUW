@extends('layouts.app')
@section('title', 'Cara Menyewa')
@section('content')

<!-- Header manual dengan tombol kembali -->
<div class="bg-blue-900 flex items-center px-4 py-3">
  <button id="backButton" aria-label="Back" class="text-white hover:text-blue-300 text-lg mr-4">
    <i class="fas fa-arrow-left"></i>
  </button>
  <h1 class="text-white text-center flex-grow text-sm sm:text-base">Syarat dan Panduan Menyewa</h1>
</div>

<main class="py-8">
  <!-- Bagian Syarat -->
  <x-section-title title="Syarat dan Panduan Menyewa" />

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($terms as $term)
      <x-step-card :step="$term['step']" :icon="$term['icon']" :title="$term['title']" />
    @endforeach
  </div>

  <!-- Bagian Panduan -->
  <x-section-title title="Panduan Menyewa" />

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($guides as $guide)
      <x-step-card :step="$guide['step']" :icon="$guide['icon']" :title="$guide['title']" />
    @endforeach
  </div>
</main>

<!-- Footer -->
<x-footer></x-footer>

<script>
  document.getElementById('backButton').addEventListener('click', function () {
    window.history.back();
  });
</script>
@endsection
