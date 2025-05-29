@extends('layouts.app')
@section('title', '403 - Akses Ditolak')

@section('content')
<div class="text-center py-20 text-red-600">
    <h1 class="text-6xl font-bold">403</h1>
    <p class="text-xl mt-4">Akses Ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block text-blue-600 underline">Kembali ke Beranda</a>
</div>
@endsection
