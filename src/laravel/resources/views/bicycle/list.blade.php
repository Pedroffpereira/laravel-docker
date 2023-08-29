@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>

                    <th>Projeto</th>
                </tr>
            </thead>
            @foreach ($bicycles as $bicycle)
                <tr>
                    <td>
                        {{ $bicycle->brand }}
                    </td>

                    <td>
                        {{ $bicycle->model }}
                    </td>
                    <td>
                        {{ $bicycle->color }}
                    </td>
                    <td>
                        {{ $bicycle->price }}
                    </td>
                    <td>
                        {{ $bicycle->bicycle->first_name }}
                        {{ $bicycle->bicycle->last_name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
