@extends('layouts.app')
@section('title', 'Keranjang')
@section('content')

<header class="flex items-center justify-between px-4 py-3 text-white text-sm bg-blue-900 backdrop-blur-sm relative">
    <div class="flex items-center">
        <button onclick="history.back()" aria-label="Back" class="mr-4 hover:text-blue-300 text-lg focus:outline-none">
            <i class="fas fa-arrow-left"></i>
        </button>
    </div>
    <h1 class="text-base font-bold sm:text-lg absolute left-1/2 transform -translate-x-1/2 pl-6">Keranjang</h1>
    <a href="/sewa" aria-label="Notes" class="text-white text-lg hover:text-gray-300 transition">
        <i class="fas fa-sticky-note"></i>
    </a>
</header>

@if ($barangs->count())
<div class="w-full bg-gray-100 border-b border-gray-200 py-3 px-4 sm:px-6 flex flex-wrap items-center justify-center space-x-10 text-sm sm:text-base text-center">
    <!-- Keranjang -->
    <div class="flex flex-col items-center text-blue-900 font-semibold">
        <div class="w-6 h-6 flex items-center justify-center">
            <i class="fas fa-shopping-cart text-blue-900"></i>
        </div>
        <span class="text-xs mt-1 text-blue-900">Keranjang</span>
    </div>

    <div class="w-4 h-px bg-gray-400"></div>

    <!-- Isi Formulir -->
    <div class="flex flex-col items-center text-gray-500">
        <div class="w-6 h-6 flex items-center justify-center">
            <i class="fas fa-file-alt text-gray-500"></i>
        </div>
        <span class="text-xs mt-1">Isi Formulir</span>
    </div>

    <div class="w-4 h-px bg-gray-400"></div>

    <!-- Bayar -->
    <div class="flex flex-col items-center text-gray-500">
        <div class="w-6 h-6 flex items-center justify-center">
            <i class="fas fa-credit-card text-gray-500"></i>
        </div>
        <span class="text-xs mt-1">Bayar</span>
    </div>
</div>
@endif


@if(session('success'))
  <div class="mx-4 mt-4 bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Berhasil!</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
  </div>
@endif

<main class="px-4 sm:px-6 py-4 space-y-4 bg-[#F9F9F9]">
    @forelse ($barangs as $barang)
    <article class="keranjang-item bg-white flex flex-wrap sm:flex-nowrap gap-4 items-start p-4 sm:p-6 shadow-sm w-full" data-barang-id="{{ $barang->id }}">
        <input type="checkbox" class="check-barang mt-15 w-5 h-5" name="selected_items[]" value="{{ $barang->id }}" data-harga="{{ $barang->harga }}" data-qty="{{ $barang->qty }}" />

        <img alt="{{ $barang->nama_barang }}" class="w-24 h-24 sm:w-32 sm:h-32 rounded-lg object-cover ml-2 flex-shrink-0"
             src="{{ $barang->foto ? asset('storage/' . $barang->foto) : 'https://via.placeholder.com/100' }}" />

        <div class="flex flex-col ml-4 flex-1 min-w-0 w-full sm:w-auto">
            <h2 class="text-sm sm:text-base md:text-lg text-blue-900 break-words whitespace-normal">
                {{ $barang->nama_barang }}
                <span class="text-xs text-gray-500">x {{ $barang->qty }}</span>
            </h2>
            <div class="flex flex-wrap gap-2 mt-1 items-center">
                <button class="text-[10px] sm:text-xs bg-gray-200 text-gray-400 rounded px-2 py-[2px]" disabled>{{ $barang->ukuran }}</button>

                <label for="mulai-{{ $barang->id }}" class="text-xs text-gray-600">Dari:</label>
                <input id="mulai-{{ $barang->id }}" type="date" class="tanggal-mulai border rounded px-2 py-1 text-xs sm:text-sm w-auto" />

                <label for="selesai-{{ $barang->id }}" class="text-xs text-gray-600">Sampai:</label>
                <input id="selesai-{{ $barang->id }}" type="date" class="tanggal-selesai border rounded px-2 py-1 text-xs sm:text-sm w-auto" />
            </div>
            <span class="text-xs sm:text-sm text-blue-900 mt-1 harga-barang block">
                Rp{{ number_format($barang->harga) }} / hari
            </span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-1 gap-4 w-full sm:w-auto mt-4 sm:mt-0">
            <form action="{{ route('keranjang.kurangi', $barang->id) }}" method="GET">
                <button class="bg-blue-900 hover:bg-blue-500 text-white text-xs sm:text-sm rounded px-3 py-1 w-full" type="submit">- 1</button>
            </form>
            <form action="{{ route('keranjang.hapus', $barang->id) }}" method="GET">
                <button class="bg-blue-900 hover:bg-blue-500 text-white text-xs sm:text-sm rounded px-3 py-1 w-full" type="submit">Hapus</button>
            </form>
        </div>
    </article>
    @empty
    <div class="min-h-screen flex items-center justify-center">
        <p class="text-center text-sm text-gray-500">Keranjang kamu kosong</p>
    </div>
    @endforelse
</main>

<form id="orderForm" action="{{ route('order.store') }}" method="POST" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex flex-wrap sm:flex-nowrap items-center justify-between px-4 sm:px-6 py-3 space-y-2 sm:space-y-0 z-10">
    @csrf
    <label class="flex items-center text-blue-900 text-sm sm:text-base font-semibold cursor-pointer w-full sm:w-auto">
        <input id="checkAll" class="w-5 h-5 mr-2 text-blue-900 border-gray-300 rounded" type="checkbox" />
        Pilih Semua
    </label>
    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6 w-full sm:w-auto">
        <p class="text-sm sm:text-base text-blue-900 font-semibold text-center sm:text-left">
            Total <span id="totalHarga" class="text-blue-900 text-lg sm:text-xl font-extrabold">Rp0</span>
        </p>
        <input type="hidden" name="items" id="itemsInput" />
        <button type="submit" class="bg-blue-900 hover:bg-blue-500 text-white text-sm sm:text-base font-semibold rounded px-5 py-2 text-center w-full sm:w-auto">
            Checkout (<span id="countBarang">0</span>)
        </button>
    </div>
</form>

<script>
    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(angka);
    }

    function hitungDurasi(tglMulai, tglSelesai) {
        if (!tglMulai || !tglSelesai) return 0;
        const mulai = new Date(tglMulai);
        const selesai = new Date(tglSelesai);
        const diffTime = selesai - mulai;
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;
        return diffDays > 0 ? diffDays : 0;
    }

    function updateTotal() {
        let total = 0;
        let count = 0;

        document.querySelectorAll('article').forEach(article => {
            const checkbox = article.querySelector('.check-barang');
            const hargaPerHari = parseInt(checkbox.getAttribute('data-harga')) || 0;
            const qty = parseInt(checkbox.getAttribute('data-qty')) || 1;
            const tanggalMulai = article.querySelector('.tanggal-mulai').value;
            const tanggalSelesai = article.querySelector('.tanggal-selesai').value;
            const hargaSpan = article.querySelector('.harga-barang');

            if (checkbox.checked) {
                const durasi = hitungDurasi(tanggalMulai, tanggalSelesai);
                if (durasi > 0) {
                    const totalHarga = hargaPerHari * durasi * qty;
                    hargaSpan.textContent = `${formatRupiah(hargaPerHari)} x ${durasi} hari x ${qty} pcs = ${formatRupiah(totalHarga)}`;
                    total += totalHarga;
                    count += qty;
                } else {
                    hargaSpan.textContent = 'Tanggal tidak valid';
                }
                hargaSpan.style.visibility = 'visible';
            } else {
                hargaSpan.textContent = formatRupiah(hargaPerHari) + ' / hari';
                hargaSpan.style.visibility = 'visible';
            }
        });

        document.getElementById('totalHarga').textContent = formatRupiah(total);
        document.getElementById('countBarang').textContent = count;
    }

    const today = new Date().toISOString().split('T')[0];
    document.querySelectorAll('.tanggal-mulai, .tanggal-selesai').forEach(input => {
        input.setAttribute('min', today);
    });

    document.querySelectorAll('.check-barang, .tanggal-mulai, .tanggal-selesai').forEach(el => {
        el.addEventListener('change', updateTotal);
    });

    document.getElementById('checkAll').addEventListener('change', function () {
        const checked = this.checked;
        document.querySelectorAll('.check-barang').forEach(cb => {
            cb.checked = checked;
        });
        updateTotal();
    });

    document.getElementById('orderForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const items = [];
        let valid = true;

        document.querySelectorAll('article').forEach(article => {
            const checkbox = article.querySelector('.check-barang');
            if (checkbox.checked) {
                const nama_barang = article.querySelector('h2').childNodes[0].nodeValue.trim();
                const foto = article.querySelector('img').src;
                const ukuran = article.querySelector('button[disabled]').innerText;
                const qty = parseInt(checkbox.getAttribute('data-qty'));
                const harga_per_hari = parseInt(checkbox.getAttribute('data-harga'));
                const tanggal_mulai = article.querySelector('.tanggal-mulai').value;
                const tanggal_selesai = article.querySelector('.tanggal-selesai').value;

                if (!tanggal_mulai || !tanggal_selesai) {
                    alert('Tanggal mulai dan selesai harus diisi untuk semua barang yang dipilih.');
                    valid = false;
                    return;
                }

                items.push({
                    nama_barang,
                    foto: foto.includes('/storage/') ? foto.split('/storage/')[1] : '',
                    ukuran,
                    qty,
                    tanggal_mulai,
                    tanggal_selesai,
                    harga_per_hari
                });
            }
        });

        if (!valid) return;

        if (items.length === 0) {
            alert('Pilih minimal satu barang untuk checkout.');
            return;
        }

        document.getElementById('itemsInput').value = JSON.stringify(items);
        e.target.submit();
    });

    updateTotal();
</script>

@endsection
