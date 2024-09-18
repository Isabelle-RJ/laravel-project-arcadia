@extends('layouts.base')
@section('content')
    <form method="POST"
          action="{{ route('create-zoo') }}">
        @csrf

        <input
            type="text"
            name="name"
        >
        @error('name')
        {{ $message }}
        @enderror

        <input
            type="text"
            name="description"
        >
        @error('description')
        {{ $message }}
        @enderror

        <button type="submit">OK !</button>

    </form>
@endsection
