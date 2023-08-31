@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('users.create') }}">Adicionar</a>
        @include('components.users.list', ['users' => $users])

    </div>
@endsection
