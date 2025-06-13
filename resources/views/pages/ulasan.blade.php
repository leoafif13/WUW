@extends('layouts.app')

@section('title', 'Daftar Ulasan')

@section('content')
@include('components.navbar_auth')

<div class="pt-24 px-4 pb-10 min-h-screen bg-gradient-to-r from-[#1e3a8a] to-[#000000]">
    <h1 class="text-3xl font-bold mb-6 text-center text-white">Daftar Ulasan Produk</h1>

    @if($reviews->isEmpty())
        <p class="text-center text-gray-500 italic">Belum ada ulasan untuk produk ini.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($reviews as $index => $review)
            <div class="bg-gray-100 rounded-xl shadow-md p-4 sm:p-6 hover:shadow-xl transition-shadow duration-300 w-full">
                <!-- Bagian Atas: Foto Barang + Info -->
                <div class="flex flex-col sm:flex-row sm:items-start gap-4">
                    <!-- Foto Barang -->
                    <img src="{{ asset('storage/' . ($review->payment->order->foto ?? '')) }}" alt="Foto Barang"
                        class="w-full sm:w-20 h-40 sm:h-20 object-cover rounded-md border mx-auto sm:mx-0">

                    <!-- Info Pengguna & Barang -->
                    <div class="text-center sm:text-left">
                        <p class="font-semibold text-sm text-black break-words">
                            {{ '@' . ($review->payment->user->name ?? 'user') }}
                        </p>
                        <p class="text-xs text-gray-700 break-words">{{ $review->payment->nama_barang ?? '-' }}</p>
                        <p class="text-xs text-gray-700 break-words">Variasi: {{ $review->payment->ukuran ?? '-' }}</p>
                    </div>
                </div>

                <div class="border-t border-gray-400 my-4"></div>

                <p class="text-sm text-gray-900 leading-relaxed break-words">{{ $review->ulasan }}</p>

                <!-- Thumbnail -->
                @if($review->foto)
                <img src="{{ asset('storage/' . $review->foto) }}" alt="Foto Ulasan"
                    class="mt-4 w-full max-w-[150px] rounded-md border mx-auto cursor-pointer transition hover:scale-105"
                    onclick="openModal('modal-{{ $index }}')">
                @endif
            </div>

            <!-- Modal -->
            @if($review->foto)
            <div id="modal-{{ $index }}" class="fixed inset-0 z-50 hidden bg-black bg-opacity-70 flex items-center justify-center p-4">
                <div class="bg-white rounded-lg p-5 max-w-md w-full relative shadow-lg max-h-[80vh] overflow-y-auto">
                    <button class="absolute top-2 right-2 text-gray-600 text-2xl font-bold" onclick="closeModal('modal-{{ $index }}')">&times;</button>

                    <!-- Gambar -->
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $review->foto) }}" 
                            class="max-w-[300px] max-h-[300px] w-auto h-auto mx-auto rounded object-contain shadow">
                    </div>

                    <!-- Info Produk & User -->
                    <div class="mb-3 text-center">
                        <p class="font-semibold text-black text-sm">{{ '@' . ($review->payment->user->name ?? 'user') }}</p>
                        <p class="text-sm text-gray-700">{{ $review->payment->nama_barang ?? '-' }} ({{ $review->payment->ukuran ?? '-' }})</p>
                    </div>

                    <!-- Isi Ulasan -->
                    <div class="text-sm text-gray-900 text-center leading-relaxed break-words">
                        {{ $review->ulasan }}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    @endif
</div>

<!-- Footer -->
<x-footer></x-footer>

<!-- Modal Script -->
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }
    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }
</script>
@endsection
