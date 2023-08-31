@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('countries.create') }}">Adicionar</a>
        @include('components.country.list', ['countries' => $countries])

    </div>
@endsection
