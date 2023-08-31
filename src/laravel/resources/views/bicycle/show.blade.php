@extends('layouts.app')

@section('content')
    <div class="container">


        @include('components.bicycles.forms', ['bicycle', $bicycle, 'users' => $users, 'disebled' => true])

    </div>
@endsection
