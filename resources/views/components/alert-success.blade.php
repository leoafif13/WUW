@if(session('success'))
    <script>
      window.onload = function() {
        const message = @json(session('success'));
        const toast = document.createElement('div');
        toast.textContent = message;
        toast.className = "fixed bottom-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in";
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 4000);
      };
    </script>
    <style>
      @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
      }
      .animate-fade-in {
        animation: fade-in 0.5s ease-out;
      }
    </style>
@endif