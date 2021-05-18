@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="text-center car-title">Edit Caracteristique</h1>
        <ul class="w-75 mx-auto">
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        <form class="w-75 mx-auto mb-5" action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nom" class="form-label user-label car-title">Nom:</label>
              <input type="text" class="form-control" name="nom" value="{{ $caracteristique->nom }}">
            </div>
            <div class="mb-3">
                <label for="icone" class="form-label user-label car-title">Icone:</label>
                <select class="form-select fa" name="icone">
                    <option class="fa" selected value="fas fa-snowman">&#xf7d0;</option>
                    <option class="fa" value="fas fa-toilet-paper">&#xf71e;</option>
                    <option class="fa" value="fas fa-hat-wizard">&#xf6e8;</option>
                    <option class="fa" value="fas fa-hippo">&#xf6ed;</option>
                    <option class="fa" value="fas fa-glass-martini-alt">&#xf57b;</option>
                    <option class="fa" value="fas fa-poo">&#xf2fe;</option>
                    <option class="fa" value="fas fa-hat-cowboy-side">&#xf8c1;</option>
                    <option class="fa" value="fas fa-laptop-code">&#xf5fc;</option>
                    <option class="fa" value="fas fa-car-crash">&#xf5e1;</option>
                    <option class="fa" value="fas fa-undo">&#xf0e2;</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="chiffre" class="form-label user-label car-title">Chiffre:</label>
                <input type="number" min="0" max="1000" class="form-control" name="chiffre" value="{{ $caracteristique->chiffre }}">
            </div>
           
            <button type="submit" class="btn w-100 car-btn">Submit</button>
        </form>
    </section>
@endsection