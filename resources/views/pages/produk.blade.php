<div class="max-w-6xl mx-auto p-6 text-center">
  <h2 class="text-white text-2xl md:text-3xl font-bold mb-10">Produk Yang Kami Sewakan</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @for ($i = 0; $i < 3; $i++)
      <div class="bg-white text-blue-900 rounded-lg overflow-hidden shadow-md">
        <img src="{{ asset('img/jashitam.jpg') }}" alt="Jas Midnight Charcoal" class="w-full h-72 object-cover">
        <div class="p-4 text-left">
          <div class="flex items-center  mb-2">
            <span class="bg-gray-300 text-gray-600 text-xs font-semibold mr-2 px-2 py-1 rounded">Tersedia</span>
            <span class="font-semibold">Pranz | Midnight Charcoal</span>
          </div>
          <p class="text-sm mr-4 mb-4">Jas dengan warna yang sangat elegan dan memiliki kesan yang sangat mewah</p>
          <a href="#login" class="block w-full bg-blue-900 text-white text-sm font-bold px-4 py-2 rounded hover:bg-gray-700 hover:text-gray-400 transition duration-300 text-center">
            Sewa Sekarang
          </a>
        </div>
      </div>
    @endfor
  </div>
</div>
