@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>État actuel des animaux</li>
        </ul>
    </div>
    <div class="animals-container">
        <h2 class="">État actuel des animaux</h2>
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
                    <th>Vétérinaire</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $animals as $animal )
                    <tr>
                        <td data-label="Name"
                            class="td-wrap">{{ $animal['name'] }}
                        </td>
                        <td data-label="Habitat"
                            class="td-wrap">{{ $animal['habitat']->name }}
                        </td>
                        <td data-label="Nourriture"
                            class="td-wrap">{{ $animal['lastFoodConsum']->food->name }}
                        </td>
                        <td data-label="Grammage"
                            class="td-wrap">{{ $animal['lastFoodConsum']->quantity }} {{ $animal['lastFoodConsum']->unit }}
                        </td>
                        <td data-label="Etat"
                            class="td-wrap">{{ $animal['lastVeterinarianReport']['animal_state'] }}
                        </td>
                        <td data-label="Date"
                            class="td-wrap">{{ $animal['lastVeterinarianReport']['created_at'] }}
                        </td>
                        <td data-label="Veterinarian"
                            class="td-wrap">{{ $animal['lastVeterinarianReport']['veterinarian_name'] }}
                        </td>
                        <td
                            data-label="Actions"
                            class="td-wrap"
                        >
                            @can('view', App\Models\FoodConsum::class)
                           <a href="{{ route('foods-consum.create') }}">Ajouter un repas</a>
                            @endcan
                            @can('view', App\Models\VeterinarianReport::class)
                            <a href="{{ route('veterinarian-reports.create') }}">Ajouter un rapport vétérinaire</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
