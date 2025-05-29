@extends('layouts.app')
@section('title', '419 - Sesi Kedaluwarsa')

@section('content')
<div class="text-center py-20 text-red-600">
    <h1 class="text-6xl font-bold">419</h1>
    <p class="text-xl mt-4">Sesi Anda telah kedaluwarsa. Silakan muat ulang halaman atau login kembali.</p>
    <a href="{{ url()->previous() }}" class="mt-6 inline-block text-blue-600 underline">Kembali</a>
</div>
@endsection
