@extends('layouts.app')
@section('title', 'Detail Produk')
@section('content')

<!-- Header dengan Tombol Back dan Judul "Detail Produk" -->
<div class="bg-blue-900 flex items-center px-4 py-3">
    <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
        <i class="fas fa-arrow-left"></i>
    </button>
    <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">Detail Produk</h1>
</div>

<section class="relative bg-cover bg-center h-[550px]" style="background-image: url('img/Background 3.png');">
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

<section class="max-w-15xl mx-auto px-4 py-10">
    @include('components.detail-card')
</section>

<script>
    document.getElementById('backButton').addEventListener('click', function () {
        window.history.back();
    });
</script>
@endsection