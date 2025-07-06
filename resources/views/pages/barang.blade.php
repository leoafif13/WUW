@extends('layouts.app')
@section('title', 'Produk')
@section('content')

<!-- Navbar Auth -->
@include('components.navbar_auth')

<!-- Header Produk -->
<section class="relative bg-cover bg-center h-[650px] pt-40"
    style="background-image: url('{{ asset('img/Background 3.png') }}'); background-position: center 10%;">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
        <h1 class="text-4xl font-bold mb-4">Temukan Baju Impianmu</h1>
        <p class="max-w-xl text-lg mb-6">
            Sekarang Anda dapat menghemat semua hal stress, waktu, dan biaya dengan berbagai pilihan baju untuk acara besar Anda
        </p>
        @include('components.filter-bar')
    </div>
</section>

<!-- Judul Section -->
<section class="bg-blue-900 text-white py-6">
    <div class="text-center">
        <h2 class="text-2xl font-bold">
            @if(request()->has('search') || request()->has('kategori') || request()->has('ukuran') || request()->has('type'))
                Hasil Penelusuran
            @else
                Produk Rekomendasi Kami
            @endif
        </h2>
    </div>
</section>

<!-- Daftar Produk -->
<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @if ($barangs->isEmpty())
        <div class="col-span-full text-center text-gray-600 text-lg">
            Barang tidak ditemukan.
        </div>
    @else
        @foreach ($barangs as $barang)
            <x-product-card :barang="$barang" />
        @endforeach

        <!-- Pagination -->
        <div class="col-span-full mt-8 flex justify-center">
            {{ $barangs->withQueryString()->links('pagination::tailwind') }}
        </div>
    @endif
</section>

<script>
    const backButton = document.getElementById('backButton');
    if (backButton) {
        backButton.addEventListener('click', function () {
            window.history.back();
        });
    }
</script>
@endsection