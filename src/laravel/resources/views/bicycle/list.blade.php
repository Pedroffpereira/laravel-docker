@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('bicycles.create') }}">Adicionar</a>
        @include('components.bicycles.list', ['bicycles' => $bicycles])
    </div>
@endsection
