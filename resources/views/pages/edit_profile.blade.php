<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Edit Profile</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>  
    body {
      font-family: "Poppins", sans-serif;
    }
  </style>
</head>
<body class="bg-cover bg-center min-h-screen flex flex-col" style="background-image: url('img/bg.png');">
  <!-- Header -->
  <header class="flex items-center px-4 py-3 text-white font-semibold text-sm bg-[#6a1b14]/90 backdrop-blur-sm">
    <button onclick="history.back()" aria-label="Back" class="mr-4 focus:outline-none">
      <i class="fas fa-arrow-left"></i>
    </button>
    <h1 class="flex-1 text-center font-bold text-sm">Edit Profile</h1>
    <div class="w-6"></div>
  </header>

  <!-- Content -->
  <div class="flex-grow flex flex-col items-center justify-center pt-10 px-4">
    <!-- Profile icon -->
    <div class="mb-6 flex flex-col items-center space-y-2 z-10">
      <img src="https://storage.googleapis.com/a1aa/image/020c0338-a101-499d-add9-f730ab1ce9da.jpg" alt="User profile icon" class="w-20 h-20 rounded-full border-4 border-white"/>
      <input type="file" aria-label="Upload profile picture" class="text-xs text-white" />
    </div>

    <!-- Form -->
    <form
      aria-label="Edit Profile Form"
      class="bg-white bg-opacity-90 rounded-md p-6 w-full max-w-2xl space-y-4 z-10"
    >
      <!-- Input fields -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="username" class="block text-[#6a1b14] font-bold text-xs mb-1">Nama Pengguna</label>
          <input id="username" type="text" placeholder="Masukkan Nama Pengguna" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
        <div>
          <label for="phone" class="block text-[#6a1b14] font-bold text-xs mb-1">Nomor Telepon</label>
          <input id="phone" type="tel" placeholder="Masukkan Nomor Telepon" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
        <div>
          <label for="email" class="block text-[#6a1b14] font-bold text-xs mb-1">Alamat Email</label>
          <input id="email" type="email" placeholder="Masukkan Alamat Email" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
        <div>
          <label for="address" class="block text-[#6a1b14] font-bold text-xs mb-1">Alamat Rumah</label>
          <input id="address" type="text" placeholder="Masukkan Alamat Rumah" class="w-full bg-gray-300 text-gray-600 text-xs rounded px-2 py-1" />
        </div>
      </div>

      <!-- Submit button -->
      <button type="submit" class="w-full bg-[#6a1b14] text-white font-bold text-xs py-2 rounded">
        Ubah Profile
      </button>
    </form>
  </div>
</body>
</html>
