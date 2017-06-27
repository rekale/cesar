<table class="table table-bordered">
    <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Destination</th>
          <th>Ticket</th>
          <th>Total</th>
          <th>Confirmed</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($purchases as $purchase)
            <tr>
                <td>{{ $purchase->id }}</td>
                <td>{{ $purchase->user->username }}</td>
                <td>{{ $purchase->destination->title }}</td>
                <td>{{ $purchase->tickets }}</td>
                <td>{{ $purchase->total }}</td>
                <td>{{ $purchase->confirmed ? 'yes':'no' }}</td>
                <td>
                    <a class="btn btn-default btn-sm" href="{{ route('admin.purchases.edit', $purchase->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#purchase-delete').submit() : null ">
                        <span class="glyphicon glyphicon-trash"></span>
                        <form class="hidden" id="purchase-delete" method="POST" action="{{ route('admin.purchases.destroy', $purchase->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
