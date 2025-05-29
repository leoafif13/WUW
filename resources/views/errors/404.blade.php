@extends('layouts.app')
@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<div class="text-center py-20 text-red-600">
    <h1 class="text-6xl font-bold">404</h1>
    <p class="text-xl mt-4">Oops! Halaman yang Anda cari tidak ditemukan.</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block text-blue-600 underline">Kembali ke Beranda</a>
</div>
@endsection
