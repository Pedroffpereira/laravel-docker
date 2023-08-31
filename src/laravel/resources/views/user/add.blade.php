@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => 'users', 'method' => 'post']) }}

        @include('components.users.forms')

        {{ Form::close() }}

    </div>
@endsection
