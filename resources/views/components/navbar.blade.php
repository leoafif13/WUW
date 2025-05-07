<header class="fixed top-0 left-0 w-full z-50 bg-transparent backdrop-blur-md text-white shadow">
  <div class="flex items-center justify-between max-w-7xl mx-auto px-6 py-4 md:px-12">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="img/logo1.png" alt="WUW logo icon" class="w-8 h-8 object-cover rounded-full" />
      <span class="text-[#f9f6f1] font-bold text-base select-none">WUW</span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8 text-[#f9f6f1] font-semibold text-sm">
      <a href="#beranda" class="hover:underline px-2 tracking-wide">Beranda</a>
      <a href="#tentang" class="hover:underline px-2 tracking-wide">Tentang</a>
      <a href="#produk" class="hover:underline px-2 tracking-wide">Produk</a>
      <a href="#hubungi" class="hover:underline px-2 tracking-wide">Hubungi Kami</a>
    </nav>

    <!-- Auth Buttons & Mobile Toggle -->
        <!-- Auth Buttons -->
    <div class="hidden md:flex items-center space-x-4 font-semibold text-base">
      <a href="/register" class="hover:underline">Daftar</a>
      <a href="/login" class="bg-white text-blue-900 px-4 py-2 rounded-lg font-bold hover:bg-gray-900 hover:text-blue-300 transition">Masuk</a>
    </div>


      <!-- Mobile Toggle -->
      <div class="md:hidden">
        <button id="menu-toggle" class="text-[#f9f6f1] text-2xl focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden bg-transparent backdrop-blur-md px-6 py-4 space-y-4 text-white text-sm font-semibold">
    <a href="#beranda" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Beranda</a>
    <a href="#tentang" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Tentang</a>
    <a href="#produk" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Produk</a>
    <a href="#hubungi" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Hubungi Kami</a>
    <a href="/register" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Daftar</a>
    <a href="/login" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Masuk</a>
  </div>

  <!-- Script untuk toggle menu -->
  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>
