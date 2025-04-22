<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>WUW - Temukan Pakaian Terbaik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-amber-400 text-white">

  <!-- Navbar -->
  <x-navbar></x-navbar>

  <!-- Hero Section -->
  <section id="beranda" class="relative bg-no-repeat bg-center bg-cover min-h-screen px-4 sm:px-6 lg:px-12 py-20" style="background-image: url('img/4.png');">
    <div class="absolute inset-0 bg-red-900 bg-opacity-80"></div>

    <div class="relative z-10 max-w-3xl ml-0 lg:ml-16 mt-10 lg:mt-28 text-white space-y-6 px-2 sm:px-0">
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-snug">
        Temukan Pakaian Terbaik<br>Untuk Hari Terbaik.
      </h1>
      <p class="text-sm sm:text-base lg:text-lg text-gray-200">
        WUW hadir untuk membantu kalian yang ingin menyewa untuk beberapa hari saja pakaian yang akan kalian gunakan di hari terbaik kalian.
      </p>
      <div class="pt-4">
        <a href="#produk" class="inline-flex items-center bg-white text-red-900 font-bold px-6 py-3 rounded shadow hover:bg-gray-200 transition duration-300">
          Temukan Pakaian <span class="ml-2">&rarr;</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section id="tentang" class="">
    @include('pages.about')
  </section>

  <!-- Produk -->
  <section id="produk" class="pt-24 py-20 px-4 sm:px-6 lg:px-16 bg-red-900 text-white">
    @include('pages.produk')
  </section>

  <!-- Hubungi Kami -->
  <section id="hubungi" class="pt-24">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

</body>
</html>
