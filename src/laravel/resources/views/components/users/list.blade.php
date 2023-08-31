<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Country</th>
            <th>Action</th>
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
            <td>
                <a href="{{ route('users.show', ['user' => $user]) }}" class="btn btn-success">show</a>

                <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-primary">Edit</a>

                {{ Form::open(['url' => route('users.destroy', $user), 'method' => 'delete']) }}

                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>

                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>
