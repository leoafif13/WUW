@extends('layouts.app')
@section('title', 'Cart')
@section('content')
  <section class="relative bg-cover bg-center h-[550px]" style="background-image: url('img/Background 3.png');">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center px-4">
        <h1 class="text-4xl font-bold mb-4">Temukan Baju Impianmu</h1>
        <p class="max-w-xl text-lg mb-6">sekarang Anda dapat menghemat semua hal stress, waktu, dan biaya dengan berbagai pilihan baju untuk tikari besar anda</p>

        @include('components.filter-bar')
      </div>
  </section>

    <section class="bg-blue-900 text-white py-6">
        <div class="text-center">
            <h2 class="text-2xl font-bold">Detail Produk</h2>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
            @include('components.card-cart')
        @endfor

<script>
  // Fungsi pilihan aktif
    function setupOptionGroup(groupId) {
      const group = document.getElementById(groupId);
      const buttons = group.querySelectorAll(".option-btn");

      buttons.forEach(btn => {
        btn.addEventListener("click", () => {
          buttons.forEach(b => b.classList.remove("bg-blue-900", "text-white"));
          btn.classList.add("bg-blue-900", "text-white");
          console.log(`${groupId}: ${btn.dataset.value}`); // Simpan atau gunakan
        });
      });
    }

  // Panggil untuk size dan warna
  setupOptionGroup("size-options");
  setupOptionGroup("color-options");

  // Kontrol jumlah
  let quantity = 1;
  const qtyDisplay = document.getElementById("quantity");
  document.getElementById("increase").onclick = () => {
    quantity++;
    qtyDisplay.textContent = quantity;
  };
  document.getElementById("decrease").onclick = () => {
    if (quantity > 1) {
      quantity--;
      qtyDisplay.textContent = quantity;
    }
  };
</script>
    </section>

@endsection