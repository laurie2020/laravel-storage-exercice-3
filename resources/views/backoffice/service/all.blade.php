@extends('layouts.app')

@section('content')
<section class="d-flex">

  @include('partials.nav2')
  <section>
    <h1 class="text-center service-title">Caracteristiques</h1>
    <p class="text-center"><a href={{ route('services.create') }} class="btn btn-primary text-light">Create</a>
    </p>
    @if (session("message"))
    <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
    @endif
    <div class="d-flex flex-wrap container justify-content-between">
      @foreach ($services as $service)
      <div class="card m-3" style="width: 18rem;">
        <div>
          <i class="{{ $service->icone }} me-auto ms-auto d-block mt-3"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title text-decoration-none"><a href="/service/{{ $service->id }}"><b>{{ $service->titre }}</b></a></h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><b>Id:</b> {{ $service->id }}</li>
          <li class="list-group-item"><b>Description:</b> {{ $service->description }}</li>
        </ul>
        <div class="card-body d-flex flex-column">
          <a href="/services/{{ $service->id }}/download" class="btn btn-success disabled download"
            style="color:white">Download</a>
          <a href="/services/{{ $service->id }}/edit" class="btn btn-warning edit"
            style="color:white;">Edit</a>
          <form action="/services/{{ $service->id }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger w-100 delete" style="background-color: #e3342f; color:white;">Delete</button>
          </form>
  
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center">{{$services->links()}}</div>
  </section>
</section>
@endsection