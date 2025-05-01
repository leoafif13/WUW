@extends('layout.index')

@section('content')
    @include('components.hero')
    @include('components.search-result')

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