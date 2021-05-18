@extends('layouts.app')

@section('content')
@include('partials.nav')
<section>
  <h1 class="text-center user-title">Users</h1>
  <p class="text-center"><a href={{ route('users.create') }} class="btn btn-primary text-light">Create</a></p>
  @if (session("message"))
  <div class="alert alert-success text-center mx-5 mt-3">{{ session("message") }}</div>
  @endif
  <div class="d-flex flex-wrap container justify-content-between">
    @foreach ($users as $user)
    <div class="card m-3" style="width: 18rem;">
      <img class="card-img-top" src={{ asset('img/' . $user->photo) }} alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><a href="/users/{{ $user->id }}" class="text-decoration-none"><b>{{ $user->nom }}
              {{ $user->prenom }}</b></a> </h5>
        <p class="card-text">{{ $user->age }} ans</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Id:</b> {{ $user->id }}</li>
        <li class="list-group-item"><b>Email:</b> {{ $user->email }}</li>
        <li class="list-group-item"><b>Password:</b> {{ $user->password }}</li>
        <li class="list-group-item"><b>Created at:</b> {{ $user->created_at }}</li>
        <li class="list-group-item"><b>Updated at:</b> {{ $user->updated_at }}</li>
      </ul>
      <div class="card-body d-flex flex-column">
        <a href="/users/{{ $user->id }}/download" class="btn btn-success" class="download"
          style="color:white">Download</a>
        <a href="/users/{{ $user->id }}/edit" class="btn btn-warning" class="edit" style="color:white;">Edit</a>
        <form action="/users/{{ $user->id }}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger w-100" class="delete"
            style="background-color: #e3342f; color:white;">Delete</button>
        </form>

            @foreach ($users as $user)
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src={{ asset('img/' . $user->photo) }} alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><a href="/users/{{ $user->id }}" class="text-decoration-none"><b>{{ $user->nom }} {{ $user->prenom }}</b></a>  </h5>
                  <p class="card-text">{{ $user->age }} ans</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Id:</b>  {{ $user->id }}</li>
                  <li class="list-group-item"><b>Email:</b>  {{ $user->email }}</li>
                  <li class="list-group-item"><b>Password:</b>  {{ $user->password }}</li>
                  <li class="list-group-item"><b>Created at:</b> {{ $user->created_at }}</li>
                  <li class="list-group-item"><b>Updated at:</b> {{ $user->updated_at }}</li>
                </ul>
                <div class="card-body d-flex flex-column" >
                  <a href="/users/{{ $user->id }}/download" class="btn btn-success" class="download" style="color:white">Download</a>
                  <a href="/users/{{ $user->id }}/edit" class="btn btn-warning" class="edit" style="color:white;">Edit</a>
                  <form action="/users/{{ $user->id }}" method="POST">
                    @csrf
                    @method('delete')
                      <button type="submit" class="btn btn-danger w-100" class="delete" style="background-color: #e3342f; color:white;">Delete</button>
                  </form>
                  
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justtify-content-center">{{$users->links()}}</div>
    </section>
@endsection