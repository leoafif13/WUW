<div class="max-w-6xl mx-auto p-6 text-center">
  <h2 class="text-2xl md:text-3xl font-bold mb-10">Produk Yang Kami Sewakan</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @for ($i = 0; $i < 3; $i++)
      <div class="bg-white text-red-900 rounded-lg overflow-hidden shadow-md">
        <img src="{{ asset('img/jashitam.jpg') }}" alt="Jas Midnight Charcoal" class="w-full h-72 object-cover">
        <div class="p-4">
          <div class="flex items-center justify-between mb-2">
            <span class="bg-gray-200 text-gray-600 text-xs font-semibold px-2 py-1 rounded">Tersedia</span>
            <span class="font-semibold">Pranz | Midnight Charcoal</span>
          </div>
          <p class="text-sm mb-4">Jas dengan warna yang sangat elegan dan memiliki kesan yang sangat mewah</p>
          <a href="#login" class="inline-block bg-red-900 text-white text-sm font-bold px-4 py-2 rounded hover:bg-red-800 transition">
            Sewa Sekarang
          </a>
        </div>
      </div>
    @endfor
  </div>
</div>
