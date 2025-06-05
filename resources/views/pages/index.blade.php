@extends('layouts.app')
@section('title', 'Index')
@section('content')
  <!-- Navbar -->
  <x-navbar></x-navbar>

  <x-hero-section />

  <!-- Tentang Kami -->
  <section id="tentang">
    @include('pages.about')
  </section>

  <!-- Layanan Kami -->
  <section id="layanan">
    @include('pages.layanan')
  </section>

  <!-- Produk -->
  <section id="produk" class="pt-16 py-20 px-4 sm:px-6 lg:px-16 bg-gradient-to-r from-[#1e3a8a] to-[#000000] text-white">
    @include('pages.produk', ['barang' => $barang])
  </section>

  <!-- Hubungi Kami -->
  <section id="hubungi">
    @include('pages.hubungi')
  </section>

  <!-- Footer -->
  <x-footer></x-footer>

  <x-alert-success />

@endsection
