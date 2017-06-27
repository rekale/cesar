@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
      <h1>
        Purchases
        <small>index</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('admin.purchases.index') }}"><i class="fa fa-list"></i>Index</a></li>
      </ol>
    </section>
    <section class="content">

            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    @include('admin.purchases.table')
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $purchases->links() }}
                </div>
              </div>
    </section>
@endsection
