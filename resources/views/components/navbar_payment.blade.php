@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
<header class="bg-blue-900 text-white px-4 py-3 flex justify-between items-center">
    <button id="backButton" aria-label="Back" class="text-white text-lg mr-4">
      <i class="fas fa-chevron-left"></i>
  </button>
    <h1 class="text-lg font-semibold">Checkout</h1>
    <div class="space-x-2">
    <a href="/sewa" aria-label="Catatan" class="hover:text-blue-900 transition duration-200">
        <span class="material-symbols-outlined">sticky_note_2</span>
      </a>
    </div>
  </header>