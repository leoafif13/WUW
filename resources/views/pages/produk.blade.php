<div class="py-24 sm:px-6 lg:px-16 bg-gradient-to-r from-[#1e3a8a] to-[#000000]">
<section id="produk" class="max-w-6xl mx-auto text-center overflow-hidden">
  <h2 class="text-white text-2xl md:text-3xl font-bold mb-10">Produk Yang Kami Sewakan</h2>

  <div class="produk-slider flex gap-6 overflow-x-auto scrollbar-hide">
    @foreach ($barang as $item)
      <div class="bg-white text-blue-900 rounded-lg overflow-hidden shadow-md flex flex-col w-64 sm:w-72 md:w-80 flex-shrink-0">
        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_barang }}"
             class="w-full h-60 sm:h-72 md:h-80 object-cover rounded-b-none">
        <div class="p-4 text-left flex flex-col flex-grow">
          {{-- Status & Nama --}}
          <div class="flex items-center mb-2">
            @php
              $statusClass = ($item->stok > 0)
                ? 'bg-green-200 text-green-800'
                : 'bg-red-200 text-red-800';
              $statusText = ($item->stok > 0)
                ? 'Tersedia'
                : 'Stok Habis';
            @endphp
            <span class="{{ $statusClass }} text-xs font-semibold mr-2 px-2 py-1 rounded">
              {{ $statusText }}
            </span>
            <span class="font-semibold text-blue-900">{{ $item->nama_barang }}</span>
          </div>

          {{-- Deskripsi --}}
          <p class="text-sm mb-4 break-words">{{ $item->deskripsi }}</p>

          {{-- Tombol --}}
          <a href="/login"
             class="block w-full bg-blue-900 text-white text-sm font-bold px-4 py-2 rounded hover:bg-gray-700 hover:text-blue-300 transition duration-300 text-center mt-auto
             {{ $item->stok <= 0 ? 'opacity-50 cursor-not-allowed pointer-events-none' : '' }}">
            Sewa Sekarang
          </a>
        </div>
      </div>
    @endforeach
  </div>
  </div>
</section>

<style>
  .scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  .scrollbar-hide::-webkit-scrollbar {
    display: none;
  }
</style>