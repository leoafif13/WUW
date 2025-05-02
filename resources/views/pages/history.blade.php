@extends('layouts.app')
@section('title', 'History')
@section('content')
<div class="min-h-screen bg-gray-100">
  <!-- Header -->
  <div class="bg-blue-900 text-white py-4 px-6 shadow">
  <div class="flex items-center justify-between">
    <button class="mr-4">
      <!-- Icon kembali -->
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>
    <h1 class="text-lg font-semibold text-center flex-1">Riwayat Penyewaan</h1>
  </div>
</div>


  <!-- Daftar Riwayat -->
  <div class="p-4 space-y-4">
    <!-- Item Card -->
    <div class="bg-white rounded shadow-sm p-4 flex justify-between items-center">
      <div class="flex items-start space-x-4">
        <img src="img/jas.jpg" alt="Produk" class="w-20 h-24 object-cover rounded" />
        <div class="text-sm">
          <h2 class="font-semibold text-gray-800">Royal Java Heritage Set</h2>
          <p class="text-gray-600">Variasi: Size L</p>
          <p class="text-gray-600">Tanggal Sewa: 16 April – 20 April 2025</p>
          <p class="text-blue-700 font-bold mt-1">Rp100.000</p>
          <p class="text-gray-600 text-xs">x 1</p>
        </div>
      </div>
      <div class="flex space-x-2">
    <button class="bg-blue-900 text-white px-4 py-2 rounded text-sm hover:bg-blue-800">Sewa Lagi</button>
    <button class="bg-blue-900 text-white px-8 py-2 rounded text-sm hover:bg-blue-800">Nilai</button>
</div>


    </div>

    <!-- Salin item-card di atas untuk item lain -->
    <!-- Item Card 2 -->
    <div class="bg-white rounded shadow-sm p-4 flex justify-between items-center">
      <div class="flex items-start space-x-4">
        <img src="img/jas.jpg" alt="Produk" class="w-20 h-24 object-cover rounded" />
        <div class="text-sm">
          <h2 class="font-semibold text-gray-800">Royal Java Heritage Set</h2>
          <p class="text-gray-600">Variasi: Size M</p>
          <p class="text-gray-600">Tanggal Sewa: 15 April – 20 April 2025</p>
          <p class="text-blue-700 font-bold mt-1">Rp100.000</p>
          <p class="text-gray-600 text-xs">x 1</p>
        </div>
      </div>
      <div class="flex space-x-2">
        <button class="bg-blue-900 text-white px-4 py-2 rounded text-sm hover:bg-blue-800">Sewa Lagi</button>
        <button class="bg-blue-900 text-white px-8 py-2 rounded text-sm hover:bg-blue-800">Nilai</button>
      </div>
    </div>

    <!-- Item Card 3 -->
    <div class="bg-white rounded shadow-sm p-4 flex justify-between items-center">
      <div class="flex items-start space-x-4">
        <img src="img/jas.jpg" alt="Produk" class="w-20 h-24 object-cover rounded" />
        <div class="text-sm">
          <h2 class="font-semibold text-gray-800">Royal Java Heritage Set</h2>
          <p class="text-gray-600">Variasi: Size S</p>
          <p class="text-gray-600">Tanggal Sewa: 15 April – 20 April 2025</p>
          <p class="text-blue-700 font-bold mt-1">Rp100.000</p>
          <p class="text-gray-600 text-xs">x 1</p>
        </div>
      </div>
      <div class="flex space-x-2">
        <button class="bg-blue-900 text-white px-4 py-2 rounded text-sm hover:bg-blue-800">Sewa Lagi</button>
        <button class="bg-blue-900 text-white px-8 py-2 rounded text-sm hover:bg-blue-800">Nilai</button>
      </div>
    </div>
  </div>
</div>
@endsection