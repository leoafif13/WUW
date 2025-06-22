@props(['src'])

<div class="flex flex-col items-center space-y-2 z-10 mt-10"> 
  <img id="preview" 
       src="{{ $src }}" 
       alt="User profile icon"
       class="w-24 h-24 rounded-full border-4 border-blue-900 object-cover shadow-md" />
  
  <!-- Tombol Upload -->
  <label for="foto" class="inline-block bg-blue-900 hover:bg-blue-500 text-white text-xs px-4 py-2 rounded-lg cursor-pointer shadow">
    Upload Foto
  </label>
</div>
