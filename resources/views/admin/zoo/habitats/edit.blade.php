@extends('layouts.base')

@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div>
        <ul>
            <li>Accueil ></li>
            <li>Éditer un habitat</li>
        </ul>
    </div>
    <h1>Liste des habitats</h1>

    <div class="add-habitat">
        <a href="{{ route('habitats.create') }}"
           class="btn-primary">
            Retour créer un habitat
        </a>
    </div>

    <div class="formulaires-admin">
        <form
            action="{{ route ('habitats.update', ["name" => $habitat->name]) }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PATCH')

            <div class="form">
                <label for="name">Nom de l'habitat :</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $habitat->name }}"
                >
                @error('name')
                {{ $message }}
                @enderror
            </div>

            <div class="form">
                <label for="description">Description :</label>
                <input
                    type="text"
                    name="description"
                    id="description"
                    value="{{ $habitat->description }}"
                >
                @error('description')
                {{ $message }}
                @enderror
            </div>

            <div class="form">
                <label for="image">Image de l'habitat :</label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    value="{{ $habitat->image }}"
                >
                @error('image')
                {{ $message }}
                @enderror
            </div>
            <button type="submit"
                    class="btn-primary">Modifier
            </button>
        </form>
        <form action="{{ route ('habitats.delete', ["name" => $habitat->name]) }}"
              method="post">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="btn-danger">Supprimer
            </button>
        </form>

    </div>

@endsection
