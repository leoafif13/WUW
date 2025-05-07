@extends('layouts.app')
@section('title', 'profile')
@section('content')
<body class="min-h-screen bg-cover bg-center" style="background-image: url('img/Background 3.png')">
  <!-- Header -->
  <div class="bg-blue-900 flex items-center px-4 py-3">
    <button id="backButton" aria-label="Back" class="text-white hover:text-gray-300 text-lg mr-4">
      <i class="fas fa-arrow-left"></i>
    </button>
    <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">
      Profile Saya
    </h1>
    <div style="width: 24px;"></div>
  </div>

  <!-- Main Content -->
  <main class="max-w-lg mx-auto mt-10 px-4">
    <!-- Profile Icon and Username -->
    <div class="flex flex-col items-center">
      <div class="w-20 h-20 rounded-full border-4 border-blue-900 bg-white flex items-center justify-center mb-2">
        <i class="fas fa-user text-blue-900 text-4xl"></i>
      </div>
      <h2 class="text-white font-bold text-lg sm:text-xl">
        Username
      </h2>
    </div>

    <!-- Profile Details -->
    <div class="bg-white rounded-md p-4 mt-6 text-sm sm:text-base">
      <p class="text-gray-500 mb-2">
        <span class="font-bold text-blue-900">Nama Pengguna:</span> Username
      </p>
      <p class="text-gray-500 mb-2">
        <span class="font-bold text-blue-900">Alamat Email:</span> username@gmail.com
      </p>
      <p class="text-gray-500 mb-2">
        <span class="font-bold text-blue-900">Nomor Telepon:</span> 0812-3456-7890
      </p>
      <p class="text-gray-500 mb-4">
        <span class="font-bold text-blue-900">Alamat Rumah:</span><br />
        Politeknik Negeri Batam. Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota. Kota Batam, Kepulauan Riau 29461
      </p>

      <!-- Edit Profile Button -->
      <a href="/edit_profile" class="w-full block text-center bg-blue-900 text-white py-2 rounded text-sm sm:text-base font-semibold">
        Edit Profile
      </a>
    </div>
  </main>

  <script>
    // JavaScript to handle the back button functionality
    document.getElementById('backButton').addEventListener('click', function() {
      window.history.back(); // This goes back to the previous page in history
    });
  </script>
</body>
@endsection