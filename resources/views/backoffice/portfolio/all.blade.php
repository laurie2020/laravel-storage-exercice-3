@extends('layouts.app')

@section('content')
<section class="d-flex">

  @include('partials.nav2')
  <section>
    <h1 class="text-center portfolio-title">Portfolios</h1>
    <p class="text-center"><a href={{ route('portfolios.create') }} class="btn btn-primary text-light">Create</a></p>
    <div class="d-flex flex-wrap container justify-content-between">
  
      @foreach ($portfolios as $portfolio)
      <div class="card m-3" style="width: 18rem;">
        <img class="card-img-top" src={{ asset('img/' . $portfolio->image) }} alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><a href="/portfolios/{{ $portfolio->id }}"
              class="text-decoration-none"><b>{{ $portfolio->nom }}</b></a> </h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Id:</b> {{ $portfolio->id }}</li>
          <li class="list-group-item"><b>Categorie:</b> {{ $portfolio->categorie }}</li>
          <li class="list-group-item"><b>Description:</b> {{ $portfolio->description }}</li>
        </ul>
        <div class="card-body d-flex flex-column">
          <a href="/portfolios/{{ $portfolio->id }}/download" class="btn btn-success download"
            style="color:white">Download</a>
          <a href="/portfolios/{{ $portfolio->id }}/edit" class="btn btn-warning edit" style="color:white;">Edit</a>
          <form action="/portfolios/{{ $portfolio->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger w-100 delete"
              style="background-color: #e3342f; color:white;">Delete</button>
          </form>
  
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justtify-content-center">{{ $portfolios->links() }}</div>
  </section>
</section>
@endsection