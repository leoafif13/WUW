@extends('layouts.app')
@section('title', 'home')
@section('content')
 <body class="text-white font-sans">
  @include('components.navbar_auth')

  <!-- Hero Section -->
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

  <!-- Tentang Kami -->
  <section id="tentang">
    @include('pages.about')
  </section>

  <!-- Layanan Kami -->
  <section id="layanan">
    @include('pages.layanan')
  </section>

  <!-- Hubungi Kami -->
  <section id="hubungi">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

  <!-- Toast Sukses Pop-up -->
  @if(session('success'))
    <script>
      window.onload = function() {
        const message = @json(session('success'));
        const toast = document.createElement('div');
        toast.textContent = message;
        toast.className = "fixed bottom-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in";
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 4000);
      };
    </script>
    <style>
      @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .animate-fade-in {
        animation: fade-in 0.5s ease-out;
      }
    </style>
  @endif

 </body>
@endsection
