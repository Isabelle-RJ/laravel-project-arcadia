@extends('layouts.admin')

@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Modifier un horaire</li>
        </ul>
    </div>
    <h1>Horaires</h1>

    <div class="formulaires-admin">
        <form
            action="{{ route ('openings.update', ["day_open" => $opening->day_open]) }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')

            <div class="form">
                <label for="day_open">Jour d'ouverture :</label>
                <input
                    type="text"
                    name="day_open"
                    id="day_open"
                    value="{{ $opening->day_open }}"
                >
                @error('day_open')
                {{ $message }}
                @enderror
            </div>

            <div class="form">
                <label for="hour_open">Heure d'ouverture :</label>
                <input type="text"
                       name="hour_open"
                       id="hour_open"
                       value=""
                >
                @error('hour_open')
                {{ $message }}
                @enderror
            </div>

            <div class="form">
                <label for="hour_close">Heure de fermeture :</label>
                <input type="text"
                       name="hour_close"
                       id="hour_close"
                >
                @error('hour_close')
                {{ $message }}
                @enderror
            </div>

            <button type="submit"
                    class="btn-primary"
            >
                Modifier
            </button>
        </form>
        <form action="{{ route ('openings.delete', ["day_open" => $opening->day_open]) }}"
              method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="btn-danger"
            >
                Supprimer
            </button>
        </form>

    </div>

@endsection
