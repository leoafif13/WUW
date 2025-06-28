<section id="hubungi" class="bg-gradient-to-r from-blue-900 to-black min-h-screen scroll-mt-24 px-4 sm:px-6 py-12 sm:py-16">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-10">
      <h2 class="text-2xl sm:text-4xl font-bold text-white">Hubungi Kami</h2>
      <p class="text-sm sm:text-lg text-gray-400 mt-1">Hubungi Kami Kapanpun Anda Mau</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- KIRI -->
      <div class="flex flex-col gap-6">
        <div class="flex flex-col md:flex-row gap-6">
          <!-- Kontak -->
          <div class="flex-1 bg-gray-100 rounded-xl shadow p-5 text-sm sm:text-base leading-relaxed">
            <h3 class="text-lg sm:text-xl font-semibold text-blue-900 mb-2">Kunjungi Lokasi Kami</h3>
            <p class="flex items-center"><i class="fa-solid fa-phone-volume p-2"></i><strong>Nomor Telepon:</strong></p>
            <p class="flex items-center ml-6 sm:ml-8">(0778) 456880</p>
            <p class="flex items-center mt-2"><i class="fa-solid fa-location-dot p-2"></i><strong>Alamat:</strong></p>
            <p class="flex items-center ml-6 sm:ml-8">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam</p>
            <p class="flex items-center mt-2"><i class="fa-solid fa-envelope p-2"></i><strong>Email:</strong></p>
            <p class="flex items-center ml-6 sm:ml-8">WearYouWant@gmail.com</p>
          </div>

          <!-- Jam -->
          <div class="flex-1 bg-gray-100 rounded-xl shadow p-5 text-sm sm:text-base">
            <h3 class="text-lg sm:text-xl font-semibold text-blue-900 mb-2">Jam Operasional</h3>
            <ul class="space-y-3">
              <li class="flex justify-between">
                <span>Senin - Jumat</span>
                <span class="text-blue-600 font-semibold">8.00 – 16.00</span>
              </li>
              <li class="flex justify-between">
                <span>Sabtu</span>
                <span class="text-blue-600 font-semibold">8.00 – 12.00</span>
              </li>
              <li class="flex justify-between">
                <span>Minggu</span>
                <span class="text-red-600 font-semibold">Tutup</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Map -->
        <div class="w-full h-[250px] sm:h-[300px] rounded-xl overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0577989797293!2d104.0458816734901!3d1.1187258622782366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1750322719876!5m2!1sid!2sid" 
            class="w-full h-full border-0"
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- KANAN: Form -->
      <div class="bg-gray-100 rounded-xl shadow p-6 sm:p-8 md:p-10 flex flex-col justify-center">
        <div class="text-center mb-6">
          <h3 class="text-lg sm:text-xl font-semibold text-blue-900">Ada Pertanyaan?</h3>
          <p class="text-sm text-gray-700 mt-1">Isi formulir dan kami akan segera menghubungi Anda.</p>
        </div>

        <form action="{{ route('kontak.store') }}" method="POST" class="flex flex-col space-y-4 text-sm sm:text-base">
          @csrf
          <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('nama') }}">
          @error('nama') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

          <input type="email" name="email" placeholder="Alamat Email" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('email') }}" autocomplete="email">
          @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

          <input type="text" name="subjek" placeholder="Subjek Pesan" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('subjek') }}">
          @error('subjek') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

          <textarea name="pesan" placeholder="Ketik Pesan Disini..." rows="4" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-900" required>{{ old('pesan') }}</textarea>
          @error('pesan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

          <button type="submit" class="w-full bg-blue-900 text-white font-semibold px-6 py-3 rounded-lg hover:bg-gray-900 transition">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>
