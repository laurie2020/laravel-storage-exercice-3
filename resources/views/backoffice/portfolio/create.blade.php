@extends('layouts.app')

@section('content')
@include('partials.nav')
<section>
    <h1 class="text-center portfolio-title">Create Portfolio</h1>
    <form class="w-75 mx-auto mb-5" action={{ route('portfolios.store') }} method="POST" enctype="multipart/form-data">
        <ul>
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label user-label portfolio-title">Nom:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label user-label portfolio-title">Image:</label>
            <input type="file" min="0" max="1000" class="form-control" name="image">
        </div>
        <div class="mb-3">
            <label for="categorie" class="form-label user-label portfolio-title">Categorie:</label>
            <input type="text" min="0" max="1000" class="form-control" name="categorie">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label user-label portfolio-title">Description:</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn w-100 portfolio-btn">Submit</button>
    </form>
</section>
@endsection