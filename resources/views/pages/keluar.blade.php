@extends('layouts.app')
@section('title', 'Keluar')

@section('content')
<div class="fixed inset-0 backdrop-blur-sm bg-white/30 flex justify-center items-center z-50">
  <div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-sm text-center">
    <h2 class="text-lg font-bold text-blue-900 mb-4">Anda yakin ingin keluar?</h2>
    <div class="flex justify-center gap-4">
      <a href="{{ url()->previous() }}" class="bg-gray-200 text-gray-700 font-semibold px-4 py-2 rounded-lg">Kembali</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-gray-300 text-gray-700 font-semibold px-4 py-2 rounded-lg">Yakin</button>
      </form>
    </div>
  </div>
</div>
@endsection
