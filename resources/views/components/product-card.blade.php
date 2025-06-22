@props(['barang'])

<div class="bg-white shadow rounded overflow-hidden flex flex-col">
    <div class="flex justify-center">
        <img src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" class="w-64 h-64 object-cover">
    </div>
    <div class="p-4 flex flex-col flex-grow">
        <div>
            <span class="text-xs px-2 py-1 rounded font-semibold 
                {{ $barang->stok == 0 ? 'bg-red-100 text-red-600' : 'bg-green-100 text-green-600' }}">
                {{ $barang->stok == 0 ? 'Tidak Tersedia' : 'Tersedia' }}
            </span>
            <h2 class="font-semibold mt-2 text-blue-800">{{ $barang->nama_barang }}</h2>
        </div>

        <p class="text-sm text-gray-600 break-words whitespace-normal flex-grow mt-2">
            {{ $barang->deskripsi }}
        </p>

        <div class="mt-3 flex gap-2">
            <a href="{{ route('detailproduk', $barang->id) }}" class="w-90 text-sm px-4 py-2 bg-blue-900 hover:bg-blue-500 text-white rounded text-center transition">
                Detail Produk
            </a>

            <form action="{{ route('keranjang.tambah', $barang->id) }}" method="get" class="inline">
                @csrf
                <button type="submit" class="text-sm px-4 py-2 border bg-blue-900 hover:bg-blue-500 text-white rounded transition"><i class="fas fa-shopping-cart"></i></button>
            </form>
        </div>
    </div>
</div>
