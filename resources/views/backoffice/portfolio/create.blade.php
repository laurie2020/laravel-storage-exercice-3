@extends('layouts.app')

@section('content')
@include('partials.nav')
<ul>
    @foreach ($errors->all() as $message)
    <li class="alert alert-danger">{{$message}}</li>
    @endforeach
</ul>
<section>
    <h1 class="text-center portfolio-title">Create Portfolio</h1>
    <form class="w-75 mx-auto mb-5" action={{ route('portfolios.store') }} method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label galerie-title user-label portfolio-title">Nom:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label galerie-title user-label portfolio-title">Image:</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="image">
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label galerie-title user-label portfolio-title">Categorie:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label galerie-title user-label portfolio-title">Description:</label>
            <textarea class="form-control" id="floatingTextarea" name="description"></textarea>
        </div>
        <button type="submit" class="btn w-100 portfolio-btn">Submit</button>
    </form>
</section>
@endsection