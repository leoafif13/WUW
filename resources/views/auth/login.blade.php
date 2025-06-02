@extends('layouts.app')
@section('title', 'login')
@section('content')
<div class="min-h-screen flex flex-col items-center justify-start bg-[rgb(9, 41, 201)] relative">
  <img src="{{ asset('img/Background 3.png') }}" alt="Background image" class="absolute inset-0 w-full h-full object-cover opacity-80" loading="lazy" aria-hidden="true" />
  
  <!-- Logo dan Judul -->
  <div class="relative z-10 mt-16 sm:mt-20 md:mt-28 flex flex-col items-center px-4 text-center">
    <img src="{{ asset('img/logo1.png') }}" alt="Logo WJ Wear Jak Rock" class="mb-2 w-16 h-16 sm:w-20 sm:h-20 object-contain" />
    <h1 class="text-white font-bold text-lg sm:text-xl mb-4 drop-shadow-[0_0_2px_rgba(0,0,0,0.7)]">
      Masuk
    </h1>
  </div>
  
  <!-- Form Login -->
  <form method="POST" action="{{ route('login') }}" autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-md p-4 sm:p-6 mb-12">
    @csrf

    {{-- Tampilkan error login jika ada --}}
    @if($errors->any())
      <div class="text-red-600 text-sm mb-4">
        {{ $errors->first() }}
      </div>
    @endif

    {{-- Tampilkan error reCAPTCHA jika ada --}}
    @if($errors->has('captcha'))
      <div class="text-red-600 text-sm mb-4">
        {{ $errors->first('captcha') }}
      </div>
    @endif

    <div class="mb-4">
      <x-label for="email" value="Email" />
      <x-input id="email" name="email" placeholder="Masukkan Email" type="email" required autofocus autocomplete="email"/>
    </div>

    <div class="mb-4">
      <x-label for="password" value="Kata Sandi" />
      <x-input id="password" name="password" placeholder="Masukkan Kata Sandi" type="password" required />
    </div>

    <div class="mb-4">
      <div class="w-full flex justify-center">
        <div class="g-recaptcha transform scale-[0.95] origin-top" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
      </div>
    </div>

   
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  


    <x-button type="submit" class="w-full">
      Masuk
    </x-button>

    <p class="mt-4 text-xs text-center text-black">
      Belum punya akun?
      <a class="underline hover:text-[#5a0a0a]" href="{{ route('register') }}">
        Daftar sekarang
      </a>
    </p>
  </form>
</div>
@endsection
