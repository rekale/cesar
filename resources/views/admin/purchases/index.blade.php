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
                    <form method="GET" Action="{{ route('admin.purchases.index') }}" id="purchase-filter">
                        <div class="form-group">
                            <label>Filter</label>
                            <select class="form-control" name="filter" onchange="$('#purchase-filter').submit()">
                                <option></option>
                                <option value="confirmed" {{ request('filter') == 'confirmed' ? 'selected':'' }}>
                                    Confirmed
                                </option>
                                <option value="not_confirmed" {{ request('filter') == 'not_confirmed' ? 'selected':'' }}>
                                    Not Confirmed
                                </option>
                                <option value="confirm_request" {{ request('filter') == 'confirm_request' ? 'selected':'' }}>
                                    Confirm Request
                                </option>
                            </select>
                        </div>
                        @if(Request::has('filter'))
                            <a class="text-primary" href="{{ route('admin.purchases.index') }}">clear search</a>
                        @endif
                    </form>
                    @include('admin.purchases.table')
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $purchases->links() }}
                </div>
              </div>
    </section>
@endsection
