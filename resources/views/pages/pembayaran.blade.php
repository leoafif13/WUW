@extends('layouts.app')
@section('title', 'Pembayaran')
@section('content')

<main class="bg-white text-gray-800 font-poppins"
      x-data="{ pengiriman: 'antar', metode: 'qris', dropdown: false, alamatSumber: 'default' }">

  @include('components.navbar_payment')

  <!-- Progress -->
  <div class="w-full bg-gray-100 border-b py-3 px-4 flex flex-wrap justify-center items-center gap-4 sm:space-x-10 text-sm text-center">
    <div class="flex flex-col items-center text-blue-900 font-semibold">
      <i class="fas fa-shopping-cart text-blue-900 w-6 h-6 flex items-center justify-center"></i>
      <span class="text-xs mt-1">Keranjang</span>
    </div>

    <div class="w-4 h-px bg-blue-600"></div>

    <div class="flex flex-col items-center text-blue-900 font-semibold">
      <i class="fas fa-file-alt text-blue-900 w-6 h-6 flex items-center justify-center"></i>
      <span class="text-xs mt-1">Isi Formulir</span>
    </div>

    <div class="w-4 h-px bg-blue-600"></div>

    <div class="flex flex-col items-center text-blue-900 font-semibold">
      <i class="fas fa-credit-card text-blue-900 w-6 h-6 flex items-center justify-center"></i>
      <span class="text-xs mt-1">Bayar</span>
    </div>
  </div>

  <form id="form-pembayaran" method="POST" action="{{ route('pembayaran.store') }}">
    @csrf
    <input type="hidden" name="snap_status" id="snap_status">
    <input type="hidden" name="snap_result" id="snap_result">

    <div class="p-4 sm:p-16 space-y-6 pb-36 sm:pb-20">
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

          <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
            <img src="{{ asset('storage/' . $order->foto) }}" class="w-full sm:w-32 max-h-40 object-contain rounded" alt="{{ $order->nama_barang }}">
            <div class="flex-1">
              <h2 class="font-semibold text-base sm:text-lg">{{ $order->nama_barang }}</h2>
              <div class="text-sm text-gray-600 mt-1 flex flex-wrap gap-2">
                <span>Ukuran: {{ $order->ukuran }}</span>
                <span>|</span>
                <span>{{ \Carbon\Carbon::parse($order->tanggal_mulai)->format('d M') }} - {{ \Carbon\Carbon::parse($order->tanggal_selesai)->format('d M') }}</span>
              </div>
            </div>
            <div class="text-right">
              <p class="text-blue-600 font-bold text-sm sm:text-base">Rp{{ number_format($order->total_harga, 0, ',', '.') }}</p>
              <button type="button" class="text-red-600 text-sm hover:underline"
                      onclick="if(confirm('Yakin ingin membatalkan?')) document.getElementById('cancel-form-{{ $order->id }}').submit();">Batalkan</button>
            </div>
          </div>
        @endforeach

        <div class="flex flex-col sm:flex-row justify-between font-semibold pt-3 border-t gap-1 sm:gap-0 text-sm">
          <p>Total Produk ({{ $totalProduk }})</p>
          <p class="text-blue-900">Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</p>
        </div>
      </section>

      <!-- Pengiriman -->
      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Opsi Pengiriman</h3>
        <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
          <label class="flex items-center gap-2">
            <input type="radio" name="pengiriman" value="antar" x-model="pengiriman" class="form-radio" checked> Antar ke Rumah
          </label>
          <label class="flex items-center gap-2">
            <input type="radio" name="pengiriman" value="jemput" x-model="pengiriman" class="form-radio"> Jemput ke Toko
          </label>
        </div>

        <div x-show="pengiriman === 'antar'" x-transition x-cloak class="space-y-3">
          <label class="block text-sm font-semibold">Pilih Alamat</label>
          <div class="flex flex-col sm:flex-row gap-2 sm:gap-4">
            <label class="flex items-center gap-2">
              <input type="radio" value="default" x-model="alamatSumber" class="form-radio"> Gunakan Alamat Akun
            </label>
            <label class="flex items-center gap-2">
              <input type="radio" value="manual" x-model="alamatSumber" class="form-radio"> Masukkan Manual
            </label>
          </div>

          <template x-if="alamatSumber === 'default'">
            <div>
              <div class="bg-gray-100 p-3 rounded border text-sm text-gray-700">
                {{ auth()->user()->alamat ?? 'Alamat belum tersedia, silahkan isi alamat terlebih dahulu di halaman profile' }}
              </div>
              <input type="hidden" name="alamat" :value="@json(auth()->user()->alamat)">
            </div>
          </template>

          <template x-if="alamatSumber === 'manual'">
            <div>
              <label class="block text-sm font-semibold mb-1">Alamat Pengiriman</label>
              <textarea name="alamat" id="alamat" rows="3"
                        class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-200"
                        placeholder="Masukkan alamat lengkap..."></textarea>
            </div>
          </template>
        </div>
      </section>

      <!-- Metode Pembayaran -->
      <section class="space-y-3">
        <h3 class="font-semibold text-lg">Metode Pembayaran</h3>
        <div class="relative w-full sm:w-auto">
          <button type="button" @click="dropdown = !dropdown"
                  class="w-full border px-4 py-2 rounded-lg flex justify-between items-center shadow-sm">
            <span x-text="metode === 'cod' ? 'COD' : 'Transfer'"></span>
            <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.5a.75.75 0 0 1-1.08 0l-4.25-4.5a.75.75 0 0 1 .02-1.06z"/>
            </svg>
          </button>
          <div x-show="dropdown" @click.away="dropdown = false" x-cloak class="absolute z-10 mt-2 w-full sm:max-w-xs bg-white border rounded shadow-md p-3 space-y-2">
            <label class="flex items-center gap-2">
              <input type="radio" name="metode" value="cod" x-model="metode" class="form-radio"> COD
            </label>
            <label class="flex items-center gap-2">
              <input type="radio" name="metode" value="qris" x-model="metode" class="form-radio"> Transfer
            </label>
          </div>
        </div>
      </section>

      <!-- Rincian -->
      <section class="space-y-2 text-sm">
        <h3 class="font-semibold text-lg">Rincian Pembayaran</h3>
        <div class="flex justify-between">
          <span>Subtotal Produk</span><span>Rp{{ number_format($subtotalProduk, 0, ',', '.') }}</span>
        </div>
        <div class="flex justify-between">
          <span>Biaya Layanan</span><span>Rp1.500</span>
        </div>
        <div class="flex justify-between font-semibold text-lg">
          <span>Total Bayar</span><span class="text-blue-900">Rp{{ number_format($subtotalProduk + 1500, 0, ',', '.') }}</span>
        </div>
      </section>
    </div>

    <!-- Footer -->
    <footer class="fixed bottom-0 left-0 right-0 bg-white border-t px-4 py-3 shadow-lg flex flex-col sm:flex-row justify-between items-start sm:items-center text-sm z-50 gap-2 sm:gap-0">
      <p class="font-semibold">Total: <span class="text-blue-900">Rp{{ number_format($subtotalProduk + 1500, 0, ',', '.') }}</span></p>
      <button type="button" id="pay-button"
              class="w-full sm:w-auto bg-blue-900 hover:bg-blue-800 text-white px-5 py-2 rounded-lg font-semibold">
        Buat Pesanan
      </button>
    </footer>
  </form>

  @foreach ($orders as $order)
    <form id="cancel-form-{{ $order->id }}" action="{{ route('orders.cancel', $order->id) }}" method="POST" style="display: none;">
      @csrf
    </form>
  @endforeach

</main>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
  document.getElementById('pay-button').onclick = function () {
    const pengiriman = document.querySelector('input[name="pengiriman"]:checked').value;
    const metode = document.querySelector('input[name="metode"]:checked').value;
    const alamatInput = document.querySelector('textarea[name="alamat"]');
    const alamatValue = alamatInput ? alamatInput.value : @json(auth()->user()->alamat);

    if (pengiriman === 'antar' && (!alamatValue || alamatValue.trim() === '')) {
      alert('Alamat wajib diisi jika memilih antar.');
      return;
    }

    if (metode === 'cod') {
      document.getElementById('form-pembayaran').submit();
    } else {
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
        },
        onClose: function () {
          alert('Kamu belum menyelesaikan pembayaran!');
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
