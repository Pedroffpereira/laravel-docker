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
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>

                    <td>
                        {{ $user->first_name }}
                    </td>
                    <td>
                        {{ $user->last_name }}
                    </td>
                    <td>
                        {{ $user->birth_date }}
                    </td>
                    <td>
                        {{ $user->Country->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
