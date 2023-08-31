@extends('layouts.app')

@section('content')
    <div class="container">
        {{ Form::open(['url' => 'bicycles', 'method' => 'post']) }}

        @include('components.bicycles.forms')

        {{ Form::close() }}

    </div>
@endsection
