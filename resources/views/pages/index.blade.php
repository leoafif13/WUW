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
  <section id="produk">
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
