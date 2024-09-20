@extends('layouts.base')

@section('content')
    <h1>Liste des habitats</h1>

    <div class="add-habitat">
        <a href=""
           class="btn-primary">
            Ajouter un habitat
        </a>
    </div>

    <form
        action="{{ route ('habitats.edit', ["name" => $habitat->name]) }}"
        method="post"
    >
        @csrf
        @method('PATCH')

        <div class="form">
            <label for="name">Nom de l'habitat :</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
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
                value="{{ old('description') }}"
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
                value="{{ old('image') }}"
            >
            @error('image')
            {{ $message }}
            @enderror
        </div>
        <button type="submit">Créer</button>

        <form action="{{ route ('habitats.delete', ["name" => $habitat->name]) }}"
              method="post">
            @csrf
            @method('DELETE')
        <button type="submit">Supprimer</button>
        </form>
    </form>

@endsection
