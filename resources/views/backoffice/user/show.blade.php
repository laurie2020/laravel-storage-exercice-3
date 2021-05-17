@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="user-title text-center">{{ $user->nom }} {{ $user->prenom }}</h1>
        <h2 class="text-center user-title">{{ $user->age }} ans</h2>
        <h2 class="text-center user-title">{{ $user->email }}</h2>
        <h2 class="text-center user-title">{{ $user->password }}</h2>
        <img class="me-auto ms-auto d-block" src={{ asset('img/' . $user->photo) }} alt="" width="500">
    </section>
@endsection