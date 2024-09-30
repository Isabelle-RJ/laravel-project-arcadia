@extends('layouts.base')

@section('content')
    <h1>NOS HABITATS</h1>

    @foreach( $habitats as $habitat )
        <article class="card-article">
            <div class="card-image">
                <img
                    alt="Photo de daim au Japon"
                    class="card-img"
                    src="/storage/asset/images/{{ $habitat->image }}"
                >
                <div class="card-shadow"></div>
            </div>
            <div class="card-data">
                <h3 class="card-name">{{ $habitat->name }}</h3>
                <a
                    class="card-button"
                    href="{{ route('habitat', [$habitat->name]) }}"
                >
                    Voir plus
                </a>
            </div>
        </article>
    @endforeach

@endsection
