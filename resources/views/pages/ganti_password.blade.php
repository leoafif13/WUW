@extends('layouts.app')
@section('title', 'ganti password')
@section('content')
<body class="bg-blue-900 min-h-screen flex flex-col">
  <header class="flex items-center px-4 py-3 text-white font-extrabold text-sm">
    <button aria-label="Back" class="mr-4 focus:outline-none hover:text-gray-300" onclick="window.history.back()">
      <i class="fas fa-chevron-left"></i>
    </button>
    <h1 class="flex-1 text-center font-extrabold text-sm">Ganti Password</h1>
    <div class="w-6"></div>
  </header>

  <main class="flex-grow flex flex-col items-center justify-center px-4 relative"
        style="background-image: url('img/Background 3.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-60 -z-10 rounded-md"></div>

    <!-- Profil -->
    <div class="flex flex-col items-center mb-4 relative z-10">
      <div class="w-16 h-16 rounded-full border-4 border-blue-900 flex items-center justify-center mb-2 bg-white">
        <i class="fas fa-user text-blue-900 text-3xl"></i>
      </div>
      <span class="font-bold text-white text-lg select-none drop-shadow-md">{{ $user->name }}</span>
    </div>

    <!-- Form -->
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
       

        <div>
          <label class="block text-xs font-bold text-blue-900 mb-1" for="current_password">Password Lama</label>
          <input class="w-full bg-gray-300 text-gray-700 text-xs rounded px-3 py-2 focus:outline-none"
                 id="current_password" name="current_password" type="password" placeholder="Masukkan Password Lama" required />
        </div>

        <div>
          <label class="block text-xs font-bold text-blue-900 mb-1" for="new_password">Password Baru</label>
          <input class="w-full bg-gray-300 text-gray-700 text-xs rounded px-3 py-2 focus:outline-none"
                 id="new_password" name="new_password" type="password" placeholder="Masukkan Password Baru" required />
        </div>

        <div>
          <label class="block text-xs font-bold text-blue-900 mb-1" for="new_password_confirmation">Konfirmasi Password Baru</label>
          <input class="w-full bg-gray-300 text-gray-700 text-xs rounded px-3 py-2 focus:outline-none"
                 id="new_password_confirmation" name="new_password_confirmation" type="password" placeholder="Konfirmasi Password Baru" required />
        </div>

        <button type="submit" class="w-full bg-blue-900 text-white text-xs font-bold py-2 rounded mt-1 hover:bg-blue-500">
          Ubah Password
        </button>
      </form>
    </div>
  </main>
</body>
@endsection
