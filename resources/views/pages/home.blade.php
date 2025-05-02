@extends('layouts.app')
@section('title', 'home')
@section('content')
 <body class=" text-white font-sans">
  @include('components.navbar_auth')

  <section id="home" class="pt-24 relative z-10 flex flex-col items-center justify-center text-center px-6 py-20 max-w-full mx-auto text-white min-h-screen bg-cover bg-center" style="background-image: url('img/Background 3.png')">
    <h1 class="font-extrabold text-3xl md:text-4xl leading-tight mb-2 drop-shadow-md">
      Selamat Datang di WUW,<br/> Username
    </h1>
    <p class="text-base md:text-lg mb-6 font-normal max-w-md mx-auto drop-shadow-md">
      Temukan pakaian terbaik untuk dirimu
    </p>
    <a href="#produk" class="bg-[#f9f6f1] text-blue-900 font-semibold rounded px-6 py-2 hover:bg-gray-500 transition drop-shadow-lg">
      Sewa Sekarang
    </a>
    <button aria-label="Scroll down" class="mt-8 text-white text-2xl animate-bounce">
      <i class="fas fa-chevron-down"></i>
    </button>
  </section>

  <section id="tentang" class="">
    @include('pages.about')
  </section>

  <!-- layanan Kami -->
  <section id="layanan">
    @include('pages.layanan')
  </section>

     <!-- Hubungi Kami -->
  <section id="hubungi">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>
 </body>
@endsection