@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => route('users.update', $user), 'method' => 'put']) }}

        @include('components.users.forms', ['user', $user,'countries' => $countries])

        {{ Form::close() }}

    </div>
@endsection
