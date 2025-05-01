<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Syarat dan Panduan Menyewa</title>
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
<body class="bg-gray-100 font-sans leading-relaxed">
    <div class="bg-blue-900 flex items-center px-4 py-3">
        <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
        <i class="fas fa-arrow-left"></i>
        </button>
        <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">Syarat dan Panduan Menyewa</h1>
    </div>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="text-center text-xs text-gray-500 py-4">
       @include('components.footer')
    </footer>

</body>
</html>