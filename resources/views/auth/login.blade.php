@extends('layouts.admin')

@section('content')

    <div class="form-connect">
        <h1>Connexion</h1>
        <div class="formulaires-admin">
            <form
                action="{{ route('auth.authenticate') }}"
                method="post">
                @csrf

                <div class="form">
                    <label for="email">Email</label>
                    <input
                        placeholder="Email"
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
                        placeholder="Password"
                        type="password"
                        name="password"
                        id="password"
                        value="{{ old('password') }}"
                    >
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form">
                    <button type="submit" class="btn-primary-dark">Se connecter</button>
                </div>

            </form>
        </div>
    </div>

@endsection
