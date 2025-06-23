@extends('layouts.app')
@section('title', 'History')
@section('content')
<div class="min-h-screen bg-gray-100">
  <!-- Header -->
  <div class="bg-blue-900 text-white py-3 px-3 sm:px-6 shadow">
    <div class="flex items-center justify-between">
      <a href="{{ url('/home') }}" aria-label="Back" class="mr-3 focus:outline-none text-lg hover:text-blue-500">
        <i class="fas fa-arrow-left"></i>
      </a>
      <h1 class="text-base sm:text-lg font-semibold text-center flex-1 truncate">Riwayat Penyewaan</h1>
      <div class="w-6"></div>
    </div>
  </div>

  <!-- Filter Status -->
  <div class="px-3 sm:px-6 py-4">
    @php
        $statusOptions = ['all' => 'Semua', 'pending' => 'Pending', 'dibayar' => 'Dibayar', 'diproses' => 'Diproses', 'selesai' => 'Selesai'];
        $currentStatus = request()->query('status', 'all');
    @endphp
    <div class="flex justify-center">
      <div class="flex gap-2 sm:gap-4 overflow-x-auto whitespace-nowrap px-1">
        @foreach ($statusOptions as $key => $label)
          <a href="{{ route('history', ['status' => $key]) }}"
             class="px-4 py-2 rounded-full border text-sm transition flex-shrink-0
             {{ $currentStatus === $key ? 'bg-blue-900 text-white border-blue-900' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100' }}">
            {{ $label }}
          </a>
        @endforeach
      </div>
    </div>
  </div>

  <!-- Daftar Riwayat -->
  <div class="p-3 sm:p-4 space-y-3 sm:space-y-4">
    @forelse($riwayat as $item)
      @php
        $tanggalSelesai = \Carbon\Carbon::parse($item->tanggal_selesai);
        $statusLabel = match ($item->status) {
            'pending' => 'Menunggu Pembayaran',
            'dibayar' => 'Pembayaran Diterima',
            'diproses' => 'Masih dalam Proses Pengiriman',
            'selesai' => 'Penyewaan Selesai',
            default => 'Status Tidak Diketahui',
        };
      @endphp
      <div class="bg-white rounded shadow-sm p-3 sm:p-4 flex flex-col sm:flex-row justify-between items-start sm:items-center">
        <div class="flex items-start space-x-3 sm:space-x-4 w-full sm:w-auto">
          <img src="{{ asset('storage/' . $item->order->foto) }}" alt="Produk" class="w-16 h-20 sm:w-20 sm:h-24 object-cover rounded flex-shrink-0" />
          <div class="text-sm">
            <h2 class="font-semibold text-gray-800 truncate max-w-[180px] sm:max-w-xs">{{ $item->nama_barang }}</h2>
            <p class="text-gray-600 text-xs sm:text-sm">Variasi: Size {{ $item->ukuran }}</p>
            <p class="text-gray-600 text-xs sm:text-sm">Tanggal Sewa: {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d M Y') }} – {{ $tanggalSelesai->format('d M Y') }}</p>
            <p class="text-blue-700 font-bold mt-1 text-sm sm:text-base">Rp{{ number_format($item->total, 0, ',', '.') }}</p>
            <p class="text-gray-600 text-xs sm:text-sm">x {{ $item->qty }}</p>
            <p class="text-xs text-gray-500 mt-2">{{ $statusLabel }}</p>
          </div>
        </div>

        @if($tanggalSelesai->isPast())
          <div class="flex space-x-2 mt-3 sm:mt-0 w-full sm:w-auto justify-start sm:justify-end">
            <a href="{{ url('/barang') }}" class="bg-blue-900 text-white px-3 py-2 rounded text-xs sm:text-sm hover:bg-blue-500 w-full sm:w-auto text-center">Sewa Lagi</a>
            <a href="{{ route('review.index', ['payment_id' => $item->id]) }}" class="bg-blue-900 text-white px-6 py-2 rounded text-xs sm:text-sm hover:bg-blue-500 text-center w-full sm:w-auto">Nilai</a>
          </div>
        @endif
      </div>
    @empty
      <div class="min-h-screen flex items-center justify-center">
        <p class="text-center text-gray-500 text-sm sm:text-base">Belum ada riwayat penyewaan</p>
      </div>
    @endforelse
  </div>
</div>
@endsection
