<!DOCTYPE html>
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>@yield('title', 'Laravel App')</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=sticky_note_2" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
 <body>
    <!-- Konten utama akan ditampilkan di sini -->
    @yield('content')

    <!-- Tambahkan JS tambahan jika perlu -->
 </body>
 </html>