<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td> {{ $country->name }} </td>
            </td>
            <td>

                <a href="{{ route('countries.show', ['country' => $country]) }}" class="btn btn-success">show</a>

                <a href="{{ route('countries.edit', ['country' => $country]) }}" class="btn btn-primary">Edit</a>

                {{ Form::open(['url' => route('countries.destroy', $country), 'method' => 'delete']) }}

                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>

                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>
