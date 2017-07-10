@extends('front.layouts.app')

@section('page-title')
    BASKET
@endsection

@section('content')
    <div class="col-md-12 well" style="margin-top: 3em">

    @if($destinations->isNotEmpty())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Destination</th>
                    <th>Image</th>
                    <th>Tickets</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $destination->title }}</td>
                        <td>
                            <img src="{{ $destination->thumbnail_image }}" class="img-responsive" style="height: 10em">
                        </td>
                        <td>{{ $destination->buy_tickets }}</td>
                        <td>{{ $destination->ticket_price }}</td>
                        <td>{{ $destination->total }}</td>
                        <td>
                            <a href="{{ route('front.basket.add', ['id' => $destination->id]) }}" class="btn btn-success btn-sm">
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="$('#basket-{{$destination->id}}').submit()">
                                Delete
                                <form id="basket-{{$destination->id}}" action="{{ route('front.basket.destroy') }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="id" value="{{ $destination->id }}">
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th>Total</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ $destinations->sum->total }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <button href="{{ route('front.basket.checkout') }}" class="btn btn-primary"
            onclick="confirm('are you sure?') ? window.location.href = '{{ route('front.basket.checkout') }}' : '' ">
            Checkout
        </button>
    @else
        <center><p class="text-muted">basket is empty</p></center>
    @endif

    </div>
@endsection

