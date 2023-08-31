@extends('layouts.app')

@section('content')
    <div class="container">


        @include('components.bicycles.forms', ['bicycle', $bicycle, 'disebled' => true])

    </div>
@endsection
