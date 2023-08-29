@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                </tr>
            </thead>
            @foreach ($countries as $country)
            <tr>
                <td>
                    {{ $country->id }}
                </td>

                <td>
                    {{ $country->name }}
                </td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
