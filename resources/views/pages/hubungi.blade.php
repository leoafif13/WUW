<section id="hubungi" class="bg-gradient-to-r from-blue-900 to-black min-h-screen scroll-mt-24">
  <div class="max-w-7xl mx-auto px-4 pt-16 pb-16">
    <div class="text-center mb-8">
      <h2 class="text-3xl sm:text-4xl font-bold text-white">Hubungi Kami</h2>
      <p class="text-base sm:text-lg text-gray-400">Hubungi Kami Kapanpun Anda Mau</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch py-10">
      <!-- KIRI -->
      <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-6">
          <!-- Jam Operasional -->
          <div class="flex-1 bg-gray-300 rounded-lg shadow p-4">
            <h3 class="text-lg font-semibold text-blue-900 mb-2">Jam Operasional</h3>
            <ul class="space-y-3 text-sm leading-relaxed">
  <li class="flex justify-between gap-6">
    <span class="min-w-[110px]">Senin - Jumat</span>
    <span class="text-blue-600 font-semibold">8.00 – 16.00</span>
  </li>
  <li class="flex justify-between gap-6">
    <span class="min-w-[110px]">Sabtu</span>
    <span class="text-blue-600 font-semibold">8.00 – 12.00</span>
  </li>
  <li class="flex justify-between gap-6">
    <span class="min-w-[110px]">Minggu</span>
    <span class="text-blue-600 font-semibold">Close</span>
  </li>
</ul>

          </div>

          <!-- Lokasi -->
          <div class="flex-1 bg-gray-300 rounded-lg shadow p-4 text-sm leading-relaxed">
            <h3 class="text-lg font-semibold text-blue-900 mb-2">Kunjungi Lokasi Kami</h3>
            <p class="flex items-center"><i class="fa-solid fa-phone-volume p-2"></i><strong>Nomor Telepon:</strong></p>
            <p class="flex items-center ml-7">(0778) 456880</p>
            <p class="flex items-center"><i class="fa-solid fa-location-dot p-2"></i><strong>Alamat:</strong></p>
            <p class="flex items-center ml-7">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
            <p class="flex items-center"><i class="fa-solid fa-envelope p-2"></i><strong>Email:</strong></p>
            <p class="flex items-center ml-8">WearYouWant@gmail.com</p>
          </div>
        </div>

        <!-- Google Map -->
        <div class="bg-gray-300 rounded-lg shadow p-2">
          <iframe class="w-full rounded-lg" height="220" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.052173474437!2d104.04564687499073!3d1.118895662724118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9892f2138b9f1%3A0x8dcab8a3c877bba0!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1713523456789" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!-- KANAN: Form -->
      <form action="{{ route('kontak.store') }}" method="POST" class="flex flex-col justify-center bg-gray-300 rounded-lg shadow p-8 md:p-10 lg:p-12 space-y-4 h-full">
        @csrf

        <!-- Nama -->
        <div>
          <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('nama') }}">
          @error('nama')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <input type="email" name="email" placeholder="Alamat Email" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('email') }}" autocomplete="email">
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Subjek -->
        <div>
          <input type="text" name="subjek" placeholder="Subjek Pesan" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('subjek') }}">
          @error('subjek')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Pesan -->
        <div>
          <textarea name="pesan" placeholder="Ketik Pesan Disini..." rows="4" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required>{{ old('pesan') }}</textarea>
          @error('pesan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" class="w-full bg-blue-900 text-white font-semibold px-6 py-2 rounded-lg hover:bg-gray-900 transition">Kirim</button>
      </form>

    </div>
  </div>
</section>
