@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Liste des animaux</li>
        </ul>
    </div>
    <div class="animals-container">
        <h2 class="">Liste des animaux</h2>
        <div class="list-container">
            <table class="table-list">
                <thead class="table-primary">
                <tr>
                    <th>Nom de l'animal</th>
                    <th>Habitat de l'animal</th>
                    <th>Nourriture proposée</th>
                    <th>Grammage de la nourriture</th>
                    <th>État de l'animal</th>
                    <th>Date du compte-rendu</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $animals as $animal )
                    <tr>
                        <td data-label="Name"
                            class="td-wrap">{{ $animal->name }}
                        </td>
                        <td data-label="Habitat"
                            class="td-wrap">{{ $animal->habitat->name }}
                        </td>
                        <td data-label="Nourriture"
                            class="td-wrap">Nourriture
                        </td>
                        <td data-label="Grammage"
                            class="td-wrap">Grammage
                        </td>
                        <td data-label="Etat"
                            class="td-wrap">Etat
                        </td>
                        <td data-label="Date"
                            class="td-wrap">Date
                        </td>
                        <td data-label="Actions"
                            class="td-wrap">Actions
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
