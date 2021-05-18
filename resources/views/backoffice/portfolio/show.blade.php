@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section>
        <h1 class="portfolio-title text-center">{{ $portfolio->nom }}</h1>
        <h2 class="text-center portfolio-title">{{ $portfolio->description }}</h2>
        <h2 class="text-center portfolio-title">{{ $portfolio->categorie }}</h2>
        <img class="me-auto ms-auto d-block" src={{ asset('img/' . $portfolio->image) }} alt="" width="500">
    </section>
</section>
@endsection