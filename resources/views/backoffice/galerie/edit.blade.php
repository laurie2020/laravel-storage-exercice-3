@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="text-center galerie-title">Edit Galerie</h1>
        <form class="w-75 mx-auto mb-5" action="/galeries/{{ $galerie->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nom" class="form-label galerie-title user-label">Nom:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{ $galerie->nom }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label galerie-title user-label">Image:</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label galerie-title user-label">Description:</label>
                <textarea class="form-control" id="floatingTextarea" name="description">{{ $galerie->description }}</textarea>
            </div>
            <button type="submit" class="btn w-100 galerie-btn">Submit</button>
        </form>
    </section>
@endsection