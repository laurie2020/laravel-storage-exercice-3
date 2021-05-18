@extends('layouts.app')

@section('content')
@include('partials.nav')
<section>
    <h1 class="galerie-title text-center">{{ $galerie->nom }}</h1>
    <h2 class="text-center galerie-title">{{ $galerie->description }}</h2>
    <img class="me-auto ms-auto d-block" src={{ asset('img/' . $galerie->image) }} alt="" width="500">
</section>
@endsection