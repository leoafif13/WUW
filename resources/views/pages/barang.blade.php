@extends('layouts.app')
@section('title', 'Produk')
@section('content')

<!-- Header Produk dengan Tombol Back -->
@include('components.navbar_auth')

<section class="relative bg-cover bg-center h-[650px] pt-28" style="background-image: url('img/Background 3.png'); background-position: center 80%;">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
        <h1 class="text-4xl font-bold mb-4">Temukan Baju Impianmu</h1>
        <p class="max-w-xl text-lg mb-6">
            Sekarang Anda dapat menghemat semua hal stress, waktu, dan biaya dengan berbagai pilihan baju untuk acara besar Anda
        </p>

        @include('components.filter-bar')
    </div>
</section>

<section class="bg-blue-900 text-white py-6">
    <div class="text-center">
        <h2 class="text-2xl font-bold">Detail Produk</h2>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @for ($i = 0; $i < 6; $i++)
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="flex justify-center">
                <img src="img/Jas.jpg" alt="Jas" class="w-64 h-64 object-cover">
            </div>
            <div class="p-4">
                <span class="text-xs text-gray-500 bg-gray-200 px-2 py-1 rounded">Tersedia</span>
                <h2 class="font-semibold mt-2 text-blue-800">Pranz | Midnight Charcoal</h2>
                <p class="text-sm text-gray-600">Jas dengan warna yang sangat elegan dan memiliki kesan yang sangat mewah</p>
                <div class="mt-3 flex gap-2">
                    <a href="/detailproduk" class="w-90 text-sm px-4 py-2 bg-blue-900 text-white rounded text-center">Detail Produk</a>
                    <button class="text-sm px-4 py-2 border bg-blue-900 text-indigo-900 rounded">🛒</button>
                </div>
            </div>
        </div>
    @endfor
</section>

<script>
    document.getElementById('backButton').addEventListener('click', function () {
        window.history.back();
    });
</script>
@endsection