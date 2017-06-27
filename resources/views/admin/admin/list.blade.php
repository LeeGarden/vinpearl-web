@extends('admin.master')
@section('page-title')List Admin @endsection
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    List Admin
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin</a></li>
    <li class="active">List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
        <a href="{{ URL::route('admin.admin.getAdd') }}" class="btn btn-primary"> 
          <i class="fa fa-plus"></i> Add Admin</a>
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listAdmin as $key => $item)
            <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['name']}}</td>
              <td>{{ $item['email']}}</td>
              <td>{{ $role[$key] }}</td>
              <td>
                <a href="{{ asset('admin/admin/edit') }}/{{ $item['id'] }}" title="Edit"><i class="fa fa-cog"></i></a>    
                <a  data-toggle="modal" data-target="#del{{ $item['id'] }}" title="Delete"><i class="fa fa-trash-o"></i></a> 
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
@section('script')
  <!-- DataTables -->
  <script src="{{ asset('/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/admin') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
@endsection