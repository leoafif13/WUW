<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>WUW - Temukan Pakaian Terbaik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  @vite('resources/js/app.js')
  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="text-white">

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section id="beranda" class="bg-gradient-to-br from-[#1e3a8a] to-[#000000] relative min-h-screen px-4 sm:px-6 lg:px-12 py-20">
  <div class="relative z-10 max-w-3xl ml-0 lg:ml-16 mt-0 lg:mt-10 text-white space-y-6 px-2 sm:px-0">
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

</body>
</html>
