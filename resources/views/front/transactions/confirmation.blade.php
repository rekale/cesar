@extends('front.layouts.app')

@section('content')
    <div class="col-md-12 well" style="margin-top: 3em">
        <h3>Transaction <small>confrimation</small></h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <form  method="POST" enctype="multipart/form-data" action="{{ route('front.transactions.confirm', $transaction->id) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                            <input type="file" name="proof">
                        <p class="help-block">Upload your proof for payment here</p>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
