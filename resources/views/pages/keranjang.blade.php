@extends('layouts.app')
@section('title', 'Keranjang')
@section('content')

<header class="flex items-center justify-between px-4 py-3 text-white text-sm bg-blue-900 backdrop-blur-sm">
    <div class="flex items-center">
        <button onclick="history.back()" aria-label="Back" class="mr-4 hover:text-gray-300 focus:outline-none">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>
    <h1 class="text-base font-bold sm:text-lg absolute left-1/2 transform -translate-x-1/2">Keranjang</h1>
    <a href="/sewa" aria-label="Notes" class="text-white text-lg">
        <span class="material-symbols-outlined">sticky_note_2</span>
    </a>
    
</header>

<main class="px-4 sm:px-6 py-4 space-y-2 bg-[#F9F9F9]">
    @forelse ($barangs as $barang)
    <article class="bg-white flex flex-wrap sm:flex-nowrap items-center p-3 shadow-sm space-x-3 w-full">
        <input type="checkbox" class="check-barang" data-harga="{{ $barang->harga }}" data-qty="{{ $barang->qty }}" />

        <img alt="{{ $barang->nama_barang }}" class="w-20 h-20 object-cover ml-3 flex-shrink-0"
             src="{{ $barang->foto ? asset('storage/' . $barang->foto) : 'https://via.placeholder.com/100' }}" />

        <div class="flex flex-col ml-4 flex-1 min-w-0">
            <h2 class="text-sm sm:text-base md:text-lg text-blue-900 break-words whitespace-normal">
                {{ $barang->nama_barang }} 
                <span class="text-xs text-gray-500">x {{ $barang->qty }}</span>
            </h2>
            <div class="flex flex-wrap gap-2 mt-1 items-center">
                <button class="text-[10px] sm:text-xs bg-gray-200 text-gray-400 rounded px-2 py-[2px]" disabled>{{ $barang->ukuran }}</button>

                <label class="text-xs text-gray-600">Dari:</label>
                <input type="date" class="tanggal-mulai border rounded px-2 py-1 text-xs sm:text-sm w-auto" name="tanggal_mulai" />

                <label class="text-xs text-gray-600">Sampai:</label>
                <input type="date" class="tanggal-selesai border rounded px-2 py-1 text-xs sm:text-sm w-auto" name="tanggal_selesai" />
            </div>
            <span class="text-xs sm:text-sm text-blue-900 mt-1 harga-barang">
                Rp{{ number_format($barang->harga) }} / hari
            </span>
        </div>

       <div class="grid grid-cols-3 sm:grid-cols-1 gap-2 w-full sm:w-auto">
            <form action="{{ route('keranjang.kurangi', $barang->id) }}" method="GET">
                <button class="bg-blue-900 text-white text-xs sm:text-sm rounded px-3 py-1 w-full" type="submit">- 1</button>
            </form>
            <form action="{{ route('keranjang.tambah', $barang->id) }}" method="GET">
                <button class="bg-blue-900 text-white text-xs sm:text-sm rounded px-3 py-1 w-full" type="submit">+ 1</button>
            </form>
            <form action="{{ route('keranjang.hapus', $barang->id) }}" method="GET">
                <button class="bg-blue-900 text-white text-xs sm:text-sm rounded px-3 py-1 w-full" type="submit">Hapus</button>
            </form>
        </div>

    </article>
    @empty
    <p class="text-center text-sm text-gray-500">Keranjang kamu kosong.</p>
    @endforelse
</main>


<footer class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between px-4 sm:px-6 py-3 space-y-2 sm:space-y-0">
    <label class="flex items-center text-blue-900 text-sm sm:text-base font-semibold cursor-pointer w-full sm:w-auto">
        <input id="checkAll" class="w-5 h-5 mr-2 text-blue-900 border-gray-300 rounded" type="checkbox" />
        Pilih Semua
    </label>
    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6 w-full sm:w-auto">
        <p class="text-sm sm:text-base text-blue-900 font-semibold text-center sm:text-left">
            Total <span id="totalHarga" class="text-blue-900 text-lg sm:text-xl font-extrabold">Rp0</span>
        </p>
        <a href="/pembayaran" class="bg-blue-900 text-white text-sm sm:text-base font-semibold rounded px-5 py-2 text-center w-full sm:w-auto">
            Checkout (<span id="countBarang">0</span>)
        </a>
    </div>
</footer>


<script>
    // Fungsi format rupiah
    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(angka);
    }

    // Hitung selisih hari (termasuk hari pertama dan terakhir)
    function hitungDurasi(tglMulai, tglSelesai) {
        if (!tglMulai || !tglSelesai) return 0;
        const mulai = new Date(tglMulai);
        const selesai = new Date(tglSelesai);
        const diffTime = selesai - mulai;
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // +1 supaya termasuk hari terakhir
        return diffDays > 0 ? diffDays : 0;
    }

    // Update total harga dan tampilan harga per barang
    function updateTotal() {
        let total = 0;
        let count = 0;

        document.querySelectorAll('article').forEach(article => {
            const checkbox = article.querySelector('.check-barang');
            const hargaPerHari = parseInt(checkbox.getAttribute('data-harga'));
            const qty = parseInt(checkbox.getAttribute('data-qty')) || 1;
            const tanggalMulai = article.querySelector('.tanggal-mulai').value;
            const tanggalSelesai = article.querySelector('.tanggal-selesai').value;
            const hargaSpan = article.querySelector('.harga-barang');

            if (checkbox.checked) {
                const durasi = hitungDurasi(tanggalMulai, tanggalSelesai);
                if (durasi > 0) {
                    const hargaTotalBarang = hargaPerHari * durasi * qty;
                    hargaSpan.textContent = formatRupiah(hargaPerHari) + ' x ' + durasi + ' hari x ' + qty + ' pcs = ' + formatRupiah(hargaTotalBarang);
                    total += hargaTotalBarang;
                    count += qty;
                } else {
                    hargaSpan.textContent = 'Tanggal tidak valid';
                }
                hargaSpan.style.visibility = 'visible';
            } else {
                hargaSpan.style.visibility = 'hidden';
            }
        });

        document.getElementById('totalHarga').textContent = formatRupiah(total);
        document.getElementById('countBarang').textContent = count;
    }

    // Event listener untuk semua checkbox dan input tanggal
    document.querySelectorAll('.check-barang, .tanggal-mulai, .tanggal-selesai').forEach(el => {
        el.addEventListener('change', updateTotal);
    });

    // Checkbox Pilih Semua
    document.getElementById('checkAll').addEventListener('change', function () {
        const checked = this.checked;
        document.querySelectorAll('.check-barang').forEach(cb => {
            cb.checked = checked;
        });
        updateTotal();
    });

    // Inisialisasi total harga saat halaman dimuat
    updateTotal();
</script>

@endsection
