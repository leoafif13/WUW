<header class="fixed top-0 left-0 z-20 bg-transparent backdrop-blur-md w-full text-sm font-semibold">
  <div class="flex items-center justify-between px-6 py-4 max-w-7xl mx-auto">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="img/logo1.png" alt="WUW logo icon" class="w-8 h-8 object-cover rounded-full" />
      <span class="text-[#f9f6f1] font-bold text-base select-none">WUW</span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex space-x-8 text-[#f9f6f1] font-semibold text-sm">
      <a href="#home" class="hover:underline px-2 tracking-wide">Home</a>
      <a href="#tentang" class="hover:underline px-2 tracking-wide">Tentang</a>
      <a href="#produk" class="nav-item hover:underline" id="produk-nav">Produk</a>
      <a href="#hubungi" class="hover:underline px-2 tracking-wide">Hubungi Kami</a>
    </nav>

    <!-- Desktop Icons -->
    <div class="hidden md:flex space-x-6 text-[#f9f6f1] text-xl items-center">
      <button aria-label="Catatan" class="hover:text-blue-900 transition duration-200">
      <span class="material-symbols-outlined">sticky_note_2</span>
      </button>
      <a href="/keranjang" aria-label="Keranjang" class="hover:text-blue-900 transition duration-200">
        <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
        </svg>
      </a>
      <!-- Profile Icon with Dropdown -->
      <div class="relative z-30">
        <button aria-label="Akun" class="hover:text-blue-900 transition" id="profile-btn">
          <i class="far fa-user-circle"></i>
        </button>
        <div id="profile-dropdown" class="absolute right-0 mt-2 w-45 bg-white text-[#4a3c32] shadow-lg rounded-lg hidden z-40">
          <a href="/profile" class="block bg-[#f9f6f1] px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition duration-200">Profile Saya</a>
          <a href="/ganti_password" class="block bg-[#f9f6f1] px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition duration-200">Ganti Kata Sandi</a><hr class="text-gray-300">
          <a href="/index" class="block bg-[#f9f6f1] px-4 py-2 text-sm hover:text-white hover:bg-blue-900 transition duration-200">Keluar</a>
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
<div id="mobile-menu" class="md:hidden hidden bg-transparent backdrop-blur-md px-6 py-4 space-y-4 text-white text-sm font-semibold">
  <a href="#home" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Home</a>
  <a href="#tentang" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Tentang</a>
  <a href="#produk" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Produk</a>
  <a href="#hubungi" class="block nav-item hover:bg-blue-900 p-2 rounded-xl transition duration-200">Hubungi Kami</a>

  <div class="flex items-center justify-center space-x-6 text-xl text-white pt-4 border-t border-[#d8cfc6]">
  <!-- Catatan -->
  <button aria-label="Catatan" class="flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition duration-200">
    <span class="material-symbols-outlined text-2xl">sticky_note_2</span>
  </button>

  <!-- Keranjang -->
  <button aria-label="Keranjang" class="flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition duration-200">
  <svg class="w-7 h-7 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/></svg>
  </button>

  <div class="relative flex items-center justify-center">
  <button aria-label="Akun" class="flex items-center justify-center p-2 hover:text-blue-900 rounded-xl transition duration-200" id="profile-btn-mobile">
    <i class="far fa-user-circle text-2xl"></i>
  </button>
  <div id="profile-dropdown-mobile" class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-48 bg-white text-[#4a3c32] shadow-lg rounded-lg hidden z-40">
    <a href="/profile" class="block px-4 py-2 text-sm">Profile Saya</a>
    <a href="/ganti_password" class="block px-4 py-2 text-sm">Ganti Kata Sandi</a><hr class="text-gray-300">
    <a href="#logout" class="block px-4 py-2 text-sm">Keluar</a>
  </div>
</div>

</div>

  </div>
</div>

<!-- Script -->
<script>
  // Toggle mobile menu
  const menuToggle = document.getElementById('menu-toggle');
  const mobileMenu = document.getElementById('mobile-menu');

  menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Desktop Profile Dropdown
  const profileBtn = document.getElementById('profile-btn');
  const profileDropdown = document.getElementById('profile-dropdown');

  profileBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    profileDropdown.classList.toggle('hidden');
  });

  // Mobile Profile Dropdown
  const profileBtnMobile = document.getElementById('profile-btn-mobile');
  const profileDropdownMobile = document.getElementById('profile-dropdown-mobile');

  profileBtnMobile.addEventListener('click', (event) => {
    event.stopPropagation();
    profileDropdownMobile.classList.toggle('hidden');
  });

  // Close all dropdowns if clicked outside
  window.addEventListener('click', (e) => {
    if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
      profileDropdown.classList.add('hidden');
    }

    if (!profileBtnMobile.contains(e.target) && !profileDropdownMobile.contains(e.target)) {
      profileDropdownMobile.classList.add('hidden');
    }
  });
</script>
</header>