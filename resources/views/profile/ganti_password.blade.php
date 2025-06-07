@extends('layouts.app')
@section('title', 'Ganti Password')
@section('content')
<body class="bg-blue-900 min-h-screen flex flex-col">
  <header class="flex items-center px-4 py-3 text-white font-extrabold text-sm">
    <a href="{{ url('/home') }}" aria-label="Back" class="mr-4 focus:outline-none hover:text-gray-300">
      <i class="fas fa-chevron-left"></i>
    </a>
    <h1 class="flex-1 text-center font-extrabold text-sm">Ganti Password</h1>
    <div class="w-6"></div>
  </header>

  <main class="flex-grow flex flex-col items-center justify-center px-4 relative"
        style="background-image: url('{{ asset('img/Background 3.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-60 -z-10 rounded-md"></div>

    <!-- Profil -->
    <div class="flex flex-col items-center mb-4 relative z-10">
      <div class="w-16 h-16 rounded-full border-4 border-blue-900 overflow-hidden mb-2 bg-white">
        @if ($user->foto)
          <img src="{{ asset('storage/' . $user->foto) }}" alt="Foto Profil" class="w-full h-full object-cover">
        @else
          <div class="w-full h-full flex items-center justify-center">
            <i class="fas fa-user text-blue-900 text-3xl"></i>
          </div>
        @endif
      </div>
      <span class="font-bold text-white text-lg select-none drop-shadow-md">{{ $user->name }}</span>
    </div>

    <!-- Form Ganti Password -->
    <div class="bg-white bg-opacity-90 rounded-lg p-6 w-full max-w-sm relative z-10">
      @if ($errors->any())
        <div class="mb-4 text-red-600 text-xs">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('updatePassword') }}" class="space-y-4">
        @csrf

        <x-input-password
          id="current_password"
          name="current_password"
          label="Password Lama"
          placeholder="Masukkan Password Lama" />

        <x-input-password
          id="new_password"
          name="new_password"
          label="Password Baru"
          placeholder="Masukkan Password Baru" />

        <x-input-password
          id="new_password_confirmation"
          name="new_password_confirmation"
          label="Konfirmasi Password Baru"
          placeholder="Konfirmasi Password Baru" />

        <button type="submit" class="w-full bg-blue-900 text-white text-xs font-bold py-2 rounded mt-1 hover:bg-blue-500">
          Ubah Password
        </button>
      </form>
    </div>
  </main>
</body>
@endsection
