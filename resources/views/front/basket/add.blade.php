@extends('front.layouts.app')

@section('content')
    <div class="col-md-12" style="margin-top: 3em">
        <h3>Basket <small>add item</small></h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <form  method="POST" enctype="multipart/form-data" action="{{ route('front.basket.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $destination->id }}">
                    <div class="form-group">
                        <label for="exampleInputFile">Destination</label>
                            <input type="text" value="{{ $destination->title }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Total ticket</label>
                            <input type="number" name="tickets" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
