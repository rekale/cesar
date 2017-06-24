@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Categories
        <small>index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-list"></i>Index</a></li>
      </ol>
    </section>
    <section class="content">

            <div class="box">
                <div class="box-header with-border">
                  <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Create</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @include('admin.categories.table')
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $categories->links() }}
                </div>
              </div>
    </section>
@endsection
