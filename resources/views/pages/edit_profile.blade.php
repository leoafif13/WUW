@extends('layouts.app')
@section('title', 'edit profile')
@section('content')
<body class="bg-cover bg-center min-h-screen flex flex-col" style="background-image: url('img/Background 3.png')">
  <!-- Header -->
  <header class="flex items-center px-4 py-3 text-white font-semibold text-sm bg-blue-900 backdrop-blur-sm">
    <button aria-label="Back" class="mr-4 focus:outline-none hover:text-gray-300" onclick="window.history.back()">
      <i class="fas fa-chevron-left"></i>
    </button>
    <h1 class="flex-1 text-center font-bold text-sm">Edit Profile</h1>
    <div class="w-6"></div>
  </header>

  <!-- Content -->
  <div class="flex-grow flex flex-col items-center justify-start px-4 mt-20 space-y-6">
    
    <!-- Profile icon & Upload Foto -->
    <div class="flex flex-col items-center space-y-2 z-10 mt-10"> 
      <img id="preview" 
           src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('img/default.png') }}" 
           alt="User profile icon"
           class="w-24 h-24 rounded-full border-4 border-blue-900 object-cover shadow-md" />
      
      <!-- Tombol Upload -->
      <label for="foto" class="inline-block bg-blue-900 text-white text-xs px-4 py-2 rounded-lg cursor-pointer shadow">
        Upload Foto
      </label>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="bg-white bg-opacity-90 rounded-md p-6 w-full max-w-2xl space-y-4 z-10">
      @csrf
      @method('PUT')

      <!-- Hidden input foto -->
      <input type="file" name="foto" id="foto" class="hidden" accept="image/*" onchange="previewImage(event)" />

      <!-- Input fields -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="name" class="block text-blue-900 font-bold text-xs mb-1">Nama Lengkap</label>
          <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" autocomplete="name"/>
        </div>
        <div>
          <label for="alamat" class="block text-blue-900 font-bold text-xs mb-1">Alamat</label>
          <input id="alamat" name="alamat" type="text" value="{{ old('alamat', $user->alamat) }}" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
        <div>
          <label for="telepon" class="block text-blue-900 font-bold text-xs mb-1">Nomor Telepon</label>
          <input id="telepon" name="telepon" type="tel" value="{{ old('telepon', $user->telepon) }}" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
        <div>
          <label for="email" class="block text-blue-900 font-bold text-xs mb-1">Alamat Email</label>
          <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" autocomplete="email" />
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="w-full bg-blue-900 text-white font-bold text-xs py-2 rounded hover:bg-blue-500">
        Ubah Profile
      </button>
    </form>
  </div>

  <!-- Preview JS -->
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
  </script>
</body>
@endsection
