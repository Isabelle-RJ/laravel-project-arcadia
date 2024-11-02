@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Compte-rendu Vétérinaire</li>
        </ul>
    </div>

    <div class="container veto-report">
        <form
            action=""
            method="post"
            enctype="multipart/form-data"
        >
            @csrf

            <h2>Ajouter un rapport</h2>
            <div class="add-report">

                <div class="form-select">
                    <label for="animal-name">Nom de l'animal :</label>
                    <select name="animal_id"
                            id="animal-name"
                    >
                        <option disabled
                                selected>Choisissez le nom de l'animal
                        </option>
                        @forelse( $animals as $animal )
                            <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                        @empty
                            <option value=""
                                    disabled>Aucun animal trouvé
                            </option>
                        @endforelse
                    </select>
                </div>
                <div class="form-select">
                    <label for="animal_state">État de l'animal :</label>
                    <select name="animal_state"
                            id="animal_state">
                        <option value="En bonne santé">En bonne santé</option>
                        <option value="À surveiller">À surveiller</option>
                        <option value="Signe de vieillesse">Signe de vieillesse</option>
                    </select>
                </div>
                <div class="form-select">
                    <label for="food_consum_id">Nourriture proposée par l'employé :</label>
                    @foreach( $foods_consum as $food_consum )
                        <p>{{ $food_consum->food->name }}</p>
                    @endforeach
                </div>

            </div>
            <div class="div-create">
                <button type="submit"
                        class="btn-create"
                >
                    Ajouter
                </button>
            </div>
        </form>
    </div>
@endsection
