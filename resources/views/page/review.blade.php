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
            <form action=""
                  method="post"
                  @csrf
            >
                <label for="">Votre pseudo</label>
                <input type="text"
                       name="name"
                       id="name"
                >
                <label for="">Votre email</label>
                <input type="email"
                       name="email"
                       id="email"
                >
                <label for="">Votre message</label>
                <input type="text"
                       name="message"
                       id="message"
                >

            </form>
        </div>
    </section>
@endsection
