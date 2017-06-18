<table class="table table-bordered">
    <thead>
        <tr>
          <th>ID</th>
          <th>title</th>,
          <th>thumbnail_image</th>
          <th>category</th>
          <th>abstract</th>
          <th>location</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->title }}</td>
                <td width="20%"><img src="{{ $destination->thumbnail_image }}" class="img-responsive" /></td>
                <td width="15%">{{ $destination->category->name }}</td>
                <td>{{ $destination->abstract }}</td>
                <td>{{ $destination->location }}</td>
                <td width="15%">
                    <a class="btn btn-default btn-sm" href="{{ route('admin.destinations.edit', $destination->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-warning btn-sm" target="_blank" href="{{ route('front.destination.show', str_slug($destination->title)) }}">
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#destination-delete').submit() : null ">
                        <span class="glyphicon glyphicon-trash"></span>
                        <form class="hidden" id="destination-delete" method="POST" action="{{ route('admin.destinations.destroy', $destination->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
