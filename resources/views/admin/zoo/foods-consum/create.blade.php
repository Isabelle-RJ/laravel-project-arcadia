@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Ajouter une consommation alimentaire</li>
        </ul>
    </div>

    <div class="formulaires-admin">
        <h1>Consommation alimentaire pour l'animal</h1>

        <form
            action=""
            method="post" enctype="multipart/form-data"
        >
            @csrf

            <div class="form">
                <label for="animal_id">Sélectionnez l'animal :</label>
                <select
                    name="animal_id"
                    id="animal_id"
                >
                    <option disabled selected>Choisissez un animal</option>
                    @forelse($animals as $animal)
                    <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                    @empty
                    <option value="" disabled>Aucun animal trouvé</option>
                    @endforelse
                </select>
            </div>

            <div class="form">
                <label for="food_id">Sélectionnez une alimentation :</label>
                <select
                    name="food_id"
                    id="food_id"
                >
                    <option disabled selected>Choisissez une alimentation</option>
                    @forelse($foods as $food)
                        <option value="{{ $food->id }}">{{ $food->name }}</option>
                    @empty
                        <option value="" disabled>Aucune alimentation trouvée</option>
                    @endforelse
                </select>
            </div>

            <div class="form">
                <label for="foodsConsum_id">Quantité</label>
                <select
                    name="foodsConsum_id"
                    id="foodsConsum_id"
                >
                    <option disabled selected>Choisissez une quantité</option>
                    @forelse($foodsConsum as $foodConsum)
                        <option value="{{ $foodConsum->id }}">{{ $foodConsum->quantity }}</option>
                    @empty
                        <option value="" disabled>Aucune alimentation trouvée</option>
                    @endforelse
                </select>
            </div>
            
            <div class="form">
                <label for="unit"></label>
            </div>
            
            <button type="submit" class="btn-create">Créer</button>
        </form>
    </div>

@endsection
