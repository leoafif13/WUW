<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Masuk</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: "Poppins", sans-serif;
    }
  </style>
</head>
<body>
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
        <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="namaPengguna">
          Nama Pengguna
        </label>
        <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="namaPengguna" name="namaPengguna" placeholder="Masukkan Nama Pengguna" type="text"/>
      </div>
      
      <div class="mb-4">
        <label class="block text-[13px] font-semibold text-[#000353] mb-1" for="kataSandi">
          Kata Sandi
        </label>
        <input class="w-full bg-[#d1d1d1] text-[13px] placeholder:text-[#a3a3a3] rounded-sm px-2 py-2 focus:outline-none" id="kataSandi" name="kataSandi" placeholder="Masukkan Kata Sandi" type="password"/>
      </div>
      
      <button class="mt-2 w-full bg-[#000353] text-white text-[13px] font-semibold py-2 rounded-sm hover:bg-[#509fe4] transition-colors" type="submit">
        Masuk
      </button>
      
      <p class="mt-2 text-[10px] text-center text-black">
        Belum punya akun?
        <a class="underline hover:text-[#5a0a0a]" href="/register">
          Daftar sekarang
        </a>
      </p>
    </form>
  </div>
</body>
</html>
