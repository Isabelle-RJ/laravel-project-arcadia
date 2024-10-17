@extends('layouts.admin')
@section('content')
    <div class="header-dash">
        <div class="dashboard">
            <h2>Tableau de bord</h2>
        </div>
        <div class="fil-ariane">
            <ul>
                <li>Accueil</li>
                <li>Liste des Habitats</li>
            </ul>
        </div>
    </div>
    <h1>Liste des habitats</h1>
    <a href="{{ route('dashboard') }}"
       class="btn-send"
    >
        Retour au tableau de bord
    </a>
@endsection
