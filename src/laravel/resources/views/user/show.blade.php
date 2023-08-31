@extends('layouts.app')

@section('content')
    <div class="container">


        @include('components.users.forms', ['user', $user, 'disebled' => true])

    </div>
@endsection
