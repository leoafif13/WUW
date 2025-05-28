<form action="{{ route('filter') }}" method="GET"
  class="flex flex-wrap md:flex-nowrap justify-center gap-2 bg-white p-2 rounded shadow-lg">
  <div class="flex flex-wrap md:flex-nowrap items-stretch gap-2 w-full md:w-auto">

    <!-- Dropdown Kategori -->
    <select name="kategori" id="kategori"
      class="h-10 w-full md:w-auto px-4 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded md:rounded-l-md hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100">
      <option value="">Semua Kategori</option>
      <option value="Baju Nikahan" {{ request('kategori') == 'Baju Nikahan' ? 'selected' : '' }}>Baju Nikahan</option>
      <option value="Baju Wisuda" {{ request('kategori') == 'Baju Wisuda' ? 'selected' : '' }}>Baju Wisuda</option>
    </select>

    <!-- Dropdown Type -->
    <select name="type" id="type"
      class="h-10 w-full md:w-auto px-4 text-sm font-medium text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100">
      <option value="">Semua Type</option>
      <option value="atasan" {{ request('type') == 'atasan' ? 'selected' : '' }}>Atasan</option>
      <option value="bawahan" {{ request('type') == 'bawahan' ? 'selected' : '' }}>Bawahan</option>
      <option value="satu set" {{ request('type') == 'satu set' ? 'selected' : '' }}>Satu Set</option>
    </select>

    <!-- Dropdown Ukuran -->
    <select name="ukuran" id="ukuran"
      class="h-10 w-full md:w-auto px-4 text-sm font-medium text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100">
      <option value="">Semua Ukuran</option>
      <option value="S" {{ request('ukuran') == 'S' ? 'selected' : '' }}>S</option>
      <option value="M" {{ request('ukuran') == 'M' ? 'selected' : '' }}>M</option>
      <option value="L" {{ request('ukuran') == 'L' ? 'selected' : '' }}>L</option>
      <option value="XL" {{ request('ukuran') == 'XL' ? 'selected' : '' }}>XL</option>
      <option value="XXL" {{ request('ukuran') == 'XXL' ? 'selected' : '' }}>XXL</option>
    </select>

    <!-- Input Search dan Tombol -->
    <div class="relative w-full md:w-[300px]">
      <input type="search" name="search" id="search" value="{{ request('search') }}"
        class="block h-10 p-2.5 w-full text-sm text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Telusuri lebih banyak lagi..." />
      <button type="submit"
        class="absolute top-0 right-0 h-10 px-4 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-r-md">
        Cari
      </button>
    </div>

  </div>
</form>
