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
   <form autocomplete="off" class="relative z-10 bg-white bg-opacity-90 rounded-md w-[90vw] max-w-3xl p-4 md:p-6 mb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="namaLengkap">
       Nama Lengkap
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="namaLengkap" name="namaLengkap" placeholder="Masukkan Nama Lengkap" type="text"/>
     </div>
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="namaPengguna">
       Nama Pengguna
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="namaPengguna" name="namaPengguna" placeholder="Masukkan Nama Pengguna" type="text"/>
     </div>
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="alamatEmail">
       Alamat Email
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="alamatEmail" name="alamatEmail" placeholder="Masukkan Alamat Email" type="email"/>
     </div>
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="nomorTelepon">
       Nomor Telepon
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="nomorTelepon" name="nomorTelepon" placeholder="Masukkan Nomor Telepon" type="tel"/>
     </div>
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="kataSandi">
       Kata Sandi
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="kataSandi" name="kataSandi" placeholder="Masukkan Kata Sandi" type="password"/>
     </div>
     <div>
      <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="konfirmasiKataSandi">
       Konfirmasi Kata Sandi
      </label>
      <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="konfirmasiKataSandi" name="konfirmasiKataSandi" placeholder="Masukkan Konfirmasi Kata Sandi" type="password"/>
     </div>
    </div>
    <div class="mt-2 text-[10px] text-black flex items-start">
     <input class="mt-[3px] mr-1 w-3 h-3 accent-[#5a0a0a]" id="agree" type="checkbox"/>
     <label class="leading-tight" for="agree">
      Saya Menyetujui Ketentuan Layanan dan Kebijakan Privasi yang Berlaku
     </label>
    </div>
    <button class="mt-3 w-full bg-[#000353] text-white text-[13px] font-semibold py-2 rounded-sm hover:bg-[#504fe4] transition-colors" type="submit">
     Buat Akun
    </button>
    <p class="mt-2 text-[10px] text-center text-black">
     Sudah punya akun?
     <a class="underline hover:text-[#5a0a0a]" href="/login">
      Masuk sekarang
     </a>
    </p>
   </form>
  </div>
  @endsection