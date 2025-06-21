<div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden border p-6 lg:flex gap-8 min-h-[500px]">
  <!-- Gambar Produk -->
  <div class="flex-shrink-0 flex justify-center items-start w-full lg:w-1/3 h-full">
    <img src="{{ asset('storage/' . $barang->foto) }}"
         alt="{{ $barang->nama_barang }}"
         class="rounded-md shadow-md object-cover w-64 h-full max-h-[500px]" />
  </div>

  <!-- Deskripsi Produk -->
  <div class="w-full lg:w-2/3 flex flex-col justify-between h-full">
    <div>
      @php
        $status = $barang->stok > 0 ? 'Tersedia' : 'Tidak Tersedia';
        $statusClass = $status === 'Tersedia'
            ? 'bg-green-200 text-green-700'
            : 'bg-red-200 text-red-700';
      @endphp

      <span class="inline-block text-xs font-medium px-3 py-1 rounded-full mb-2 {{ $statusClass }}">
        {{ $status }}
      </span>

      <h2 class="text-xl font-bold text-blue-900">{{ $barang->nama_barang }}</h2>

      <ul class="text-sm text-gray-700 mt-3 space-y-1 leading-relaxed">
        <li><strong>Warna:</strong> {{ $barang->warna }}</li>
        <li><strong>Ukuran:</strong> {{ $barang->ukuran }}</li>
        <li><strong>Stok:</strong> {{ $barang->stok }}</li>
        <li><strong>Deskripsi:</strong> {{ $barang->deskripsi }}</li>
      </ul>
    </div>

    <!-- Harga & Tombol -->
    <div class="mt-6 flex flex-col gap-4">
      <p class="text-blue-900 font-semibold text-lg">
        Harga Sewa:
        <span class="text-base font-bold">Rp{{ number_format($barang->harga, 0, ',', '.') }}</span>
      </p>

      @if ($barang->stok > 0)
        <!-- Tombol Sewa -->
        <form action="{{ route('keranjang.tambah', $barang->id) }}" method="GET" class="flex flex-col gap-2">
          <button type="submit"
           class="w-full md:w-fit text-sm px-4 py-2 bg-blue-900 text-white rounded text-center">
          Sewa Sekarang
        </button>

        <!-- Form Tambah ke Keranjang -->
        <form action="{{ route('keranjang.tambah', $barang->id) }}" method="GET" class="flex flex-col gap-2">
          <button type="submit"
                  class="text-sm px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-800 w-full md:w-fit">
            🛒 Tambah ke Keranjang
          </button>

          <!-- Input Jumlah di Bawah Tombol -->
          <div class="flex items-center gap-2">
            <label for="jumlah" class="text-sm text-gray-700">Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah" value="1" min="1" max="{{ $barang->stok }}"
                   class="w-20 px-2 py-1 border rounded text-sm" required>
          </div>
        </form>
      @else
        <!-- Jika Stok Habis -->
        <button disabled
                class="w-full text-sm px-4 py-2 bg-gray-400 text-white rounded text-center cursor-not-allowed">
          Stok Habis
        </button>
      @endif
    </div>
  </div>
</div>
