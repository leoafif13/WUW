@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')

<body class="bg-cover bg-center min-h-screen flex flex-col" style="background-image: url('img/Background 3.png')">
  <!-- Header -->
  <header class="flex items-center px-4 py-3 text-white font-semibold text-sm bg-blue-900 backdrop-blur-sm">
    <a href="{{ url('/profile') }}" aria-label="Back" class="mr-4 focus:outline-none text-lg hover:text-blue-500">
      <i class="fas fa-arrow-left"></i>
    </a>
    <h1 class="flex-1 text-center font-bold text-sm">Edit Profile</h1>
    <div class="w-6"></div>
  </header>

  <!-- Content -->
  <div class="flex-grow flex flex-col items-center justify-start px-4 mt-20 space-y-6">
    
    <!-- Upload Foto Profil -->
    <x-upload-photo :src="$user->foto ? asset('storage/' . $user->foto) : asset('img/default.png')" />

    <!-- Form -->
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="bg-white bg-opacity-90 rounded-md p-6 w-full max-w-2xl space-y-4 z-10">
      @csrf
      @method('PUT')

      <!-- Hidden input untuk foto profil -->
      <input type="file" name="foto" id="foto" class="hidden" accept="image/*" onchange="previewImage(event)" />

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <x-input-group label="Nama Lengkap" name="name" :value="$user->name" />
        <x-input-group label="Alamat" name="alamat" :value="$user->alamat" />
        <x-input-group label="Nomor Telepon" name="telepon" type="tel" :value="$user->telepon" />
        <x-input-group label="Alamat Email" name="email" type="email" :value="$user->email" />
      </div>

      <!-- Upload Foto KTP -->
      <div class="space-y-1">
        <label for="foto_ktp" class="block text-sm text-blue-900 font-bold">Foto KTP</label>
        <input type="file" name="foto_ktp" id="foto_ktp" accept="image/*" class="w-full text-sm border border-gray-300 rounded px-3 py-2" onchange="previewKtp(event)">
        @if ($user->foto_ktp)
          <img id="ktp-preview" src="{{ asset('storage/' . $user->foto_ktp) }}" alt="Foto KTP" class="w-40 h-auto mt-2 rounded border" />
        @else
          <img id="ktp-preview" src="#" alt="Preview Foto KTP" class="w-40 h-auto mt-2 rounded border hidden" />
        @endif
      </div>

      <!-- Status Verifikasi -->
      <div class="space-y-1">
        <label for="status" class="block text-sm  text-blue-900 font-bold">Status Verifikasi</label>
      @php
          $status = $user->status_verifikasi ?? 'menunggu';
          $colorClass = match($status) {
              'terverifikasi' => 'text-green-600 font-semibold',
              'menunggu' => 'text-yellow-500 font-semibold',
              default => 'text-gray-600',
          };
      @endphp
        <input type="text" id="status" name="status_verifikasi" class="w-full text-sm border border-gray-300 rounded px-3 py-2 bg-gray-100 {{ $colorClass }}" value="{{ ucfirst($status) }}" readonly />
              </div>
      <!-- Tombol Submit -->
      <button type="submit" class="w-full bg-blue-900 text-white font-bold text-xs py-2 rounded hover:bg-blue-500">
        Ubah Profil
      </button>
    </form>
  </div>

  <script>
    function previewImage(event) {
      const input = event.target;
      const reader = new FileReader();
      reader.onload = function () {
        const img = document.getElementById('preview');
        img.src = reader.result;
      };
      reader.readAsDataURL(input.files[0]);
    }

    function previewKtp(event) {
      const input = event.target;
      const reader = new FileReader();
      reader.onload = function () {
        const img = document.getElementById('ktp-preview');
        img.src = reader.result;
        img.classList.remove('hidden');
      };
      if (input.files.length > 0) {
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

</body>
@endsection
