@extends('layout.index')

@section('content')
    @include('components.hero')
    @include('components.search-result')

    <section class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
            @include('components.product-card')
        @endfor
    </section>
@endsection