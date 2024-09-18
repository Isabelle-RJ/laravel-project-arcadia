@extends('layouts.base')

@section('content')

    <h1>Connexion</h1>

    <div class="card">
        <div class="card-body">
            <form
                action="{{ route('auth.authenticate') }}"
                method="post">
                @csrf

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
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn-primary-dark">Se connecter</button>

            </form>
        </div>
    </div>

@endsection
