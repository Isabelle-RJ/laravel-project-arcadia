@extends('layouts.admin')
@section('content')
    <div class="dashboard">
        <h2>Tableau de bord</h2>
    </div>
    <div class="fil-ariane">
        <ul>
            <li>Accueil ></li>
            <li>Gestion des avis</li>
        </ul>
    </div>
    <h2>Gestion des avis</h2>
    <div class="list-container">
        <table class="table-list">
            <thead class="table-primary">
            <tr>
                <th>Description</th>
                <th>Note</th>
                <th>Date</th>
                <th>Voir</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $reviews as $review )
            <tr>
                <td>{{ $review->content }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->created_at }}</td>
                <td><a href=""><img src="/asset/icons/icon-view.svg" alt="Icône d'un oeil pour voir l'avis"></a></td>
            </tr>
            @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('dashboard') }}" class="send" >Retour</a>

@endsection
