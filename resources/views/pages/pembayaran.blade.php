<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>WUW-Home</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
 </head>
 <body class="bg-white text-gray-800 font-sans">
  <!--navbar payment-->
  @include('components.navbar_payment')

  <main class="p-4 space-y-6 pb-16">
  <!-- Produk -->
  <section class="space-y-4  pb-4">
    <div class="flex items-center gap-4">
      <img src="img/jashitam.jpg" class="w-20 h-20 object-cover rounded" alt="Produk">
      <div class="flex-1">
        <h2 class="font-semibold">Royal Java Heritage Set</h2>

        <!-- Dropdowns -->
        <div class="flex space-x-2 mt-1">
          <!-- Dropdown Size -->
          <div class="relative">
            <select class="text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
              <option>Size L</option>
              <option>Size M</option>
              <option>Size S</option>
            </select>
            <!-- Ikon Panah -->
            <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
              <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>

          <!-- Dropdown Tanggal (Contoh Ditambahkan) -->
          <div class="relative">
            <select class="text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
              <option>15 April - 20 April</option>
              <option>16 April - 21 April</option>
              <option>17 April - 22 April</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
              <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </div>

        <p class="text-blue-600 font-bold mt-2">Rp300.000</p>
      </div>

      <div>x1</div>
    </div>

    <div class="flex items-center gap-4">
      <img src="img/jashitam.jpg" class="w-20 h-20 object-cover rounded" alt="Produk">
      
      <div class="flex-1">
        <h2 class="font-semibold">Royal Java Heritage Set</h2>

        <!-- Dropdowns -->
        <div class="flex space-x-2 mt-1">
          <!-- Dropdown Size -->
          <div class="relative">
            <select class="text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
              <option>Size L</option>
              <option>Size M</option>
              <option>Size S</option>
            </select>
            <!-- Ikon Panah -->
            <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
              <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>

          <!-- Dropdown Tanggal (Contoh Ditambahkan) -->
          <div class="relative">
            <select class="text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
              <option>15 April - 20 April</option>
              <option>16 April - 21 April</option>
              <option>17 April - 22 April</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
              <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 9l-7 7-7-7" />
              </svg>
            </div>
          </div>
        </div>

        <p class="text-blue-600 font-bold mt-2">Rp300.000</p>
      </div>

      <div>x1</div>
    </div>

    <!-- Total Pesanan -->
    <div class="flex justify-between font-semibold pt-2">
      <p>Total Pesanan (2 Produk):</p>
      <p class="text-blue-900">Rp600.000</p>
    </div>
  </section>

  <div class="h-1 bg-gray-400 my-4"></div>

  <div class="space-y-6">
  <section class="space-y-2">
    <h3 class="font-semibold text-lg">Opsi Pengiriman</h3>
    <div class="flex space-x-6">
      <label class="flex items-center space-x-2">
        <input type="radio" name="pengiriman" class="form-radio" checked>
        <span class="text-sm">Antar ke Rumah</span>
      </label>
      <label class="flex items-center space-x-2">
        <input type="radio" name="pengiriman" class="form-radio">
        <span class="text-sm">Jemput ke Toko</span>
      </label>
    </div>

    <div class="flex justify-between font-semibold pt-2">
      <p>Total Ongkir:</p>
      <p class="font-semibold text-blue-900">Rp20.000</p>
    </div>
      <p class="text-xs mt-1 text-gray-500">Note: Untuk pengiriman ke daerah Batam Center dan sekitarnya hanya akan dikenai ongkir Rp10.000. Di luar itu ongkir akan menyesuaikan.</p>
    </div>
  </section>

  <div class="h-1 bg-gray-400 my-4"></div>

  <section x-data="{ open: false, metode: 'qris' }" class="space-y-4">
  <div class="flex justify-between items-start">
    <h3 class="font-semibold text-base">Metode Pembayaran</h3>
    <div class="relative">
      <button 
        @click="open = !open" 
        class="text-blue-900 font-semibold text-sm flex items-center space-x-1"
      >
        <span>Pilih Metode pembayaran</span>
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06z" />
        </svg>
      </button>

      <!-- Dropdown -->
      <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-md p-3 z-10 space-y-2 text-sm"
        @click.away="open = false"
      >
        <label class="flex items-center space-x-2">
          <input type="radio" name="metode" value="cod" x-model="metode" class="form-radio text-blue-900">
          <span>Cash On Deliver (COD)</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="metode" value="qris" x-model="metode" class="form-radio text-blue-900" checked>
          <span>QRIS</span>
        </label>
      </div>
    </div>
  </div>
</section>

<div class="h-1 bg-gray-400 my-4"></div>

<section class="pt-4 space-y-2">
      <h3 class="font-semibold">Rincian Pembayaran</h3>
      <div class="flex justify-between text-sm">
        <span>Subtotal untuk Produk</span><span>Rp600.000</span>
      </div>
      <div class="flex justify-between text-sm">
        <span>Subtotal Pengiriman</span><span>Rp20.000</span>
      </div>
      <div class="flex justify-between text-sm">
        <span>Biaya Layanan</span><span>Rp1.500</span>
      </div>
      <div class="flex justify-between font-semibold text-lg pt-2">
        <span>Total Pembayaran</span><span class="text-blue-900">Rp621.500</span>
      </div>
    </section>
  </main>

  <footer class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-md flex justify-between items-center px-4 py-3">
  <p class="font-semibold text-sm">Total Pembayaran <span class="text-blue-900">Rp621.500</span></p>
  <button class="bg-blue-900 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-blue-800 transition">Buat Pesanan</button>
  </footer>
  </body>
</html>
