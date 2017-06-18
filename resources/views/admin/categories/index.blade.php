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
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a class="btn btn-default btn-sm" href="{{ route('admin.categories.edit', $category->id) }}">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" onclick="confirm('are you sure?') ? $('#category-delete').submit() : null ">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        <form class="hidden" id="category-delete" method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $categories->links() }}
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
