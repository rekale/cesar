<table class="table table-bordered">
    <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Total</th>
          <th>Confirmed</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->user->username }}</td>
                <td>{{ $transaction->total }}</td>
                <td>{{ $transaction->confirmed ? 'yes':'no' }}</td>
                <td>
                    <a class="btn btn-default btn-sm" href="{{ route('admin.transactions.edit', $transaction->id) }}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#transaction-delete').submit() : null ">
                        <span class="glyphicon glyphicon-trash"></span>
                        <form class="hidden" id="transaction-delete" method="POST" action="{{ route('admin.transactions.destroy', $transaction->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
