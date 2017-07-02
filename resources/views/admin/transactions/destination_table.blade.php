<table class="table table-bordered">
    <thead>
        <tr>
          <th>title</th>
          <th>Category</th>
          <th>Tickets</th>
          <th>Price</th>
          <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($destinations as $destination)
            <tr>
                <td>{{ $destination->title }}</td>
                <td>{{ $destination->category->name }}</td>
                <td>{{ $destination->pivot->tickets }}</td>
                <td>{{ $destination->ticket_price }}</td>
                <td>{{ $destination->pivot->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
