@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="text-center galerie-title">Galerie</h1>
        <p class="text-center"><a href={{ route('galeries.create') }} class="btn btn-primary text-light">Create</a></p>
        <div class="d-flex flex-wrap container justify-content-between">

            @foreach ($galeries as $galerie)
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src={{ asset('img/' . $galerie->image) }} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="/galeries/{{ $galerie->id }}" class="text-decoration-none"><b>{{ $galerie->nom }}</b></a>  </h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Id:</b>  {{ $galerie->id }}</li>
                  <li class="list-group-item"><b>Description:</b>  {{ $galerie->description }}</li>
                </ul>
                <div class="card-body d-flex flex-column" >
                  <a href="/galeries/{{ $galerie->id }}/download" class="btn btn-success" class="download" style="color:white">Download</a>
                  <a href="/galeries/{{ $galerie->id }}/edit" class="btn btn-warning" class="edit" style="color:white;">Edit</a>
                  <form action="/galeries/{{ $galerie->id }}" method="POST">
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-danger w-100" class="delete" style="background-color: #e3342f; color:white;">Delete</button>
                  </form>
                  
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection