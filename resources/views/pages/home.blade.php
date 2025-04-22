<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>WUW-Home</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
 </head>
 <body class=" text-white font-sans">
  @include('components.navbar_auth')

  <section id="home" class="pt-24 relative z-10 flex flex-col items-center justify-center text-center px-6 py-20 max-w-full mx-auto text-white min-h-screen bg-cover bg-center" style="background-image: url('img/bg.png')">
    <h1 class="font-extrabold text-3xl md:text-4xl leading-tight mb-2 drop-shadow-md">
      Selamat Datang di WUW,<br/> Username
    </h1>
    <p class="text-base md:text-lg mb-6 font-normal max-w-md mx-auto drop-shadow-md">
      Temukan pakaian terbaik untuk dirimu
    </p>
    <button class="bg-cream-50 text-[#4a3c32] font-semibold rounded px-6 py-2 hover:bg-[#f9f6f1] transition drop-shadow-lg">
      Sewa Sekarang
    </button>
    <button aria-label="Scroll down" class="mt-8 text-white text-2xl animate-bounce">
      <i class="fas fa-chevron-down"></i>
    </button>
  </section>

  <section id="tentang" class="">
    @include('pages.about')
  </section>

     <!-- Hubungi Kami -->
  <section id="hubungi" class="pt-24">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>
 </body>
</html>
