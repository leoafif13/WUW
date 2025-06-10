@extends('layouts.app')

@section('title', 'Daftar Ulasan')

@section('content')
@include('components.navbar_auth')

<div class="pt-24 px-4 pb-10 min-h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/Background 3.png') }}')">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-900">Daftar Ulasan Produk</h1>

    @if($reviews->isEmpty())
        <p class="text-center text-gray-500 italic">Belum ada ulasan untuk produk ini.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($reviews as $review)
            <div class="bg-white rounded-xl shadow-md p-4 sm:p-6 hover:shadow-xl transition-shadow duration-300 w-full">
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

                <!-- Garis -->
                <div class="border-t border-gray-400 my-4"></div>

                <!-- Isi Ulasan -->
                <p class="text-sm text-gray-900 leading-relaxed break-words">{{ $review->ulasan }}</p>

                <!-- Foto Ulasan -->
                @if($review->foto)
                <img src="{{ asset('storage/' . $review->foto) }}" alt="Foto Ulasan"
                    class="mt-4 w-full max-w-xs rounded-md border mx-auto">
                @endif
            </div>
            @endforeach
        </div>
    @endif
</div>

<!--Footer-->
<x-footer></x-footer>
@endsection
