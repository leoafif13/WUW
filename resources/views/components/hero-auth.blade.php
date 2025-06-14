@props(['name'])

<section id="home" class="pt-24 relative z-10 flex flex-col items-center justify-center text-center px-4 sm:px-6 py-20 max-w-full mx-auto text-white min-h-screen bg-cover bg-center" style="background-image: url('img/Background 3.png')">
  <h1 class="font-extrabold text-2xl sm:text-3xl md:text-4xl leading-tight mb-4 drop-shadow-md animate-slide-loop">
  Selamat Datang di WUW,<br/> {{ $name }}
</h1>
<p class="text-sm sm:text-base md:text-lg mb-8 font-normal max-w-md mx-auto drop-shadow-md animate-slide-loop delay-300">
  Temukan pakaian terbaik untuk dirimu
</p>
  <a href="/barang" class="bg-[#f9f6f1] text-blue-900 font-semibold rounded px-6 py-2 hover:bg-gray-500 transition drop-shadow-lg">
    Sewa Sekarang
  </a>
  <!-- Tombol scroll -->
  <button onclick="scrollNextSection()" class="text-white mt-8 hover:text-blue-300 transition duration-300 text-3xl">
    <i class="fas fa-chevron-down animate-bounce"></i>
  </button>
</section>

<script>
  const targets = ['#about', '#layanan', '#hubungi'];
  let index = 0;

  function scrollNextSection() {
    const target = document.querySelector(targets[index]);
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
    index = (index + 1) % targets.length; // balik ke awal kalau sudah terakhir
  }
</script>
<style>
  @keyframes slideLoop {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
    100% {
      transform: translateY(0);
    }
  }

  .animate-slide-loop {
    animation: slideLoop 2s ease-in-out infinite;
  }

  .delay-300 {
    animation-delay: 0.3s;
  }
</style>