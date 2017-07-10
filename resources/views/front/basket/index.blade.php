@extends('front.layouts.app')

@section('content')
    <div class="col-md-12" style="margin-top: 3em">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Destination</th>
                    <th>Image</th>
                    <th>Tickets</th>
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
                        <td>{{ $destination->tickets }}</td>
                        <td>{{ $destination->tickets * $destination->ticket_price }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">
                                Checkout
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

