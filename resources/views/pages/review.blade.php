@extends('layouts.app')

@section('title', 'Review')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- Header -->
    <div class="bg-blue-900 text-white text-center py-4 px-6 shadow">
        <div class="flex items-center justify-between">
            <a href="{{ url('/history') }}" aria-label="Back" class="mr-4 focus:outline-none hover:text-gray-300">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-lg font-semibold text-center flex-1">Nilai Produk</h1>
            <div class="w-6"></div>
        </div>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-md m-4">
            {{ session('success') }}
        </div>
    @endif

    @foreach($payments as $payment)
        @if($payment->order && $payment->order->tanggal_selesai && \Carbon\Carbon::parse($payment->order->tanggal_selesai)->isPast())
        <form action="{{ route('review.create') }}" method="POST" enctype="multipart/form-data" class="px-4 pb-6">
            @csrf
            <input type="hidden" name="payment_id" value="{{ $payment->id }}">

            <!-- Card Produk -->
            <div class="bg-white mt-4 p-4 rounded-xl shadow-md flex flex-col sm:flex-row gap-4">
                <img src="{{ asset('storage/' . $payment->order->foto) }}" alt="Foto Produk"
                    class="w-full sm:w-24 h-28 object-cover rounded-lg">
                <div class="text-center sm:text-left">
                    <h2 class="font-semibold text-base">{{ $payment->order->nama_barang ?? '-' }}</h2>
                    <p class="text-sm text-gray-600">Variasi: {{ $payment->order->ukuran ?? '-' }}</p>
                    <p class="text-sm text-gray-600">
                        Tanggal Sewa:
                        {{ \Carbon\Carbon::parse($payment->order->tanggal_mulai)->format('d M Y') }} -
                        {{ \Carbon\Carbon::parse($payment->order->tanggal_sewa)->format('d M Y') }}
                    </p>
                    <p class="text-blue-700 font-bold mt-1">Rp{{ number_format($payment->total, 0, ',', '.') }}</p>
                    <p class="text-sm">x 1</p>
                </div>
            </div>

            <!-- Ulasan -->
            <div class="mt-6">
                <label for="ulasan-{{ $payment->id }}" class="block text-base font-semibold mb-1">Tulis Ulasanmu Disini</label>
                <div class="flex justify-between items-center text-sm text-gray-500 mb-1">
                    <span></span>
                    <span id="charCount-{{ $payment->id }}">0/300</span>
                </div>
                <textarea id="ulasan-{{ $payment->id }}" name="ulasan" rows="4" maxlength="300"
                    placeholder="Tulis Ulasanmu Disini"
                    class="w-full border rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Upload Foto -->
            <div class="mt-6">
                <label for="fotoUpload-{{ $payment->id }}" class="block text-base font-semibold mb-1">Masukkan Foto</label>
                <label for="fotoUpload-{{ $payment->id }}"
                    class="flex flex-col justify-center items-center border-2 border-dashed border-gray-300 rounded-lg h-32 cursor-pointer relative overflow-hidden">
                    
                    <img id="preview-{{ $payment->id }}" src="#" alt="Preview Foto" class="hidden absolute inset-0 w-full h-full object-cover rounded-lg" />
                    
                    <i id="icon-{{ $payment->id }}" class="fas fa-camera text-2xl text-gray-400"></i>
                    <span id="text-{{ $payment->id }}" class="text-gray-500 mt-2">Masukkan Foto</span>
                    <input type="file" id="fotoUpload-{{ $payment->id }}" name="foto" accept="image/*" class="hidden">
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
        @endif
    @endforeach
</div>

<!-- Script Hitung Karakter dan Preview Foto -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @foreach($payments as $payment)
            @if($payment->order && $payment->order->tanggal_selesai && new Date("{{ $payment->order->tanggal_selesai }}") < new Date())
            const textarea{{ $payment->id }} = document.getElementById('ulasan-{{ $payment->id }}');
            const charCount{{ $payment->id }} = document.getElementById('charCount-{{ $payment->id }}');
            const inputFile{{ $payment->id }} = document.getElementById('fotoUpload-{{ $payment->id }}');
            const previewImg{{ $payment->id }} = document.getElementById('preview-{{ $payment->id }}');
            const icon{{ $payment->id }} = document.getElementById('icon-{{ $payment->id }}');
            const text{{ $payment->id }} = document.getElementById('text-{{ $payment->id }}');

            // Update character count
            textarea{{ $payment->id }}.addEventListener('input', () => {
                charCount{{ $payment->id }}.textContent = `${textarea{{ $payment->id }}.value.length}/300`;
            });

            // Preview image
            inputFile{{ $payment->id }}.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg{{ $payment->id }}.src = e.target.result;
                        previewImg{{ $payment->id }}.classList.remove('hidden');
                        icon{{ $payment->id }}.classList.add('hidden');
                        text{{ $payment->id }}.classList.add('hidden');
                    }
                    reader.readAsDataURL(file);
                } else {
                    previewImg{{ $payment->id }}.src = '#';
                    previewImg{{ $payment->id }}.classList.add('hidden');
                    icon{{ $payment->id }}.classList.remove('hidden');
                    text{{ $payment->id }}.classList.remove('hidden');
                }
            });
            @endif
        @endforeach
    });
</script>
@endsection
