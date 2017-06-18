<table class="table table-bordered">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a class="btn btn-default btn-sm" href="{{ route('admin.categories.edit', $category->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#category-delete').submit() : null ">
                        <span class="glyphicon glyphicon-trash"></span>
                        <form class="hidden" id="category-delete" method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
