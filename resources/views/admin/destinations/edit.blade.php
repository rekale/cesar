@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Destination
        <small>edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.destinations.index') }}"><i class="fa fa-list"></i>Index</a></li>
        <li><a href="{{ route('admin.destinations.edit', $destination->id) }}"><i class="fa fa-pencil"></i>Edit</a></li>
      </ol>
    </section>
    <section class="content">
        <div class="col-md-10 col-md-offset-1">
          <div class="box box-primary">
            <form method="POST" Action="{{ route('admin.destinations.update', $destination->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
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
