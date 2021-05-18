@extends('layouts.app')

@section('content')
<section class="d-flex">

    @include('partials.nav2')
    <section class="text-center mx-5 px-5">
        <h1 class="service-title text-center mt-3"><i class="fab {{ $service->icone }}"></i></h1>
        <h2 class="text-center text-dark mt-3">{{ $service->titre }} </h2>
        <h2 class="text-center text-dark mt-3">{{ $service->description }}</h2>
    </section>
</section>
@endsection