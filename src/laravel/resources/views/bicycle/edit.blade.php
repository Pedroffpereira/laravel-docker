@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => route('bicycles.update', $bicycle), 'method' => 'put']) }}

        @include('components.bicycles.forms', ['bicycle', 'users' => $users, $bicycle])

        {{ Form::close() }}

    </div>
@endsection
