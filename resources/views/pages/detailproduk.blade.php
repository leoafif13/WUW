@extends('layout.index')

@section('content')
    @include('components.herodetail')
    @include('components.search-result')

    <!-- Tambahkan sementara border untuk debug -->
    <section class="max-w-15xl mx-auto px-4 py-10">
            @include('components.detail-card')
    </section>

@endsection