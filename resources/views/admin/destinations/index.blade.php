@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Destination
        <small>index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.destinations.index') }}"><i class="fa fa-list"></i>Index</a></li>
      </ol>
    </section>
    <section class="content">

            <div class="box">
                <div class="box-header with-border">
                  <a href="{{ route('admin.destinations.create') }}" class="btn btn-primary">Create</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  @include('admin.destinations.table')
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $destinations->links() }}
                </div>
              </div>
            <table class="table table-striped table-bordered">
                <thead>

                </thead>
                <tbody>

                </tbody>
            </table>
    </section>
@endsection
