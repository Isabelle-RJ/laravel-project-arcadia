@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil</li>
        </ul>
    </div>

    <div class="dashboard-cards">
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des comptes</p>
                <span>Comptes</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des services</p>
                <span>Services</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des horaires</p>
                <span>Horaires</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des habitats</p>
                <span>Habitats</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des animaux</p>
                <span>Animaux</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des compte-rendus</p>
                <span>Compte-rendu</span>
            </div>
        </a>
        <a href="">
            <div class="cards-list">
                <img
                    class="icon-dashboard"
                    src="/asset/icons/"
                    alt="Icône du tableau de bord"
                >
                <p>Gestion des vues animaux</p>
                <span>Vues animaux</span>
            </div>
        </a>
        @can('view', App\Models\Review::class)
            <a href="{{ route('reviews.list') }}">
                <div class="cards-list">
                    <img
                        class="icon-dashboard"
                        src="/asset/icons/fill-star.svg"
                        alt="Icône du tableau de bord"
                    >
                    <p>Gestion des avis</p>
                    <span>Avis</span>
                </div>
            </a>
        @endcan
    </div>
@endsection
