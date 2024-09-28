@extends('layouts.base')
@section('header')
    <img
        alt="image de fond"
        class="bg__header"
        src="/storage/asset/images/{{ $habitat->image }}"
    >
    <div class="text-header">
        <h1>{{ $habitat->name }}</h1>
    </div>
@endsection
@section('content')
    <h1>{{ $habitat->name }}</h1>

    @forelse( $habitat->animals as $animal )
    <div class="card-animal">
        <div class="img-animal">
            <img
                src="/storage/asset/images/{{ $animal->image }}"
                alt="Photo d'un animal"
            >
        </div>
        <div class="name-animal">
            {{ $animal->name }}
        </div>
        <div class="description-animal">
            {{ $animal->description }}
        </div>
        <div class="btn-animal">
            <a href="">Fiche animal</a>
        </div>
    </div>
    @empty
        <p>Il y a aucun animal</p>
    @endforelse
@endsection
