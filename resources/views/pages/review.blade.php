@extends('layouts.app')

@section('title', 'Review')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <div class="bg-blue-900 text-white text-center py-4 px-6 shadow">
        <div class="flex items-center justify-between">
            <!--Tombol Kembali-->
            <a href="{{ url('/history') }}" aria-label="Back" class="mr-4 focus:outline-none hover:text-gray-300">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-lg font-semibold text-center flex-1">Nilai Produk</h1>
            <div class="w-6"></div>
        </div>
    </div>

    <!-- Form Review -->
    <form action="{{ route('review.create') }}" method="POST" enctype="multipart/form-data" class="px-4 pb-6">
        @csrf

        <!-- Card Produk -->
        <div class="bg-white mt-4 p-4 rounded-xl shadow-md flex flex-col sm:flex-row gap-4">
            <img src="{{ asset('img/Jas.jpg') }}" alt="Foto Produk" class="w-full sm:w-24 h-28 object-cover rounded-lg">
            <div class="text-center sm:text-left">
                <h2 class="font-semibold text-base">Royal Java Heritage Set</h2>
                <p class="text-sm text-gray-600">Variasi: Size L</p>
                <p class="text-sm text-gray-600">Tanggal Sewa: 15 April - 20 April 2025</p>
                <p class="text-blue-700 font-bold mt-1">Rp300.000</p>
                <p class="text-sm">x 1</p>
            </div>
        </div>

        <!-- Ulasan -->
        <div class="mt-6">
            <label for="ulasan" class="block text-base font-semibold mb-1">Tulis Ulasanmu Disini</label>
            <div class="flex justify-between items-center text-sm text-gray-500 mb-1">
                <span></span>
                <span id="charCount">0/300</span>
            </div>
            <textarea id="ulasan" name="ulasan" rows="4" maxlength="300" placeholder="Tulis Ulasanmu Disini"
                class="w-full border rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <!-- Upload Foto -->
        <div class="mt-6">
            <label for="fotoUpload" class="block text-base font-semibold mb-1">Masukkan Foto</label>
            <label for="fotoUpload"
                class="flex flex-col justify-center items-center border-2 border-dashed border-gray-300 rounded-lg h-32 cursor-pointer">
                <i class="fas fa-camera text-2xl text-gray-400"></i>
                <span class="text-gray-500 mt-2">Masukkan Foto</span>
                <input type="file" id="fotoUpload" name="foto" accept="image/*" class="hidden">
            </label>
        </div>

        <!-- Tombol Kirim -->
        <div class="mt-6">
            <button type="submit"
                class="w-full bg-blue-900 text-white py-3 rounded-lg hover:bg-blue-800 transition duration-200">
                Kirim
            </button>
        </div>
    </form>
</div>

<script>
    const textarea = document.getElementById('ulasan');
    const charCount = document.getElementById('charCount');

    textarea.addEventListener('input', () => {
        charCount.textContent = `${textarea.value.length}/300`;
    });
</script>
@endsection
