@extends('layouts.base')

@section('content')
    <h1>{{ $habitat->name }}</h1>

     <!-- TODO: Faire une boucle lorsque les animaux seront créer !! -->

    <div class="card-animal">
        <div class="img-animal">
            <img src="asset/images/cat-jp.jpg"
                 alt="Photo d'un animal">
        </div>
        <div class="name-animal">
            Vivi
        </div>
        <div class="description-animal">
            Petite description de Vivi
        </div>
        <div class="btn-animal">
            <a href="">Fiche animal</a>
        </div>
    </div>
    <div class="card-animal">
        <div class="img-animal">
            <img src="asset/images/rabbit-young.jpg"
                 alt="Photo d'un animal">
        </div>
        <div class="name-animal">
            Nihon
        </div>
        <div class="description-animal">
            Petite description de Nihon
        </div>
        <div class="btn-animal">
            <a href="">Fiche animal</a>
        </div>
    </div>

@endsection
