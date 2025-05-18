@extends('layouts.app')
@section('title', 'login')
@section('content')
  <div class="min-h-screen flex flex-col items-center justify-start bg-[rgb(9, 41, 201)]  relative">
    <img src="img/Background 3.png" alt="Background image" class="absolute inset-0 w-full h-full object-cover opacity-80" loading="lazy" aria-hidden="true" />
    
    <div class="relative z-10 mt-20 md:mt-28 flex flex-col items-center">
      <img src="img/logo1.png" alt="Logo WJ Wear Jak Rock" class="mb-2 w-20 h-20 object-contain" />
      <h1 class="text-white font-bold text-lg mb-4 drop-shadow-[0_0_2px_rgba(0,0,0,0.7)]">
        Masuk
      </h1>
    </div>
    
    <form autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-md p-4 md:p-6 mb-12">
      <div class="mb-4">
        <x-label for="email" value="Email"/>
        <x-input id="email" name="email" placeholder="Masukkan Email" type="text"/>
      </div>
    
      <div class="mb-4">
        <x-label for="password" value="Kata Sandi" />
        <x-input id="Password" name="Password" placeholder="Masukkan Kata Sandi" type="password"/>
      </div>
      
      <x-button type="submit">
       Masuk
      </x-button>

      
      <p class="mt-2 text-[10px] text-center text-black">
        Belum punya akun?
        <a class="underline hover:text-[#5a0a0a]" href="/register">
          Daftar sekarang
        </a>
      </p>
    </form>
  </div>
@endsection