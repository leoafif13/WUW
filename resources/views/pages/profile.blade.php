<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile Saya</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
  </style>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('img/bg.png');">
  <!-- Header -->
  <div class="bg-[#6B1212] flex items-center px-4 py-3">
    <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
      <i class="fas fa-arrow-left"></i>
    </button>
    <h1 class="text-white font-bold text-center flex-grow text-sm sm:text-base" style="font-family: 'Popppins', sans-serif;">
      Profile Saya
    </h1>
    <div style="width: 24px;"></div>
  </div>

  <!-- Main Content -->
  <main class="max-w-lg mx-auto mt-10 px-4">
    <!-- Profile Icon and Username -->
    <div class="flex flex-col items-center">
      <div class="w-20 h-20 rounded-full border-4 border-[#6B1212] bg-white flex items-center justify-center mb-2">
        <i class="fas fa-user text-[#6B1212] text-4xl"></i>
      </div>
      <h2 class="text-white font-bold text-lg sm:text-xl" style="font-family: 'Inter', sans-serif;">
        Username
      </h2>
    </div>

    <!-- Profile Details -->
    <div class="bg-white rounded-md p-4 mt-6 text-sm sm:text-base" style="font-family: 'Inter', sans-serif;">
      <p class="mb-2">
        <span class="font-bold text-[#6B1212]">Nama Pengguna:</span> Username
      </p>
      <p class="mb-2">
        <span class="font-bold text-[#6B1212]">Alamat Email:</span> username@gmail.com
      </p>
      <p class="mb-2">
        <span class="font-bold text-[#6B1212]">Nomor Telepon:</span> 0812-3456-7890
      </p>
      <p class="mb-4">
        <span class="font-bold text-[#6B1212]">Alamat Rumah:</span><br />
        Politeknik Negeri Batam. Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota. Kota Batam, Kepulauan Riau 29461
      </p>

      <!-- Edit Profile Button -->
      <a href="/edit_profile" class="w-full block text-center bg-[#6B1212] text-white py-2 rounded text-sm sm:text-base font-semibold">
        Edit Profile
      </a>
    </div>
  </main>

  <script>
    // JavaScript to handle the back button functionality
    document.getElementById('backButton').addEventListener('click', function() {
      window.history.back(); // This goes back to the previous page in history
    });
  </script>
</body>
</html>
