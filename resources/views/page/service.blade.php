@extends('layouts.base')
@section('header')
    <img
        alt="image de fond"
        class="bg__header"
        src="/asset/images/{{ $service->image }}"
    >
    <div class="text-header">
        <h1>{{ $service->name }}</h1>
    </div>
@endsection
@section('content')

@endsection
