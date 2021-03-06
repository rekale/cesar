@extends('front.layouts.app')

@section('page-title')
    TRANSACTION
@endsection

@section('content')
    <div class="col-md-12 well" style="margin-top: 3em">
        <div>
            <form method="GET" Action="{{ route('front.transactions.histories') }}" id="purchase-filter">
                <div class="form-group">
                    <label>Filter</label>
                    <select class="form-control" name="filter" onchange="$('#purchase-filter').submit()">
                        <option></option>
                        <option value="confirmed" {{ request('filter') == 'confirmed' ? 'selected':'' }}>
                            Confirmed
                        </option>
                        <option value="not_confirmed" {{ request('filter') == 'not_confirmed' ? 'selected':'' }}>
                            Not Confirmed
                        </option>
                        <option value="confirm_request" {{ request('filter') == 'confirm_request' ? 'selected':'' }}>
                            Confirm Request
                        </option>
                        <option value="expired" {{ request('filter') == 'expired' ? 'selected':'' }}>
                            Expired
                        </option>
                    </select>
                </div>
                @if(Request::has('filter'))
                    <a class="text-primary" href="{{ route('front.transactions.histories') }}">clear search</a>
                @endif
            </form>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Destinations</th>
                    <th>Tickets</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at->format('d-m-Y') }}</td>
                        <td>
                            @foreach($transaction->destinations as $destination)
                                <ul>
                                    <li>{{ $destination->title }}</li>
                                </ul>
                            @endforeach
                        </td>
                        <td>
                            @foreach($transaction->destinations as $destination)
                                <ul>
                                    <li>{{ $destination->pivot->tickets }}</li>
                                </ul>
                            @endforeach
                        </td>
                        <td>
                            @foreach($transaction->destinations as $destination)
                                <ul>
                                    <li>{{ $destination->pivot->total }}</li>
                                </ul>
                            @endforeach
                        </td>
                        <td>{{ $transaction->total }}</td>
                        <td>
                            @if($transaction->confirmed)
                                <span class="label label-success">Confirmed</span>
                            @elseif(!$transaction->confirmed && is_null($transaction->proof))
                                <span class="label label-danger">Not confirmed</span>
                            @elseif(!$transaction->confirmed && isset($transaction->proof))
                                <span class="label label-info">Processing</span>
                            @elseif($transaction->expired_at->timestamps < Carbon\Carbon::now())
                                <span class="label label-default">Expired</span>
                            @endif
                        </td>
                        <td>
                            @if($transaction->confirmed)
                                <a href="{{ route('front.transactions.print', $transaction->id) }}"
                                    class="btn btn-sm btn-primary" target="_blank"
                                >
                                        Print
                                </a>
                            @else
                                <a href="{{ route('front.transactions.confirmation', $transaction->id) }}"
                                    class="btn btn-sm btn-default"
                                    {{ $transaction->confirmed ? 'disabled': ''}}
                                >
                                        Confirm
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $transactions->appends(request()->input())->links() }}

    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).on('click', 'a', function(e) {
            if ($(this).attr('disabled') == 'disabled') {
                e.preventDefault();
            }
        });
    </script>
@endsection
