@extends('layout.app')

@section('content')

<x-section-title title="Syarat dan Panduan Menyewa" />

<div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($terms as $term)
        <x-card-item :step="$term['step']" :title="$term['title']" :icon="$term['icon']" />
    @endforeach
</div>

<x-section-title title="Panduan Menyewa" />

<div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-6xl mx-auto px-4">
    @foreach ($guides as $guide)
        <x-card-item :step="$guide['step']" :title="$guide['title']" :icon="$guide['icon']" />
    @endforeach
</div>

@endsection