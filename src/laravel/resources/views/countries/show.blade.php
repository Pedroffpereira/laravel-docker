@extends('layouts.app')

@section('content')
    <div class="container">


        @include('components.country.forms', ['country', $country, 'disebled' => true])

    </div>
@endsection
