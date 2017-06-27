@extends('admin.master')
@section('title')Tư vấn @endsection

  <!-- Data table -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách Đăng ký bán
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Đăng ký bán</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Họ & tên</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Ngày bán</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listRegSale as $item)
            <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['fulname']}}</td>
              <td>{{ $item['email']}}</td>
              <td>{{ $item['phone']}}</td>
              <td>{{ $item['date_sale']}}</td>
              <td>
                <a href="{{ asset('admin/consult/detail') }}/{{ $item['id'] }}" title="Detail"><i class="fa fa-cog"></i></a>    
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