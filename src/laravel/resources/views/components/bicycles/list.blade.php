<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Color</th>
            <th>Price</th>
            <th>User</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($bicycles as $bicycle)
        <tr>
            <td>
                {{ $bicycle->id }}
            </td>

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
                {{ $bicycle->user->first_name }}
                {{ $bicycle->user->last_name }}
            </td>
            <td>
                <a href="{{ route('bicycles.show', ['bicycle' => $bicycle]) }}" class="btn btn-success">show</a>

                <a href="{{ route('bicycles.edit', ['bicycle' => $bicycle]) }}" class="btn btn-primary">Edit</a>

                {{ Form::open(['url' => route('bicycles.destroy', $bicycle), 'method' => 'delete']) }}

                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>

                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>
