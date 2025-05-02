@extends('layouts.app')
@section('title', 'Cara Menyewa')
@section('content')

<div class="bg-blue-900 flex items-center px-4 py-3">
  <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
    <i class="fas fa-arrow-left"></i>
  </button>
  <h1 class="text-white text-center flex-grow text-sm sm:text-base">Syarat dan Panduan Menyewa</h1>
</div>

<main class="py-8">
  <!-- Bagian Syarat -->
  <div class="text-center my-8">
    <h2 class="text-2xl text-blue-900">Syarat dan Panduan Menyewa</h2>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($terms as $term)
      <div class="bg-white p-4 rounded-xl shadow-md text-center">
        <div class="flex justify-center mb-2">
          <div class="w-8 h-8 bg-gray-300 text-black font-bold rounded-full flex items-center justify-center">
            {{ $term['step'] }}
          </div>
        </div>
        <div class="rounded-full flex justify-center mb-2">
          <img src="{{ asset('img/icon/' . $term['icon']) }}" class="w-20 h-20">
        </div>
        <h3 class="text-sm font-medium">{{ $term['title'] }}</h3>
      </div>
    @endforeach
  </div>

  <!-- Bagian Panduan -->
  <div class="text-center my-8">
    <h2 class="text-2xl text-blue-900">Panduan Menyewa</h2>
  </div>

  <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($guides as $guide)
      <div class="bg-white p-4 rounded-xl shadow-md text-center">
        <div class="flex justify-center mb-2">
          <div class="w-8 h-8 bg-gray-300 text-black font-bold rounded-full flex items-center justify-center">
            {{ $guide['step'] }}
          </div>
        </div>
        <div class="rounded-full flex justify-center mb-2">
          <img src="{{ asset('img/icon/' . $guide['icon']) }}" class="w-20 h-20">
        </div>
        <h3 class="text-sm font-medium">{{ $guide['title'] }}</h3>
      </div>
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