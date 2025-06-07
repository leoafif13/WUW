@extends('layouts.app')
@section('title', 'Home')
@section('content')
<body class="text-white font-sans">
  @include('components.navbar_auth')

  <!-- Hero Section -->
  <x-hero-auth :name="Auth::user()->name" />

  <!-- Tentang Kami -->
  <section id="tentang">
    @include('pages.about')
  </section>

  <!-- Layanan Kami -->
  <section id="layanan">
    @include('pages.layanan')
  </section>

  <!-- Hubungi Kami -->
  <section id="hubungi">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

  <!-- Notifikasi -->
  <x-alert-success />
</body>
@endsection
