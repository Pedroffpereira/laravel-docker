@extends('layouts.app')

@section('content')
    <div class="container">


        @include('components.users.forms', ['user' => $user, 'countries' => $countries, 'disebled' => true])

    </div>
@endsection
