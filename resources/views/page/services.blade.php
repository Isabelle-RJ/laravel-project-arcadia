@extends('layouts.base')
@section('header')
    <img alt="image de fond"
         class="bg__header"
         src="/asset/images/{{ $cover }}">
    <div class="text-header">
        <h1>Les Services proposés,
            pour mieux vous accueillir</h1>
    </div>
@endsection
@section('content')
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ restauration ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    @foreach( $services as $service )
        <section class="container-services">
            <div class="div-services">
                <div class="img-services">
                    <h2 class="title-services">{{ $service->name }}</h2>
                    <img alt="Photo {{ $service->name }}"
                         class="image-services"
                         src="/asset/images/{{ $service->image }}">
                </div>
                <div class="description-services">
                    <p class="p-services">
                        {{ $service->description }}
                    </p>
                </div>
            </div>
        </section>
    @endforeach

@endsection
