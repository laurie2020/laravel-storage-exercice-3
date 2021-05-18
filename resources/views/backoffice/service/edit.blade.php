@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <section>
        <h1 class="text-center service-title">Edit Services</h1>
        <form class="w-75 mx-auto mb-5" action="/services/{{ $service->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            
            <div class="mb-3">
              <label for="nom" class="form-label service-label">Nom:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value={{ $service->icone }}>
            </div>

            <div class="mb-3">
                <label for="nom" class="form-label service-label">Titre:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="prenom"value={{ $service->titre }}>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label service-label">Description:</label>
                <input type="number" class="form-control" name="age" value={{ $service->description }}>
            </div>
         
            <button type="submit" class="btn w-100 service-btn">Submit</button>
        </form>
    </section>
@endsection