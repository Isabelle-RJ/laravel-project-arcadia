@extends('layouts.base')

@section('content')
    <h1>NOS HABITATS</h1>

    @foreach( $habitats as $habitat )
        <article class="card__article">
            <div class="card__image">
                <img
                    alt="Photo de daim au Japon"
                    class="card__img"
                    src="/storage/asset/images/{{ $habitat->image }}"
                >
                <div class="card__shadow"></div>
            </div>
            <div class="card__data">
                <h3 class="card__name">{{ $habitat->name }}</h3>
                <a
                    class="card__button"
                    href="{{ route('habitat', [$habitat->name]) }}"
                >
                    Voir plus
                </a>
            </div>
        </article>
    @endforeach

@endsection
