@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="text-center portfolio-title">Edit Portfolio</h1>
        <<ul class="w-75 mx-auto">
            @foreach ($errors->all() as $message)
                <li class="alert alert-danger">{{ $message }}</li>
            @endforeach
        </ul>
        <form class="w-75 mx-auto mb-5" action="/portfolios/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
              <label for="nom" class="form-label portfolio-title user-label">Nom:</label>
              <input type="text" class="form-control" name="nom" value="{{ $portfolio->nom }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-labeluser-label portfolio-title">Image:</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label user-label portfolio-title">Categorie:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="categorie" value="{{ $portfolio->categorie }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label user-label portfolio-title">Description:</label>
                <textarea class="form-control" id="floatingTextarea" name="description">{{ $portfolio->description }}</textarea>
            </div>
            <button type="submit" class="btn w-100 portfolio-btn">Submit</button>
        </form>
    </section>
@endsection