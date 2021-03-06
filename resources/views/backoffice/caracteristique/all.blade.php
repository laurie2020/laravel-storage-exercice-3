@extends('layouts.app')

@section('content')
<section class="d-flex">

  @include('partials.nav2')
  <section>
    <h1 class="text-center car-title">Caracteristiques</h1>
    <p class="text-center"><a href={{ route('caracteristiques.create') }} class="btn btn-primary text-light">Create</a>
    </p>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
    <div class="d-flex flex-wrap container justify-content-between">
      @foreach ($caracteristiques as $caracteristique)
      <div class="card m-3" style="width: 18rem;">
        <div>
          <i class="{{ $caracteristique->icone }} me-auto ms-auto d-block mt-3"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title"><a href="/caracteristique/{{ $caracteristique->id }}"
              class="text-decoration-none"><b>{{ $caracteristique->nom }} {{ $caracteristique->prenom }}</b></a></h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Id:</b> {{ $caracteristique->id }}</li>
          <li class="list-group-item"><b>Chiffre:</b> {{ $caracteristique->chiffre }}</li>
        </ul>
        <div class="card-body d-flex flex-column">
          <a href="/caracteristiques/{{ $caracteristique->id }}/download" class="btn btn-success disabled download"
            style="color:white">Download</a>
          <a href="/caracteristiques/{{ $caracteristique->id }}/edit" class="btn btn-warning edit"
            style="color:white;">Edit</a>
          <form action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger w-100 delete" style="background-color: #e3342f; color:white;">Delete</button>
          </form>
  
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center">{{$caracteristiques->links()}}</div>
  </section>
</section>
@endsection