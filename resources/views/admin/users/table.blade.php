<table class="table table-bordered">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <a class="btn btn-default btn-sm" href="{{ route('admin.users.edit', $user->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#user-delete-{{$user->id}}').submit() : null ">
                        <span class="glyphicon glyphicon-trash"></span>
                        <form class="hidden" id="user-delete-{{$user->id}}" method="POST" action="{{ route('admin.users.destroy', $user->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
