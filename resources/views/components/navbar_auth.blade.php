<header class="fixed top-0 left-0 z-20 bg-amber-900 w-full text-sm font-semibold">
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
      <button aria-label="Catatan" class="hover:text-[#e0d8cc] transition">
        <i class="far fa-sticky-note"></i>
      </button>
      <button aria-label="Keranjang" class="hover:text-[#e0d8cc] transition">
        <i class="fas fa-shopping-cart"></i>
      </button>

      <!-- Profile Icon with Dropdown -->
      <div class="relative z-30">
        <button aria-label="Akun" class="hover:text-[#e0d8cc] transition" id="profile-btn">
          <i class="far fa-user-circle"></i>
        </button>
        <div id="profile-dropdown" class="absolute right-0 mt-2 w-48 bg-white text-[#4a3c32] shadow-lg rounded-lg hidden z-40">
          <a href="/profile" class="block px-4 py-2 text-sm">Profile Saya</a>
          <a href="/ganti_password" class="block px-4 py-2 text-sm">Ganti Kata Sandi</a>
          <a href="/index" class="block px-4 py-2 text-sm">Keluar</a>
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
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden hidden bg-[rgba(249,246,241,0.95)] px-6 py-4 space-y-4 text-[#4a3c32] text-sm font-semibold">
  <a href="#home" class="block nav-item">Home</a>
  <a href="#tentang" class="block nav-item">Tentang</a>
  <a href="#produk" class="block nav-item">Produk</a>
  <a href="#hubungi" class="block nav-item">Hubungi Kami</a>

  <!-- Mobile Icons -->
  <div class="flex justify-center space-x-6 text-xl text-[#4a3c32] pt-4 border-t border-[#d8cfc6]">
    <button aria-label="Catatan" class="hover:text-[#7a6657] transition">
      <i class="far fa-sticky-note"></i>
    </button>
    <button aria-label="Keranjang" class="hover:text-[#7a6657] transition">
      <i class="fas fa-shopping-cart"></i>
    </button>

    <!-- Profile Icon with Mobile Dropdown -->
    <div class="relative">
      <button aria-label="Akun" class="hover:text-[#7a6657] transition" id="profile-btn-mobile">
        <i class="far fa-user-circle"></i>
      </button>
      <div id="profile-dropdown-mobile" class="absolute right-0 mt-2 w-48 bg-white text-[#4a3c32] shadow-lg rounded-lg hidden z-40">
        <a href="/profile" class="block px-4 py-2 text-sm">Profile Saya</a>
        <a href="/ganti_password" class="block px-4 py-2 text-sm">Ganti Kata Sandi</a>
        <a href="#logout" class="block px-4 py-2 text-sm">Keluar</a>
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
