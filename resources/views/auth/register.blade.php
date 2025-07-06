@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-start bg-[rgba(0,0,0,0.3)] relative">
  <img src="img/Background 3.png" alt="Background image" class="absolute inset-0 w-full h-full object-cover opacity-80" loading="lazy" aria-hidden="true" />

  <div class="relative z-10 mt-20 md:mt-28 flex flex-col items-center">
    <img src="img/Logo WUW.png" alt="Logo WUW" class="mb-2 w-20 h-20 object-contain" />
    <h1 class="text-white font-bold text-lg mb-4 drop-shadow-[0_0_2px_rgba(0,0,0,0.7)]">Daftar Akun</h1>
  </div>

  <form method="POST" action="{{ route('register') }}" autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-3xl p-4 md:p-6 mb-12">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
      <div>
        <x-label for="name" value="Nama Lengkap" />
        <x-input id="name" name="name" type="text" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}" autocomplete="name" required   oninvalid="this.setCustomValidity('Silakan isi nama lengkap Anda')" oninput="this.setCustomValidity('')"/>
        @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="email" value="Alamat Email" />
        <x-input id="email" name="email" placeholder="Masukkan Alamat Email" type="email" value="{{ old('email') }}" autocomplete="email" required  oninvalid="this.setCustomValidity('Silakan isi alamat email yang valid')" oninput="this.setCustomValidity('')"/>
        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="password" value="Kata Sandi" />
        <x-input id="password" name="password" placeholder="Masukkan Kata Sandi" type="password" required  oninvalid="this.setCustomValidity('Silakan masukkan kata sandi')" oninput="this.setCustomValidity('')"/>
        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <x-label for="password_confirmation" value="Konfirmasi Kata Sandi" />
        <x-input id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" type="password" required oninvalid="this.setCustomValidity('Silakan konfirmasi kata sandi')" oninput="this.setCustomValidity('')" />
      </div>
    </div>

    <div class="mt-2 text-[10px] text-black flex items-center">
      <input class="mr-2 w-3 h-3 accent-[#1e3a8a]" id="agree" type="checkbox" required  oninvalid="this.setCustomValidity('Silakan setujui ketentuan layanan dan kebijakan privasi terlebih dahulu')" oninput="this.setCustomValidity('')" />
      <label class="leading-tight" for="agree">
        Saya menyetujui 
        <a href="{{ route('terms') }}" class="underline hover:text-[#1e3a8a]" target="_blank">Ketentuan Layanan</a>
        dan
        <a href="{{ route('policy') }}" class="underline hover:text-[#1e3a8a]" target="_blank">Kebijakan Privasi</a>
        yang berlaku.
      </label>
    </div>

    <x-button type="submit" class="mt-4">Buat Akun</x-button>

    <p class="mt-2 text-[10px] text-center text-black">
      Sudah punya akun?
      <a class="underline hover:text-[#1e3a8a]" href="{{ route('login') }}">Masuk sekarang</a>
    </p>
  </form>
</div>
@endsection
