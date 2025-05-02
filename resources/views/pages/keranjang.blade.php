@extends('layouts.app')
@section('title', 'keranjang')
@section('content')
<!-- Header -->
<header class="flex items-center justify-between px-4 py-3 text-white text-sm bg-blue-900 backdrop-blur-sm">
    <div class="flex items-center">
        <button onclick="history.back()" aria-label="Back" class="mr-4 hover:text-gray-300 focus:outline-none">
            <i class="fas fa-arrow-left"></i>
        </button>
    </div>
    <h1 class="text-base sm:text-lg absolute left-1/2 transform -translate-x-1/2">Keranjang</h1>
    <a href="/sewa" aria-label="Notes" class="text-white text-lg">
        <span class="material-symbols-outlined">sticky_note_2</span>
    </a>

</header>
<!-- Cart Items Container -->
<main class="px-4 sm:px-6 py-4 space-y-2 bg-[#F9F9F9]">
    <!-- Item -->
    @for ($i = 0; $i < 3; $i++)
    <article class="bg-white flex items-center p-3 shadow-sm">
        <input aria-label="Select item" class="w-5 h-5 text-blue-900 border-gray-300 rounded" type="checkbox" />
        <img alt="Photo of clothing" class="w-20 h-20 object-cover ml-3" src="https://storage.googleapis.com/a1aa/image/b22b6389-d2be-4f9a-ed14-18e95bfebb62.jpg" />
        <div class="flex flex-col ml-4 flex-1">
            <h2 class="text-sm sm:text-base text-blue-900">Royal Java Heritage Set</h2>
            <div class="flex space-x-2 mt-1">
                <button class="text-[10px] sm:text-xs bg-gray-200 text-gray-400 rounded px-2 py-[2px]" disabled>Size M</button>
                <button class="text-[10px] sm:text-xs bg-gray-200 text-gray-400 rounded px-2 py-[2px]" disabled>15 April - 20 April</button>
            </div>
            <span class="text-xs sm:text-sm text-blue-900 mt-1">Rp300.000</span>
        </div>
        <div class="flex flex-col items-center space-y-1">
            <div class="flex items-center border border-gray-300 rounded text-xs sm:text-sm text-blue-900 select-none">
                <button class="px-2 py-0.5 text-gray-400" disabled>-</button>
                <span class="px-3 py-0.5">1</span>
                <button class="px-2 py-0.5 text-gray-400" disabled>+</button>
            </div>
            <button class="bg-blue-900 text-white text-xs sm:text-sm rounded px-4 py-1" disabled>Hapus</button>
        </div>
    </article>
    @endfor
</main>

<!-- Footer -->
<footer class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex items-center justify-between px-4 sm:px-6 py-3">
    <label class="flex items-center text-blue-900 text-sm sm:text-base font-semibold cursor-pointer">
        <input class="w-5 h-5 mr-2 text-blue-900 border-gray-300 rounded" type="checkbox" />
        Pilih Semua
    </label>
    <div class="flex items-center space-x-6">
        <p class="text-sm sm:text-base text-blue-900 font-semibold">
            Total <span class="text-blue-900 text-lg sm:text-xl font-extrabold">Rp600.000</span>
        </p>
        <button class="bg-blue-900 text-white text-sm sm:text-base font-semibold rounded px-5 py-2">
            Checkout (2)
        </button>
    </div>
</footer>
@endsection