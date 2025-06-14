@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
<main class="bg-white text-gray-800 font-sans" x-data="{ pengiriman: 'antar', metode: 'qris', dropdown: false }">
  @include('components.navbar_payment')

  <form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <div class="p-4 space-y-6 pb-20">
      <!-- Produk -->
      <section class="space-y-4">
        @php
            $totalProduk = 0;
            $subtotalProduk = 0;
        @endphp

        @foreach ($orders as $order)
          @php
            $totalProduk += $order->qty;
            $subtotalProduk += $order->total_harga;
          @endphp

          <div class="flex flex-wrap sm:flex-nowrap items-center gap-4">
            <img src="{{ asset('storage/' . $order->foto) }}" class="w-32 h-32 object-cover rounded" alt="{{ $order->nama_barang }}">
            <div class="flex-1 min-w-0">
              <h2 class="font-semibold truncate">{{ $order->nama_barang }}</h2>

              <div class="flex gap-2 mt-1 text-sm text-gray-600">
                <span>Ukuran: {{ $order->ukuran }}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($order->tanggal_mulai)->format('d M') }} - {{ \Carbon\Carbon::parse($order->tanggal_selesai)->format('d M') }}</span>
              </div>

              <p class="text-blue-600 font-bold mt-2">Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
              
              <!-- Tombol Batalkan -->
              <button type="button"
                      class="text-red-600 text-sm hover:underline"
                      onclick="if(confirm('Apakah kamu yakin ingin membatalkan pesanan ini?')) { document.getElementById('cancel-form-{{ $order->id }}').submit(); }">
                Batalkan
              </button>
            </div>
          </div>
        @endforeach

        <div class="flex justify-between font-semibold pt-3 border-t ">
          <p>Total Produk ({{ $totalProduk }}):</p>
          <p class="text-blue-900">Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</p>
        </div>
      </section>

      <!-- Pengiriman, Metode Pembayaran, Rincian Pembayaran tetap sama -->

      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Opsi Pengiriman</h3>

        <div class="flex gap-4">
          <label class="flex items-center gap-2">
            <input type="radio" name="pengiriman" value="antar" x-model="pengiriman" class="form-radio" checked>
            Antar ke Rumah
          </label>
          <label class="flex items-center gap-2">
            <input type="radio" name="pengiriman" value="jemput" x-model="pengiriman" class="form-radio">
            Jemput ke Toko
          </label>
        </div>

        <div x-show="pengiriman === 'antar'" x-transition x-cloak>
          <label for="alamat" class="block text-sm font-semibold mb-1">Alamat Pengiriman</label>
          <textarea id="alamat" name="alamat" rows="3"
            x-bind:required="pengiriman === 'antar'"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200"
            placeholder="Masukkan alamat lengkap..."></textarea>
        </div>
      </section>

      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Metode Pembayaran</h3>

        <div class="relative">
          <button type="button" @click="dropdown = !dropdown" class="w-full sm:w-auto bg-white border px-4 py-2 rounded-lg flex justify-between items-center shadow-sm">
            <span x-text="metode === 'cod' ? 'Cash On Delivery (COD)' : 'QRIS'"></span>
            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06z"/>
            </svg>
          </button>

          <div x-show="dropdown" @click.away="dropdown = false" x-cloak
               class="absolute z-10 mt-2 w-full sm:w-64 bg-white border rounded shadow-md p-3 space-y-2">
            <label class="flex items-center gap-2">
              <input type="radio" name="metode" value="cod" x-model="metode" class="form-radio">
              Cash On Delivery (COD)
            </label>
            <label class="flex items-center gap-2">
              <input type="radio" name="metode" value="qris" x-model="metode" class="form-radio">
              QRIS
            </label>
          </div>
        </div>
      </section>

      <section class="space-y-2 pt-2">
        <h3 class="font-semibold text-lg">Rincian Pembayaran</h3>
        <div class="flex justify-between text-sm">
          <span>Subtotal Produk</span><span>Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</span>
        </div>
        <div class="flex justify-between text-sm">
          <span>Biaya Layanan</span><span>Rp1.500</span>
        </div>
        <div class="flex justify-between font-semibold text-lg">
          <span>Total Bayar</span><span class="text-blue-900">Rp{{ number_format($subtotalProduk + 1500, 0, ',', '.') }}</span>
        </div>
      </section>
    </div>

    <footer class="z-50 fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg p-4 flex justify-between items-center">
      <p class="font-semibold text-sm">
        Total: <span class="text-blue-900">Rp{{ number_format($subtotalProduk + 1500, 0, ',', '.') }}</span>
      </p>
      <button type="submit"
              class="bg-blue-900 hover:bg-blue-800 text-white text-sm px-5 py-2 rounded-lg font-semibold transition">
        Bayar Sekarang
      </button>
    </footer>
  </form>

  <!-- Form Cancel tersembunyi di luar form pembayaran -->
  @foreach ($orders as $order)
    <form id="cancel-form-{{ $order->id }}" action="{{ route('orders.cancel', $order->id) }}" method="POST" style="display:none;">
      @csrf
    </form>
  @endforeach
</main>

<style>
  [x-cloak] { display: none !important; }
</style>
@endsection
