@extends('layouts.app')
@section('title', 'register')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-start bg-[rgba(0,0,0,0.3)] relative">
  <img src="img/Background 3.png" alt="Background image" class="absolute inset-0 w-full h-full object-cover opacity-80" loading="lazy" aria-hidden="true" />
  <div class="relative z-10 mt-20 md:mt-28 flex flex-col items-center">
    <img src="img/logo1.png" alt="Logo WJ Wear Jak Rock" class="mb-2 w-20 h-20 object-contain" />
    <h1 class="text-white font-bold text-lg mb-4 drop-shadow-[0_0_2px_rgba(0,0,0,0.7)]">
      Daftar Akun
    </h1>
  </div>
  
  <form method="POST" action="{{ route('register') }}" autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-3xl p-4 md:p-6 mb-12">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
      <div>
        <x-label for="name" value="Nama Lengkap" />
        <x-input id="name" name="name" type="text" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}" />
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="alamat" value="Alamat"/>
        <x-input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" value="{{ old('alamat') }}" />
        @error('alamat')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="email" value="Alamat Email" />
        <x-input id="email" name="email" placeholder="Masukkan Alamat Email" type="email" value="{{ old('email') }}" />
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="telepon" value="No Telepon" />
        <x-input id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" type="tel" value="{{ old('telepon') }}" />
        @error('telepon')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="password" value="Kata Sandi" />
        <x-input id="password" name="password" placeholder="Masukkan Kata Sandi" type="password" />
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="password_confirmation" value="Konfirmasi Kata Sandi" />
        <x-input id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" type="password" />
      </div>
    </div>

    <div class="mt-2 text-[10px] text-black flex items-start">
      <input class="mt-[3px] mr-1 w-3 h-3 accent-[#5a0a0a]" id="agree" type="checkbox" required />
      <label class="leading-tight" for="agree">
        Saya Menyetujui Ketentuan Layanan dan Kebijakan Privasi yang Berlaku
      </label>
    </div>

    <x-button type="submit" class="mt-4">Buat Akun</x-button>

    <p class="mt-2 text-[10px] text-center text-black">
      Sudah punya akun?
      <a class="underline hover:text-[#5a0a0a]" href="{{ route('login') }}">
        Masuk sekarang
      </a>
    </p>
  </form>
</div>
@endsection
