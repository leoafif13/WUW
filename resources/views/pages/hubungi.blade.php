<section id="hubungi" class="bg-gradient-to-r from-blue-900 to-black min-h-screen scroll-mt-24">
  <div class="max-w-7xl mx-auto px-4 pt-16 pb-16">
    <div class="text-center mb-8">
      <h2 class="text-3xl md:text-4xl font-bold text-white">Hubungi Kami</h2>
      <p class="text-lg text-gray-500">Hubungi Kami Kapanpun Anda Mau</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 items-start p-16">
      <!-- Kontak dan Jam -->
      <div class="space-y-6 text-gray-800">
        <!-- Jam Operasional & Lokasi berdampingan -->
        <div class="flex flex-col md:flex-row gap-6">
          <div class="flex-1 bg-gray-300 rounded-lg shadow p-4">
            <h3 class="text-lg font-semibold text-blue-900 mb-2">Jam Operasional</h3>
            <ul class="text-sm">
              <li>Senin - Jumat : <strong class="text-blue-600">8.00 – 16.00</strong></li>
              <li>Sabtu : <strong class="text-blue-600">8.00 – 12.00</strong></li>
              <li>Minggu : <strong class="text-blue-600">Close</strong></li>
            </ul>
          </div>

          <div class="flex-1 text-white text-sm leading-relaxed p-4 rounded-lg">
            <h3 class="text-lg font-semibold mb-2">Kunjungi Lokasi Kami</h3>
            <p><i class="fa-solid fa-phone-volume p-2"></i><strong>Nomor Telepon:</strong> (0778) 456880</p>
            <p><i class="fa-solid fa-location-dot p-2"></i><strong>Alamat:</strong> Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
            <p><i class="fa-regular fa-envelope p-2"></i><strong>Email:</strong> WearYouWant@gmail.com</p>
          </div>
        </div>

        <!-- Iframe Google Maps tetap di bawah -->
        <iframe
          class="w-full rounded-lg shadow"
          height="220"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.052173474437!2d104.04564687499073!3d1.118895662724118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9892f2138b9f1%3A0x8dcab8a3c877bba0!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1713523456789"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Formulir Kontak -->
      <form action="{{ route('kontak.store') }}" method="POST" class="text-black p-6 bg-gray-300 rounded-lg shadow space-y-4">
        @csrf
        <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('nama') }}">
        @error('nama')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <input type="email" name="email" placeholder="Alamat Email" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('email') }}">
        @error('email')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <input type="text" name="subjek" placeholder="Subjek Pesan" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required value="{{ old('subjek') }}">
        @error('subjek')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <textarea name="pesan" placeholder="Ketik Pesan Disini..." rows="4" class="w-full bg-white border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-900" required>{{ old('pesan') }}</textarea>
        @error('pesan')
          <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror

        <button type="submit" class="w-full bg-blue-900 text-white font-semibold px-6 py-2 rounded-lg hover:bg-gray-900 transition">Kirim</button>
      </form>
    </div>
  </div>

  <!-- Pesan Sukses -->
  @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
      {{ session('success') }}
    </div>
  @endif
</section>
