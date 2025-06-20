<header class="fixed top-0 left-0 z-20 bg-transparent backdrop-blur-md w-full text-sm font-semibold">
  <div class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <x-logo />
      <span class="text-[#f9f6f1] font-bold text-base select-none">WUW</span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8 text-[#f9f6f1] font-semibold">
      <a href="/home" class="hover:underline px-2 tracking-wide">Home</a>
      <a href="/home#tentang" class="hover:underline px-2 tracking-wide">Tentang</a>
      <a href="/barang" class="hover:underline px-2 tracking-wide">Produk</a>
      <a href="/home#hubungi" class="hover:underline px-2 tracking-wide">Hubungi Kami</a>
      <a href="/ulasan" class="hover:underline px-2 tracking-wide">Ulasan</a>
    </nav>

    <!-- Desktop Icons -->
    <div class="hidden md:flex space-x-6 text-[#f9f6f1] text-xl items-center">
      <a href="/sewa" class="hover:text-blue-900 transition">
        <i class="fas fa-sticky-note"></i>
      </a>

      <a href="/keranjang" class="relative hover:text-blue-900 transition">
        <i class="fas fa-shopping-cart"></i>
        @if(session('keranjang') && count(session('keranjang')) > 0)
          <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
            {{ count(session('keranjang')) }}
          </span>
        @endif
      </a>

      <!-- Profile Desktop -->
      <div class="relative z-30">
        <button aria-label="Akun" id="profile-btn" class="hover:text-blue-900 transition">
          <i class="fas fa-user-circle"></i>
        </button>
        <div id="profile-dropdown" class="absolute right-0 mt-2 w-45 bg-white text-black shadow-lg rounded-lg hidden z-40">
          <a href="/profile" class="block px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition">Profile Saya</a>
          <a href="/ganti_password" class="block px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition">Ganti Kata Sandi</a>
          <a href="/history" class="block px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition">Riwayat Penyewaan</a>
          <hr class="text-gray-300">
          <a href="{{ route('keluar') }}" class="block w-full text-left px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition">Keluar</a>
        </div>
      </div>
    </div>

    <!-- Mobile Toggle -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-[#f9f6f1] text-2xl focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden bg-transparent backdrop-blur-md px-6 py-4 space-y-4 text-white font-semibold">
    <a href="/home" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition">Home</a>
    <a href="/home#tentang" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition">Tentang</a>
    <a href="/barang" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition">Produk</a>
    <a href="/home#hubungi" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition">Hubungi Kami</a>
    <a href="/ulasan" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition">Ulasan</a>

    <div class="flex items-center justify-center space-x-6 text-xl text-white pt-4 border-t border-[#d8cfc6]">
      <a href="/sewa" class="flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition">
        <i class="fas fa-sticky-note"></i>
      </a>

      <a href="/keranjang" class="relative flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition">
        <i class="fas fa-shopping-cart"></i>
        @if(session('keranjang') && count(session('keranjang')) > 0)
          <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
            {{ count(session('keranjang')) }}
          </span>
        @endif
      </a>

      <div class="relative flex items-center justify-center">
        <button id="profile-btn-mobile" class="flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition">
          <i class="fas fa-user-circle"></i>
        </button>
        <div id="profile-dropdown-mobile" class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white text-blue-900 shadow-lg rounded-lg hidden z-40">
          <a href="/profile" class="block px-4 py-2 text-sm">Profile Saya</a>
          <a href="/ganti_password" class="block px-4 py-2 text-sm">Ganti Kata Sandi</a>
          <a href="/history" class="block px-4 py-2 text-sm">Riwayat Pemesanan</a>
          <hr class="text-gray-300">
          <a href="{{ route('keluar') }}" class="block w-full text-left bg-[#f9f6f1] px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition">Keluar</a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Script -->
<script>
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  const profileBtn = document.getElementById('profile-btn');
  const profileDropdown = document.getElementById('profile-dropdown');
  profileBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    profileDropdown.classList.toggle('hidden');
  });

  const profileBtnMobile = document.getElementById('profile-btn-mobile');
  const profileDropdownMobile = document.getElementById('profile-dropdown-mobile');
  profileBtnMobile.addEventListener('click', (event) => {
    event.stopPropagation();
    profileDropdownMobile.classList.toggle('hidden');
  });

  window.addEventListener('click', (e) => {
    if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
      profileDropdown.classList.add('hidden');
    }
    if (!profileBtnMobile.contains(e.target) && !profileDropdownMobile.contains(e.target)) {
      profileDropdownMobile.classList.add('hidden');
    }
  });
</script>
