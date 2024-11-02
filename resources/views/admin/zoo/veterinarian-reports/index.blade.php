@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Liste des Compte-rendu Vétérinaire</li>
        </ul>
    </div>

    <div class="list-reports">

        <a href="{{ route('veterinarian-reports.create') }}">Créer un rapport</a>
    </div>
@endsection
