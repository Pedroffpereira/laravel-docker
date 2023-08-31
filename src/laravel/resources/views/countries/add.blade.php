@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => 'countries', 'method' => 'post']) }}

        @include('components.country.forms')

        {{ Form::close() }}

    </div>
@endsection
