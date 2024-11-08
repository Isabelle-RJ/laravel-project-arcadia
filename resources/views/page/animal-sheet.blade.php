@extends('layouts.base')
@section('header')
    <img
        alt="image de fond"
        class="bg-header"
        src="/storage/asset/images/renard-hokkaido-japon.jpg"
    >
    <div class="text-header">
        <h1>Fiche animal {{ $animal->name }}</h1>
    </div>
@endsection
@section('content')
    <section class="container">
        <h2 class="title-sheet">Fiche de l'animal {{ $animal->name }}</h2>
        <h3></h3>
    </section>

@endsection
