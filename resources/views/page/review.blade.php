@extends('layouts.base')
@section('header')
    <img
        alt="image de fond"
        class="bg-header"
        src="/storage/asset/images/shiba-inu.webp"
    >
    <div class="text-header">
        <h1>Avis</h1>
    </div>
@endsection
@section('content')
    <section class="container section-review">
        <h2>Votre avis nous intéresse</h2>
        <div class="form-review">
            <form
                class="form"
                action=""
                method="post"
                enctype="multipart/form-data"
            >
                @csrf
                <label for="author">Votre pseudo</label>
                <input
                    placeholder="Pseudonyme"
                    type="text"
                    name="author"
                    id="author"
                >
                @error('author')
                {{ $message }}
                @enderror

                <label for="content">Votre message</label>
                <textarea
                    placeholder="Contenu de votre message..."
                    name="content"
                    id="content"
                    cols="60"
                    rows="5"
                ></textarea>
                @error('content')
                {{ $message }}
                @enderror

                <label for="rating">Votre note</label>
                <div class="rating-icon">
                    <i><img
                            src="asset/icons/empty-star.svg"
                            alt="L'icône d'une étoile vide"
                        >
                    </i>
                    <i><img
                            src="asset/icons/empty-star.svg"
                            alt="L'icône d'une étoile vide"
                        >
                    </i>
                    <i><img
                            src="asset/icons/empty-star.svg"
                            alt="L'icône d'une étoile vide"
                        >
                    </i>
                    <i><img
                            src="asset/icons/empty-star.svg"
                            alt="L'icône d'une étoile vide"
                        >
                    </i>
                    <i><img
                            src="asset/icons/empty-star.svg"
                            alt="L'icône d'une étoile vide"
                        >
                    </i>

                </div>

                <button
                    class="send"
                    type="submit"
                >
                    Envoyer mon avis
                </button>
            </form>
        </div>
    </section>
@endsection