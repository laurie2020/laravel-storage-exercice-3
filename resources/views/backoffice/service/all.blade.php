@extends('layouts.app')

@section('content')
@include('partials.nav')
<section>
    <h1 class="text-center service-title">Services</h1>
    <p class="text-center"><a href={{ route('services.create') }} class="btn btn-primary text-light">Create</a></p>
    <div class="d-flex flex-wrap container justify-content-between">
        @foreach ($services as $service)
        <div class="card border-warning mb-3" style="max-width: 18rem;">
            <i class="fab {{$service->icone}}"></i>
            <div class="card-body  fw-bold text-center">
                <h5 class="card-title fw-bold text-center"></h5>
                <h5 class="card-title"><a href="/services/{{ $service->id }}"
                        class="text-decoration-none"><b>{{$service->titre}}</b></a> </h5>

                <h5 class="card-title">{{$service->description}}</h5>

            </div>
            <a href="/services/{{ $service->id }}/download" class="btn btn-success" class="download"
                style="color:white">Download</a>
            <a href="/services/{{ $service->id }}/edit" class="btn btn-warning" class="edit"
                style="color:white;">Edit</a>
            <form action="/services/{{ $service->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger w-100" class="delete"
                    style="background-color: #e3342f; color:white;">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center bg-warning text-white">{{$services->links()}}</div>
    </div>
</section>
@endsection