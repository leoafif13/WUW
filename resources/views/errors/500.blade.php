@extends('layouts.app')
@section('title', '500 - Kesalahan Server')

@section('content')
<div class="text-center py-20 text-red-600">
    <h1 class="text-6xl font-bold">500</h1>
    <p class="text-xl mt-4">Maaf, terjadi kesalahan di server kami. Kami sedang memperbaikinya.</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block text-blue-600 underline">Kembali ke Beranda</a>
</div>
@endsection
