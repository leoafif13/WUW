<!-- Overlay -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-40 flex items-center justify-center">
  <!-- Modal Box -->
  <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full p-6 z-50 relative">
    
    <!-- Close Button -->
    <button class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl font-bold">&times;</button>

    <div class="flex flex-col md:flex-row gap-6">
      <!-- Gambar -->
      <div class="md:w-1/2 flex justify-center">
        <img src="images/Jas.jpg" alt="Royal Java Heritage Set" class="rounded-md w-90 object-cover">
      </div>

      <!-- Detail Produk -->
      <div class="md:w-2/3">
        <h2 class="text-xl font-bold text-blue-900 mb-1">Royal Java Heritage Set</h2>
        <p class="text-sm text-gray-600 mb-4">Jas dengan warna yang sangat elegan dan memiliki kesan yang sangat mewah</p>

        <div class="mb-4">
          <p class="font-semibold text-gray-800">Pilih Variasi:</p>
          <p class="text-sm text-blue-900 font-semibold mt-2">Ukuran Baju</p>
          <div class="flex gap-2 mt-1" id="size-options">
            <button class="option-btn bg-gray-200 px-4 py-1 rounded" data-value="S">Size S</button>
            <button class="option-btn bg-gray-200 px-4 py-1 rounded" data-value="M">Size M</button>
            <button class="option-btn bg-gray-200 px-4 py-1 rounded" data-value="L">Size L</button>
            <button class="bg-gray-200 px-4 py-1 rounded" data-value="XL">Size XL</button>
          </div>

          <p class="text-sm text-blue-900 font-semibold mt-4">Warna Baju</p>
          <div class="flex gap-2 mt-1" id="color-options">
            <button class="bg-gray-200 px-4 py-1 rounded">Merah</button>
            <button class="bg-gray-200 px-4 py-1 rounded">Biru</button>
            <button class="bg-gray-200 px-4 py-1 rounded">Hijau</button>
            <button class="bg-gray-200 px-4 py-1 rounded">Gold</button>
          </div>
        </div>

        <!-- Tanggal -->
        <div class="flex flex-col md:flex-row gap-4 mb-4">
          <div class="flex flex-col w-full">
            <label class="text-sm text-gray-800 font-medium mb-1">Tanggal Sewa</label>
            <input type="date" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
          </div>
          <div class="flex flex-col w-full">
            <label class="text-sm text-gray-800 font-medium mb-1">Tanggal Kembali</label>
            <input type="date" class="border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
          </div>
        </div>

        <!-- Jumlah -->
        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-800 mb-2">Jumlah</label>
          <div class="flex items-center w-fit border border-gray-300 rounded" id="quantity-control">
            <button class="px-3 py-1 text-lg font-bold">−</button>
            <span class="px-4">1</span>
            <button class="px-3 py-1 text-lg font-bold">+</button>
          </div>
        </div>

        <!-- Tombol -->
        <button class="w-full bg-blue-900 text-white font-semibold py-3 rounded hover:bg-blue-800 transition">
          Masukkan Keranjang
        </button>
      </div>
    </div>
  </div>
</div>