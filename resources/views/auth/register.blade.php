@extends('layouts.base')

@section('content')

    <h1>S'enregistrer</h1>

    <div class="card">
        <div class="formulaires-admin">
            <form
                action="{{ route('auth.registerPost') }}"
                method="post">
                @csrf

                <div class="form">
                    <label for="name">Nom</label>
                    <input
                        type="name"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                    >
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>

                <div class="form">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

                <div class="form">
                    <label for="password">Mot de passe</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        value="{{ old('password') }}"
                    >
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>

                <div class="form">
                    <label for="role">Rôle</label>
                    <select
                        name="role"
                        id="role"
                        value
                    >
                        <option value="">--Choisir un rôle--</option>
                        <option value="employee">Employé</option>
                        <option value="veterinarian">Vétérinaire</option>
                    </select>
                    @error('role')
                    {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn-primary-dark">S'enregistrer</button>

            </form>
        </div>
    </div>

@endsection
