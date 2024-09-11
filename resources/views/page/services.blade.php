@extends('layouts.base')

@section('header')
    <img alt="image de fond"
         class="bg__header"
         src="/asset/images/services/zoo-visite-asie.jpg">
    <div class="text-header">
        <h1>Les Services proposés,
            pour mieux vous accueillir</h1>
    </div>
@endsection

@section('content')
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ restauration ~~~~~~~~~~~~~~~~~~~~~~~~ -->
<section id="restauration" class="container__restauration">
    <div class="div__restauration">
        <div class="restaurant__img">
            <h2 class="title__restauration">Restauration</h2>
            <img alt="Photo d'un restaurant vue extérieur"
                 class="image__restauration"
                 src="/asset/images/services/restaurant-exterior.jpg">
        </div>

        <div class="restauration__description">
            <h3>Croc'zoo d'Arcadia</h3>
            <p class="restauration__p">
                Situé au cœur du zoo, offrant une pause gourmande idéale
                pour
                toute la famille. Avec un menu varié allant des sandwichs
                savoureux
                aux salades fraîches, il y en a pour tous les goûts. Les
                enfants
                adoreront les menus thématiques inspirés des animaux du
                parc,
                tandis que les adultes pourront se détendre sur la terrasse
                ombragée.
                Le Croc'zoo est l'endroit parfait pour recharger les
                batteries avant de
                poursuivre la découverte des merveilles du zoo.
            </p>
        </div>
    </div>
</section>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ VISITE GUIDEE ~~~~~~~~~~~~~~~~~~~~~~~~ -->
<section class="container__visit">
    <div class="div__visit">
        <div class="visit__img">
            <h2 class="title__visit">Visite guidée</h2>
            <img alt="Photo pour la visite guidée"
                 class="image__visit"
                 src="/asset/images/services/visite-guidee.avif">
        </div>

        <div class="visit__description">
            <h3>Suivez le guide !</h3>
            <p class="visit__p">
                Découvrez les merveilles du zoo d'Arcadia lors d'une visite
                guidée enrichissante qui vous plonge au cœur du monde
                animal. Accompagné d'un guide expert, explorez les habitats
                naturels recréés et apprenez des anecdotes fascinantes sur
                chaque espèce. Les enfants comme les adultes seront
                émerveillés par la diversité des animaux et les histoires
                captivantes qui les entourent. Cette aventure éducative et
                divertissante vous offre une expérience unique, enrichissant
                votre visite d'une compréhension plus profonde de la faune
                et de la flore. Ne manquez pas cette occasion de voir de
                près des créatures rares et exotiques tout en profitant d'un
                moment inoubliable en famille ou entre amis.
            </p>
        </div>
    </div>
</section>

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~ VISITE PETIT TRAIN ~~~~~~~~~~~~~~~~~~~~~~~~ -->
<section class="container__train">
    <div class="div__train">
        <div class="train__img">
            <h2 class="title__train">Visite en petit train</h2>
            <img alt="Photo pour le petit train touristique"
                 class="image__train"
                 src="/asset/images/services/train-touristique.jpg">
        </div>

        <div class="train__description">
            <h3>Wakura Express</h3>
            <p class="train__p">Embarquez à bord du petit train touristique
                du zoo d'Arcadia pour une visite inoubliable à travers les
                différents mondes animaliers. Ce voyage confortable vous
                permet de découvrir les habitats des animaux tout en
                profitant de commentaires fascinants sur les espèces et leur
                mode de vie. Idéal pour les familles, le petit train offre
                une vue panoramique sur les zones les plus emblématiques du
                parc. Les enfants seront enchantés par cette balade ludique,
                tandis que les adultes apprécieront le rythme détendu de la
                visite. Une manière amusante et éducative de parcourir le
                zoo sans effort !
            </p>
        </div>
    </div>
</section>
@endsection
