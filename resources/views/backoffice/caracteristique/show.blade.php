@extends('layouts.app')

@section('content')
@include('partials.nav')
<section class="text-center mx-5 px-5">
    <h1 class="service-title text-center mt-3"><i class="fab {{ $caracteristique->icone }}"></i></h1>
    <h2 class="text-center text-dark mt-3">{{ $caracteristique->nom }}</h2>
    <h2 class="text-center text-dark mt-3">{{ $caracteristique->chiffre }} </h2>
</section>
@endsection