@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Créer un Zoo</li>
        </ul>
    </div>
    <form method="POST"
          action="{{ route('create-zoo') }}">
        @csrf

        <div>
            <label for="name">Nom du Zoo</label>
            <input
                type="text"
                name="name"
            >
            @error('name')
            {{ $message }}
            @enderror
        </div>

        <div>
            <label for="description">Décrivez votre zoo :</label>
            <input
                type="text"
                name="description"
            >
            @error('description')
            {{ $message }}
            @enderror
        </div>

        <div>
            <button type="submit" class="btn-create">Créer</button>
        </div>
    </form>
@endsection

