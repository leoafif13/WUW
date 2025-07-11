@extends('layouts.app')
@section('title', 'Pembayaran')
@section('content')
<header class="bg-blue-900 text-white px-4 py-3 flex justify-between items-center">
    <button onclick="history.back()" aria-label="Back" class="mr-4 hover:text-blue-300 text-lg focus:outline-none">
            <i class="fas fa-arrow-left"></i>
        </button>
  </button>
    <h1 class="text-lg font-semibold">Pembayaran</h1>
    <div class="space-x-2">
    <a href="/sewa" aria-label="Catatan" class="hover:text-gray-300 transition duration-200">
        <i class="fas fa-sticky-note"></i>
      </a>
    </div>
  </header>