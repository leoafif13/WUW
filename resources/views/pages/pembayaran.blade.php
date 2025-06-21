@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
<main class="bg-white text-gray-800 font-sans" x-data="{ pengiriman: 'antar', metode: 'qris', dropdown: false }">
  @include('components.navbar_payment')

  <form id="form-pembayaran" method="POST" action="{{ route('pembayaran.store') }}">
    @csrf
    <input type="hidden" name="snap_status" id="snap_status">
    <input type="hidden" name="snap_result" id="snap_result">

    <div class="p-4 space-y-6 pb-32 sm:pb-20">
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

          <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
            <img src="{{ asset('storage/' . $order->foto) }}" class="w-full sm:w-32 max-h-40 object-contain rounded" alt="{{ $order->nama_barang }}">
            <div class="flex-1 min-w-0 self-start">
              <h2 class="font-semibold truncate">{{ $order->nama_barang }}</h2>
              <div class="flex flex-wrap gap-2 mt-1 text-sm text-gray-600">
                <span>Ukuran: {{ $order->ukuran }}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($order->tanggal_mulai)->format('d M') }} - {{ \Carbon\Carbon::parse($order->tanggal_selesai)->format('d M') }}</span>
              </div>
            </div>
            <div class="flex flex-col items-end gap-2">
              <p class="text-blue-600 font-bold">Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
              <button type="button"
                      class="text-red-600 text-sm hover:underline"
                      onclick="if(confirm('Apakah kamu yakin ingin membatalkan pesanan ini?')) { document.getElementById('cancel-form-{{ $order->id }}').submit(); }">
                Batalkan
              </button>
            </div>
          </div>
        @endforeach

        <div class="flex justify-between font-semibold pt-3 border-t">
          <p>Total Produk ({{ $totalProduk }}):</p>
          <p class="text-blue-900">Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</p>
        </div>
      </section>

      <!-- Pengiriman -->
      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Opsi Pengiriman</h3>
        <div class="flex flex-col sm:flex-row gap-4">
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

      <!-- Metode Pembayaran -->
      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Metode Pembayaran</h3>
        <div class="relative">
          <button type="button" @click="dropdown = !dropdown"
                  class="w-full text-left sm:text-center sm:w-auto bg-white border px-4 py-2 rounded-lg flex justify-between items-center shadow-sm">
            <span x-text="metode === 'cod' ? 'Cash On Delivery (COD)' : 'QRIS'"></span>
            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06z"/>
            </svg>
          </button>

          <div x-show="dropdown" @click.away="dropdown = false" x-cloak
               class="absolute z-10 mt-2 w-full sm:max-w-xs bg-white border rounded shadow-md p-3 space-y-2">
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

      <!-- Rincian -->
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

    <!-- Footer -->
    <footer class="z-50 fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-lg px-4 py-3 flex flex-col sm:flex-row gap-2 sm:gap-0 justify-between items-start sm:items-center text-sm">
      <p class="font-semibold">
        Total: <span class="text-blue-900">Rp{{ number_format($subtotalProduk + 1500, 0, ',', '.') }}</span>
      </p>
      <button type="button" id="pay-button"
              class="w-full sm:w-auto bg-blue-900 hover:bg-blue-800 text-white px-5 py-2 rounded-lg font-semibold transition">
        Buat Pesanan
      </button>
    </footer>
  </form>

  <!-- Form Cancel tersembunyi -->
  @foreach ($orders as $order)
    <form id="cancel-form-{{ $order->id }}" action="{{ route('orders.cancel', $order->id) }}" method="POST" style="display:none;">
      @csrf
    </form>
  @endforeach
</main>

<!-- Midtrans Snap -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script type="text/javascript">
  document.getElementById('pay-button').onclick = function () {
    const pengiriman = document.querySelector('input[name="pengiriman"]:checked').value;
    const metode = document.querySelector('input[name="metode"]:checked').value;
    const alamat = pengiriman === 'antar' ? document.getElementById('alamat').value : null;

    if (pengiriman === 'antar' && (!alamat || alamat.trim() === '')) {
      alert('Alamat wajib diisi jika memilih antar.');
      return;
    }

    if (metode === 'cod') {
      // Langsung submit form tanpa Midtrans
      document.getElementById('form-pembayaran').submit();
    } else {
      // QRIS via Midtrans popup
      snap.pay('{{ $snapToken }}', {
        onSuccess: function (result) {
          document.getElementById('snap_status').value = 'success';
          document.getElementById('snap_result').value = JSON.stringify(result);
          setTimeout(() => document.getElementById('form-pembayaran').submit(), 100);
        },
        onPending: function (result) {
          document.getElementById('snap_status').value = 'pending';
          document.getElementById('snap_result').value = JSON.stringify(result);
          setTimeout(() => document.getElementById('form-pembayaran').submit(), 100);
        },
        onError: function (result) {
          alert('Pembayaran gagal. Silakan coba lagi.');
          console.error(result);
        }
      });
    }
  };
</script>

<style>
  [x-cloak] { display: none !important; }
  body { overflow-x: hidden; }
</style>
@endsection