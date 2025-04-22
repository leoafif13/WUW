<nav class="fixed top-0 left-0 w-full z-50 bg-red-900 bg-opacity-95 backdrop-blur-md flex flex-wrap items-center justify-between p-4 md:px-12 text-white shadow">
  <!-- Logo -->
  <div class="flex items-center space-x-2">
    <img src="img/logo1.png" alt="Logo WUW" class="w-6 h-6 rounded-full">
    <span class="font-bold text-xl">WUW</span>
  </div>

  <!-- Hamburger (mobile only) -->
  <button id="menu-btn" class="md:hidden text-white">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>

  <!-- Menu + Auth -->
  <div id="menu" class="w-full mt-4 md:mt-0 hidden md:flex md:items-center md:space-x-6 md:w-auto md:flex-row font-medium flex-col items-center text-center space-y-4 md:space-y-0">
    
    <!-- Menu Links: DIGESER KIRI -->
    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 md:ml-[-2rem]">
      <a href="#beranda" class="hover:underline px-2 tracking-wide">Beranda</a>
      <a href="#tentang" class="hover:underline px-2 tracking-wide">Tentang</a>
      <a href="#produk" class="hover:underline px-2 tracking-wide">Produk</a>
      <a href="#hubungi" class="hover:underline px-2 tracking-wide">Hubungi Kami</a>
    </div>

    <!-- Auth Buttons -->
    <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
      <a href="/register" class="text-sm tracking-wide px-2">Daftar</a>
      <a href="/login" class="bg-white text-red-900 px-4 py-1 rounded font-bold text-sm tracking-wide hover:bg-gray-100 transition">Masuk</a>
    </div>
  </div>
</nav>

<!-- Script untuk toggle menu -->
<script>
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');
  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
