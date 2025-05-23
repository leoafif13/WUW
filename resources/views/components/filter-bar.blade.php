<form action="{{ route('filter') }}" method="GET" class="flex justify-center gap-2 bg-white p-2 rounded shadow-lg">
  <div class="flex items-stretch gap-0">

    <!-- Dropdown Kategori -->
    <select name="kategori" id="kategori"
      class="h-full px-4 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-l-md hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100">
      <option value="">Semua Kategori</option>
      <option value="Baju Nikahan" {{ request('kategori') == 'Baju Nikahan' ? 'selected' : '' }}>Baju Nikahan</option>
      <option value="Baju Wisuda" {{ request('kategori') == 'Baju Wisuda' ? 'selected' : '' }}>Baju Wisuda</option>
    </select>

    <!-- Dropdown Type -->
    <select name="type" id="type"
      class="h-full px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-300 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100">
      <option value="">Semua Type</option>
      <option value="atasan" {{ request('type') == 'atasan' ? 'selected' : '' }}>Atasan</option>
      <option value="bawahan" {{ request('type') == 'bawahan' ? 'selected' : '' }}>Bawahan</option>
      <option value="satu set" {{ request('type') == 'satu set' ? 'selected' : '' }}>Satu Set</option>
    </select>

    <!-- Input Search dan Tombol -->
    <div class="relative w-[300px]">
      <input type="search" name="search" id="search" value="{{ request('search') }}"
        class="block h-full p-2.5 w-full text-sm text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Telusuri lebih banyak lagi..." />
      <button type="submit"
        class="absolute top-0 right-0 h-full px-4 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-r-md">
        Cari
      </button>
    </div>

  </div>
</form>
