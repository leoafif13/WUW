@extends('layouts.app')

@section('title', 'Daftar Ulasan')

@section('content')
<!-- Navbar Auth -->
@include('components.navbar_auth')
<div class="min-h-screen bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-8 text-center text-blue-900">Daftar Ulasan Produk</h1>

    @if($reviews->isEmpty())
        <p class="text-center text-gray-500 italic">Belum ada ulasan untuk produk ini.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($reviews as $review)
            <div class="bg-blue-50 rounded-xl shadow-lg p-6 flex flex-col sm:flex-row gap-6 hover:shadow-xl transition-shadow duration-300">
                <!-- Foto Barang -->
                <img src="{{ asset('storage/' . ($review->payment->order->foto ?? '')) }}" alt="Foto Barang" 
                    class="w-full sm:w-36 h-36 object-cover rounded-lg border border-blue-200">

                <div class="flex-1 flex flex-col justify-between">
                    <div>
                        <!-- Nama User -->
                        <h2 class="font-semibold text-xl text-blue-900">{{ $review->payment->user->name ?? 'User tidak ditemukan' }}</h2>

                        <!-- Nama Barang & Ukuran -->
                        <p class="text-sm text-blue-800 mt-1">Produk: <span class="font-medium">{{ $review->payment->nama_barang ?? '-' }}</span></p>
                        <p class="text-sm text-blue-800">Ukuran: <span class="font-medium">{{ $review->payment->ukuran ?? '-' }}</span></p>

                        <!-- Isi Ulasan -->
                        <p class="mt-3 text-gray-800 leading-relaxed">{{ $review->ulasan }}</p>
                    </div>

                    <!-- Foto Ulasan -->
                    @if($review->foto)
                    <img src="{{ asset('storage/' . $review->foto) }}" alt="Foto Ulasan" 
                        class="mt-6 max-w-xs rounded-lg object-cover border border-blue-300 shadow-sm">
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
