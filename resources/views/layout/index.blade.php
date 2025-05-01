<!DOCTYPE html>
<html lang="id">
<html lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>Produk</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    html {
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
 </head>
<body class="bg-gray-100 font-sans leading-relaxed">
<div class="bg-blue-900 flex items-center px-4 py-3">
    <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
      <i class="fas fa-arrow-left"></i>
    </button>
    <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base">
      Produk
    </h1>
    <div style="width: 24px;"></div>
  </div>
    <main class="py-0">
        @yield('content')
    </main>

    <script>
    // JavaScript to handle the back button functionality
    document.getElementById('backButton').addEventListener('click', function() {
      window.history.back(); // This goes back to the previous page in history
    });
    </script>
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

</body>
</html>
