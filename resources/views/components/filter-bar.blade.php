<form class="flex justify-center gap-2 bg-white p-2 rounded shadow-lg">
  <div class="flex items-stretch gap-0">

    <!-- Dropdown Baju Nikahan -->
    <div class="relative">
      <button id="dropdown-nikahan-button" data-dropdown-toggle="dropdown-nikahan"
        class="h-full inline-flex items-center px-4 text-sm font-medium text-gray-900 bg-white border border-gray-300 rounded-l-md hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100"
        type="button">
        Baju Nikahan
        <svg class="w-2.5 h-2.5 ml-2" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1l4 4 4-4" />
        </svg>
      </button>
      <div id="dropdown-nikahan"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 mt-1">
        <ul class="py-2 text-sm text-gray-700">
          <li><button type="button" class="w-full px-4 py-2 hover:bg-gray-100">Tradisional</button></li>
          <li><button type="button" class="w-full px-4 py-2 hover:bg-gray-100">Modern</button></li>
        </ul>
      </div>
    </div>

    <!-- Dropdown Baju Wisuda -->
    <div class="relative">
      <button id="dropdown-wisuda-button" data-dropdown-toggle="dropdown-wisuda"
        class="h-full inline-flex items-center px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-300 hover:bg-gray-100 focus:ring-2 focus:outline-none focus:ring-gray-100"
        type="button">
        Baju Wisuda
        <svg class="w-2.5 h-2.5 ml-2" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1l4 4 4-4" />
        </svg>
      </button>
      <div id="dropdown-wisuda"
        class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 mt-1">
        <ul class="py-2 text-sm text-gray-700">
          <li><button type="button" class="w-full px-4 py-2 hover:bg-gray-100">Baju Pria</button></li>
          <li><button type="button" class="w-full px-4 py-2 hover:bg-gray-100">Baju Wanita</button></li>
        </ul>
      </div>
    </div>

    <!-- Input dan Tombol Cari -->
    <div class="relative w-[300px]">
      <input type="search" id="search-dropdown"
        class="block h-full p-2.5 w-full text-sm text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
        placeholder="Telusuri lebih banyak lagi..." required />
      <button type="submit"
        class="absolute top-0 right-0 h-full px-4 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 rounded-r-md">
        Cari
      </button>
    </div>

  </div>
</form>
