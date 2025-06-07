@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<body class="min-h-screen bg-cover bg-center flex flex-col" style="background-image: url('{{ asset('img/Background 3.png') }}')">
  
  <!-- Header -->
  <div class="bg-blue-900 flex items-center px-4 py-3">
    <a href="{{ url('/home') }}" aria-label="Back" class="text-white hover:text-gray-300 text-lg mr-4">
      <i class="fas fa-chevron-left"></i>
    </a>
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
        <x-profile-picture :foto="$user->foto" />
        <h2 class="text-white font-bold text-lg sm:text-xl">
          {{ $user->name }}
        </h2>
      </div>

      <!-- Profile Details -->
      <div class="bg-white rounded-md p-4 mt-6 text-sm sm:text-base">
        <x-profile-row label="Nama Lengkap" :value="$user->name" />
        <x-profile-row label="Alamat" :value="$user->alamat" />
        <x-profile-row label="Alamat Email" :value="$user->email" />
        <x-profile-row label="Nomor Telepon" :value="$user->telepon" />

        <a href="{{ url('/edit_profile') }}" class="w-full block text-center bg-blue-900 text-white py-2 rounded text-sm sm:text-base font-semibold">
          Edit Profile
        </a>
      </div>
    </div>
  </main>
</body>
@endsection
