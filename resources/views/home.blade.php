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
                    <article class="card__article">
                        <div class="card__image">
                            <img alt="Photo de daim au Japon"
                                 class="card__img"
                                 src="/asset/images/Nara-Japon-Daim-Couverture.jpg">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Savane</h3>
                            <a class="card__button"
                               href="{{ route('habitats') }}">Voir plus</a>

                        </div>
                    </article>

                    <article class="card__article">
                        <div class="card__image">
                            <img alt="Photo de carpes koi"
                                 class="card__img"
                                 src="/asset/images/carpes-koi.webp">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Marais</h3>
                            <a class="card__button"
                               href="{{ route('habitats')}}">
                                Voir plus
                            </a>
                        </div>
                    </article>

                    <article class="card__article">
                        <div class="card__image">
                            <img alt="Photo de macaques japonais"
                                 class="card__img"
                                 src="/asset/images/singes-jp.jpg">
                            <div class="card__shadow"></div>
                        </div>
                        <div class="card__data">
                            <h3 class="card__name">Jungle</h3>
                            <!-- <p class="card__description">
                              "Les <em>Macaques Japonais</em> se détendent sur les pierres chaudes dans une source thermale, offrant une scène paisible et captivante au cœur du zoo."
                            </p> -->
                            <a class="card__button"
                               href="{{ route('habitats')}}">Voir plus
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </section>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~ Section Services ~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <section class="container__services">
        <div class="card__container__services">
            <h2 class="services__title">... et nos différents services</h2>
            <div class="card__content__services">
                <div>
                    <article class="card__article__services">
                        <div class="card__image__services">
                            <img alt=""
                                 class="card__img__services"
                                 src="/asset/images/services/restaurant-exterior.jpg">
                            <div class="card__shadow__services"></div>
                        </div>
                        <div class="card__data__services">
                            <h3 class="card__name__services">Restauration</h3>
                            <p class="card__description__services">
                                "Une pause gourmande au cœur du zoo : un repas
                                savoureux qui ravit les visiteurs tout
                                autant que les animaux."
                            </p>
                            <a class="card__button__services"
                               href="{{ route('services')}}">Voir plus
                            </a>
                        </div>
                    </article>

                    <article class="card__article__services">
                        <div class="card__image__services">
                            <img alt=""
                                 class="card__img__services"
                                 src="/asset/images/services/parc-nara-daim.jpg">
                            <div class="card__shadow__services"></div>
                        </div>
                        <div class="card__data__services">
                            <h3 class="card__name__services">Visite guidée</h3>
                            <p class="card__description__services">
                                "Découvrez les secrets du zoo lors de nos
                                visites guidées gratuites, où chaque pas
                                révèle une aventure fascinante dans le monde
                                animal."
                            </p>
                            <a class="card__button__services"
                               href="{{ route('services')}}">Voir plus</a>
                        </div>
                    </article>

                    <article class="card__article__services">
                        <div class="card__image__services">
                            <img alt=""
                                 class="card__img__services"
                                 src="/asset/images/services/train-touristique.jpg">
                            <div class="card__shadow__services"></div>
                        </div>
                        <div class="card__data__services">
                            <h3 class="card__name__services">Visite en petit
                                train </h3>
                            <p class="card__description__services">
                                "Embarquez pour un voyage enchanté en petit
                                train à travers le zoo, pour une exploration
                                amusante et immersive des merveilles animales."
                            </p>
                            <a class="card__button__services"
                               href="{{ route('services')}}">Voir plus</a>
                        </div>
                    </article>

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


