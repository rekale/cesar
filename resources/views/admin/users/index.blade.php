@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Users
        <small>index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-list"></i>Index</a></li>
      </ol>
    </section>
    <section class="content">

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    @include('admin.users.table')
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $users->links() }}
                </div>
              </div>
    </section>
@endsection
