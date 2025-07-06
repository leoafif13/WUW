@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-start relative">
  <img src="{{ asset('img/Background 3.png') }}" alt="Background image" class="absolute inset-0 w-full h-full object-cover opacity-80" loading="lazy" aria-hidden="true" />
  
  <!-- Logo dan Judul -->
  <div class="relative z-10 mt-16 sm:mt-20 md:mt-28 flex flex-col items-center px-4 text-center">
    <img src="{{ asset('img/Logo WUW.png') }}" alt="Logo WUW" class="mb-2 w-16 h-16 sm:w-20 sm:h-20 object-contain" />
    <h1 class="text-white font-bold text-lg sm:text-xl mb-4 drop-shadow-[0_0_2px_rgba(0,0,0,0.7)]">Masuk</h1>
  </div>

  <!-- Form Login -->
  <form method="POST" action="{{ route('login') }}" autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-md p-4 sm:p-6 mb-12">
    @csrf

    {{-- Notifikasi Berhasil Register --}}
    @if(session('success'))
      <div class="bg-green-100 text-green-800 text-sm p-3 rounded mb-4 border border-green-300">
        {{ session('success') }}
      </div>
    @endif

    {{-- Tampilkan error login jika ada --}}
    @if($errors->any())
      <div class="text-red-600 text-sm mb-4">
        {{ $errors->first() }}
      </div>
    @endif

    {{-- Tampilkan error jika captcha salah --}}
    @error('g-recaptcha-response')
      <div class="text-red-600 text-sm mb-4">
        {{ $message }}
      </div>
    @enderror

    <div class="mb-4">
      <x-label for="email" value="Email" />
      <x-input id="email" name="email" placeholder="Masukkan Email" type="email" required autofocus autocomplete="email" oninvalid="this.setCustomValidity('Silakan isi alamat email yang valid')" oninput="this.setCustomValidity('')"/>
    </div>

    <div class="mb-4">
      <x-label for="password" value="Kata Sandi" />
      <x-input id="password" name="password" placeholder="Masukkan Kata Sandi" type="password" required oninvalid="this.setCustomValidity('Silakan masukkan kata sandi')" oninput="this.setCustomValidity('')"/>
    </div>

    {{-- Tampilkan CAPTCHA --}}
    <div class="mb-4">
      {!! NoCaptcha::display() !!}
    </div>

    {!! NoCaptcha::renderJs() !!}

    <x-button type="submit" class="w-full">Masuk</x-button>

    <p class="mt-4 text-xs text-center text-black">
      Belum punya akun?
      <a class="underline hover:text-[#1e3a8a]" href="{{ route('register') }}">
        Daftar sekarang
      </a>
    </p>
  </form>
</div>
@endsection
