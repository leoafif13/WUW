@extends('layouts.app')
@section('title', 'Produk')
@section('content')

<!-- Header Produk dengan Tombol Back -->
@include('components.navbar_auth')

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

<section class="bg-blue-900 text-white py-6">
    <div class="text-center">
        <h2 class="text-2xl font-bold">
            @if(request()->has('search') || request()->has('kategori') || request()->has('ukuran')) 
                Hasil Penelusuran
            @else
                Produk Rekomendasi Kami
            @endif
        </h2>
    </div>
</section>


<section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($barangs as $barang)
        <div class="bg-white shadow rounded overflow-hidden flex flex-col">
            <div class="flex justify-center">
                <img src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" class="w-64 h-64 object-cover">
            </div>
            <div class="p-4 flex flex-col flex-grow">
                <div> <!-- Container untuk label stok dan judul -->
                    <span class="text-xs px-2 py-1 rounded font-semibold 
                        {{ $barang->stok == 0 ? 'bg-red-100 text-red-600' : 'bg-green-100 text-green-600' }}">
                        {{ $barang->stok == 0 ? 'Tidak Tersedia' : 'Tersedia' }}
                    </span>
                    <h2 class="font-semibold mt-2 text-blue-800">{{ $barang->nama_barang }}</h2>
                </div>

                <p class="text-sm text-gray-600 break-words whitespace-normal flex-grow mt-2">
                    {{ $barang->deskripsi }}
                </p>

                <div class="mt-3 flex gap-2">
                    <a href="{{ route('detailproduk', $barang->id) }}" class="w-90 text-sm px-4 py-2 bg-blue-900 text-white rounded text-center">
                        Detail Produk
                    </a>

                    <form action="{{ route('keranjang.tambah', $barang->id) }}" method="" class="inline">
                        @csrf
                        <button type="submit" class="text-sm px-4 py-2 border bg-blue-900 text-indigo-900 rounded">🛒</button>
                    </form>
                </div>

            </div>
        </div>

    @endforeach
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