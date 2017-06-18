@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Destination
        <small>create</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.destinations.index') }}"><i class="fa fa-list"></i>Index</a></li>
        <li><a href="{{ route('admin.destinations.create') }}"><i class="fa fa-plus"></i>Create</a></li>
      </ol>
    </section>
    <section class="content">
        <div class="col-md-10 col-md-offset-1">
          <div class="box box-primary">
            <form method="POST" Action="{{ route('admin.destinations.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body" style="overflow: scroll;max-height: 40em;">
                 @include('admin.destinations.form')
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </section>
@endsection
