@extends('layouts.admin')
@section('content')
    <div class="header-dash">
        <div class="dashboard">
            <h2>Tableau de bord</h2>
        </div>
        <div class="fil-ariane">
            <ul>
                <li>Accueil  ></li>
                <li>Gestion des avis</li>
            </ul>
        </div>
    </div>
    <h2 class="review-title">Gestion des avis</h2>
    <div class="list-container">
        <table class="table-list">
            <thead class="table-primary">
            <tr>
                <th>Auteur</th>
                <th>Description</th>
                <th>Note</th>
                <th>Date</th>
                <th>Voir</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $reviews as $review )
            <tr>
                <td data-label="Auteur">{{ $review->author }}</td>
                <td data-label="Description">{{ $review->content }}</td>
                <td data-label="Note">{{ $review->rating }}</td>
                <td data-label="Date">{{ $review->created_at }}</td>
                <td data-label="Voir"><a href=""><img src="/asset/icons/icon-view.svg" alt="Icône d'un oeil pour voir l'avis"></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('dashboard') }}" class="send" >Retour</a>
@endsection
