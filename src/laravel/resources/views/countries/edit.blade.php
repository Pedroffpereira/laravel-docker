@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => route('countries.update', $country), 'method' => 'put']) }}

        @include('components.country.forms', ['country', $country])

        {{ Form::close() }}

    </div>
@endsection
