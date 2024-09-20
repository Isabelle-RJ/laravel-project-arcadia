@extends('layouts.base')
@section('content')
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
            <button type="submit">Créer</button>
        </div>
    </form>
@endsection
