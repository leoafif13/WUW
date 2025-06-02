@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<body class="min-h-screen bg-cover bg-center flex flex-col" style="background-image: url('{{ asset('img/Background 3.png') }}')">
  <!-- Header -->
  <div class="bg-blue-900 flex items-center px-4 py-3">
    <button id="backButton" aria-label="Back" class="text-white hover:text-gray-300 text-lg mr-4">
      <i class="fas fa-chevron-left"></i>
    </button>
    <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">
      Profile Saya
    </h1>
    <div style="width: 24px;"></div>
  </div>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-lg">
      <!-- Profile Icon and Username -->
      <div class="flex flex-col items-center text-center">
        <div class="w-20 h-20 rounded-full border-4 border-blue-900 bg-white flex items-center justify-center mb-2">
          <i class="fas fa-user text-blue-900 text-4xl"></i>
        </div>
        <h2 class="text-white font-bold text-lg sm:text-xl">
          {{ $user->name }}
        </h2>
      </div>

      <!-- Profile Details -->
      <div class="bg-white rounded-md p-4 mt-6 text-sm sm:text-base">
        <p class="text-gray-500 mb-2">
          <span class="font-bold text-blue-900">Nama Lengkap:</span> {{ $user->name }}
        </p>
        <p class="text-gray-500 mb-2">
          <span class="font-bold text-blue-900">Alamat:</span> {{ $user->alamat ?? '-' }}
        </p>
        <p class="text-gray-500 mb-2">
          <span class="font-bold text-blue-900">Alamat Email:</span> {{ $user->email }}
        </p>
        <p class="text-gray-500 mb-2">
          <span class="font-bold text-blue-900">Nomor Telepon:</span> {{ $user->telepon ?? '-' }}
        </p>

        <!-- Edit Profile Button -->
        <a href="{{ url('/edit_profile') }}" class="w-full block text-center bg-blue-900 text-white py-2 rounded text-sm sm:text-base font-semibold">
          Edit Profile
        </a>
      </div>
    </div>
  </main>

  <script>
    // Tombol kembali
    document.getElementById('backButton').addEventListener('click', function() {
      window.history.back();
    });
  </script>
</body>
@endsection
