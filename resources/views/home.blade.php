@extends('layouts.base')

@section('header')
    <img alt="image de fond"
         class="bg__header"
         src="/asset/images/red-fox-istockphoto.jpg">
    <div class="text-header">
        <h1>Présentation</h1>
    </div>
@endsection

@section('content')
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section présentation ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section class="home__container">
        <div class="home__content">
            <h2 class="home__title">Bienvenue au Zoo Arcadia</h2>
            <img alt="Icon écologie"
                 class="home__icon"
                 src="/asset/icons/icon-ecologie.svg">
            <p class="home__description">
                {{ $zoo->description }}
            </p>
            <div>
                ici on vera pour insérer "quelques images du zoo"
            </div>
            <img alt="Logo d'Arcadia"
                 class="home__logo"
                 src="/asset/logos/logo-header.svg">
        </div>
    </section>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section Habitats ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section class="container__habitats">
        <div class="card__container">
            <h2 class="habitats__title">Découvrez nos animaux et leurs
                environnements ...</h2>
            <div class="card__content">
                <div>
                    @foreach($habitats as $habitat)
                        <article class="card__article">
                            <div class="card__image">
                                <img alt="Photo {{ $habitat->name }}"
                                     class="card__img"
                                     src="/storage/asset/images/{{$habitat->image}}">
                                <div class="card__shadow"></div>
                            </div>
                            <div class="card__data">
                                <h3 class="card__name">{{ $habitat->name }}</h3>
                                <a class="card__button"
                                   href="{{ route('habitat', [$habitat->name]) }}">Voir plus</a>

                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section Services ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section class="container__services">
        <div class="card__container">
            <h2 class="services__title">... et nos différents services</h2>
            <div class="card__content">
                <div>
                    @foreach($services as $service)
                        <article class="card__article">
                            <div class="card__image">
                                <img alt="Photo {{ $service->name }}"
                                     class="card__img"
                                     src="/storage/asset/images/{{$service->image}}">
                                <div class="card__shadow"></div>
                            </div>
                            <div class="card__data">
                                <h3 class="card__name">{{ $service->name }}</h3>
                            </div>
                        </article>
                    @endforeach
                    <a
                        class="card__button"
                        href="{{ route('services') }}"
                    >
                        Voir tous les services
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section Schedules ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section class="container__hours">
        <h2 class="hours__title">HORAIRES</h2>
        <h3 class="hours__list__title">Ouvert tous les jours</h3>
        <div class="hours__content">
            <div class="hours__list">
                <ul>
                    <li>Février à Mars</li>
                    <li>Avril à Août</li>
                    <li>Septembre à Octobre</li>
                </ul>
            </div>
            <div class="hours__list">
                <ul>
                    <li>De 14H à 18H</li>
                    <li>De 10H à 19H</li>
                    <li>De 11H à 18H</li>
                </ul>
            </div>
        </div>
        <h3 class="hours__close">FERMETURE ANNUELLE : <br>NOVEMBRE À JANVIER
            INCLUS</h3>
    </section>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section Avis ~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <section class="container__reviews">
        <div class="card__container__reviews">
            <h2 class="reviews__title">Nos visiteurs parlent de nous...</h2>
            <div class="card__content__reviews">
                <div>
                    <article class="card__article__reviews">
                        <div class="card__image__reviews">
                            <img alt=""
                                 id="card__img__services"
                                 src="">
                            <div class="card__shadow__services"></div>
                        </div>
                        <div class="card__data__services">
                            <h3 class="card__name__services">Titre</h3>
                            <p class="card__description__services">
                                "Une pause gourmande au cœur du zoo : un repas
                                savoureux qui ravit les visiteurs tout
                                autant que les animaux."
                            </p>

                            <a class="button__reviews"
                               href="{{ route('review') }}"
                               id="add-review">Donnez-nous votre avis</a>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection


