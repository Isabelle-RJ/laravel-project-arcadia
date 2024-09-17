@extends('layouts.base')
@section('content')
    <form method="POST"
          action="{{ route('create-zoo') }}">
        @csrf

        <input
            type="text"
            name="name"
        >
        <input
            type="text"
            name="description"
        >
        <button type="submit">OK !</button>
    </form>
@endsection
