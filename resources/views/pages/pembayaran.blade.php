@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
<main class="bg-white text-gray-800 font-sans" x-data>
  <!-- Navbar -->
  @include('components.navbar_payment')

  <div class="p-4 space-y-6 pb-16">
    <!-- Produk -->
    <section class="space-y-4 pb-4">
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
          <img src="{{ asset('storage/' . $order->foto) }}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded" alt="{{ $order->nama_barang }}">
          <div class="flex-1 min-w-0">
            <h2 class="font-semibold truncate">{{ $order->nama_barang }}</h2>

            <div class="flex flex-col sm:flex-row sm:space-x-2 mt-1 space-y-2 sm:space-y-0">
              <!-- Ukuran -->
              <div class="relative w-full sm:w-auto">
                <select disabled 
                id="size-select-{{ $order->id }}" 
                name="size-select-{{ $order->id }}" 
                class="w-full sm:w-auto text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
                  <option selected>Size {{ $order->ukuran }}</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
                  <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </div>

              <!-- Tanggal -->
              <div class="relative w-full sm:w-auto">
                <select disabled 
                id="tanggal-select-{{ $order->id }}" 
                name="tanggal-select-{{ $order->id }}" 
                class="w-full sm:w-auto text-sm px-3 py-1 pr-8 rounded-lg bg-gray-200 text-gray-700 appearance-none">
                  <option selected>{{ \Carbon\Carbon::parse($order->tanggal_mulai)->format('d M') }} - {{ \Carbon\Carbon::parse($order->tanggal_selesai)->format('d M') }}</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-2 flex items-center">
                  <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2"
                      viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </div>
            </div>

            <p class="text-blue-600 font-bold mt-2">Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
          </div>

          <div class="text-right space-y-1 w-20 flex-shrink-0">
            <div>x{{ $order->qty }}</div>
            @if ($order->status === 'pending')
              <a href="{{ route('orders.cancel', $order->id) }}"
                 onclick="event.preventDefault(); if(confirm('Yakin ingin membatalkan pesanan ini?')) document.getElementById('cancel-form-{{ $order->id }}').submit();"
                 class="text-red-600 text-xs hover:underline cursor-pointer">
                Batalkan
              </a>
              <form id="cancel-form-{{ $order->id }}" method="POST" action="{{ route('orders.cancel', $order->id) }}">
                @csrf
              </form>
            @endif
          </div>
        </div>
      @endforeach

      <div class="flex justify-between font-semibold pt-2">
        <p>Total Pesanan ({{ $totalProduk }} Produk):</p>
        <p class="text-blue-900">Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</p>
      </div>
    </section>

    <div class="h-1 bg-gray-400 my-4"></div>

    <!-- Opsi Pengiriman -->
    <section class="space-y-2">
      <h3 class="font-semibold text-lg">Opsi Pengiriman</h3>
      <div class="flex flex-col sm:flex-row sm:space-x-6 space-y-2 sm:space-y-0">
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
        <p class="text-blue-900">Rp20.000</p>
      </div>
      <p class="text-xs text-gray-500">Note: Ongkir Rp10.000 untuk Batam Center dan sekitarnya.</p>
    </section>

    <div class="h-1 bg-gray-400 my-4"></div>

    <!-- Metode Pembayaran -->
    <section x-data="{ open: false, metode: 'qris' }" class="space-y-4">
      <div class="flex justify-between items-start">
        <h3 class="font-semibold text-base">Metode Pembayaran</h3>
        <div class="relative w-full sm:w-auto">
          <button @click="open = !open" type="button"
                  class="w-full sm:w-auto text-blue-900 font-semibold text-sm flex items-center space-x-1 justify-between sm:justify-start">
            <span>Pilih Metode Pembayaran</span>
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06z" />
            </svg>
          </button>

          <!-- Dropdown -->
          <div x-show="open"
               x-transition:enter="transition ease-out duration-200"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 scale-100"
               x-transition:leave-end="opacity-0 scale-95"
               @click.away="open = false"
               class="absolute right-0 mt-2 w-full sm:w-56 bg-white rounded-lg shadow-md p-3 z-10 space-y-2 text-sm"
               style="display: none;">
            <label class="flex items-center space-x-2">
              <input type="radio" name="metode" value="cod" x-model="metode" class="form-radio text-blue-900">
              <span>Cash On Delivery (COD)</span>
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

    <!-- Rincian Pembayaran -->
    <section class="pt-4 space-y-2">
      <h3 class="font-semibold">Rincian Pembayaran</h3>
      <div class="flex justify-between text-sm">
        <span>Subtotal untuk Produk</span><span>Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</span>
      </div>
      <div class="flex justify-between text-sm">
        <span>Subtotal Pengiriman</span><span>Rp20.000</span>
      </div>
      <div class="flex justify-between text-sm">
        <span>Biaya Layanan</span><span>Rp1.500</span>
      </div>
      <div class="flex justify-between font-semibold text-lg pt-2">
        <span>Total Pembayaran</span><span class="text-blue-900">Rp{{ number_format($subtotalProduk + 20000 + 1500, 0, ',', '.') }}</span>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-md flex flex-col sm:flex-row justify-between items-center px-4 py-3 gap-2 sm:gap-0">
    <p class="font-semibold text-sm">
      Total Pembayaran <span class="text-blue-900">Rp{{ number_format($subtotalProduk + 20000 + 1500, 0, ',', '.') }}</span>
    </p>
    <button type="button"
            class="w-full sm:w-auto bg-blue-900 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-blue-800 transition">
      Buat Pesanan
    </button>
  </footer>
</main>
@endsection
