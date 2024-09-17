@extends('layouts.base')
@section('content')
    <form method="POST"
          action="{{ route('zoo-update', ['name' => $zoo->name]) }}">
        @csrf
        @method('PATCH')
        <input
            type="text"
            name="name"
            value="{{old('name')}}"
            placeholder="{{old('name')}}"
        >
        <input
            type="text"
            name="description"
            value="{{old('description')}}"
            placeholder="{{old('description')}}"
        >
        <button type="submit">OK !</button>
    </form>
@endsection
