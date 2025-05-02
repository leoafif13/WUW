@extends('layouts.app')
@section('title', 'index')
@section('content')
  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section id="beranda" class="bg-gradient-to-br from-[#1e3a8a] to-[#000000] relative min-h-screen px-4 sm:px-6 lg:px-12 py-20">
  <div class="relative z-10 max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start justify-between gap-8">
    
    <!-- Konten Kiri (Teks) -->
    <div class="flex-1 text-white space-y-6 px-2 sm:px-0">
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-snug">
        Temukan Pakaian Terbaik<br>Untuk Hari Terbaik.
      </h1>
      <p class="text-sm sm:text-base lg:text-lg text-gray-200">
        WUW hadir untuk membantu kalian yang ingin menyewa untuk beberapa hari saja pakaian yang akan kalian gunakan di hari terbaik kalian.
      </p>
      <div class="pt-4">
        <a href="#produk" class="inline-flex items-center bg-white text-blue-900 font-bold px-6 py-3 rounded shadow hover:bg-gray-500 hover:text-blue-300 transition duration-300">
          Temukan Pakaian 
        </a>
        <i class="ml-4 fa-solid fa-chevron-right fa-2xl"></i>
      </div>
    </div>

    <!-- Konten Kanan (Gambar) -->
    <div class="relative">
      <img src="img/15.png" alt="Pakaian" class="w-full max-w-md mx-auto lg:mx-0 relative z-10">
      <img src="img/16.png" alt="Pakaian" class="w-full max-w-md mx-auto lg:mx-0 absolute bottom-0 left-0 z-0">
      <img src="img/17.png" alt="Pakaian" class="w-full max-w-md mx-auto lg:mx-0 absolute top-0 left-0 z-0">
    </div>

  </div>
</section>



  <!-- Tentang Kami -->
  <section id="tentang">
    @include('pages.about')
  </section>

  <!-- layanan Kami -->
  <section id="layanan">
    @include('pages.layanan')
  </section>

  <!-- Produk -->
  <section id="produk" class="pt-16 py-20 px-4 sm:px-6 lg:px-16 bg-gradient-to-br from-[#595959] to-[#000000] text-white">
    @include('pages.produk')
  </section>

  <!-- Hubungi Kami -->
  <section id="hubungi">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>
  @endsection