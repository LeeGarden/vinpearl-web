@extends('admin.master')
@section('page-title')Đăng ký bán @endsection

@section('content-wrapper')
<style type="text/css">
  .form-group span {
    font-size: 18px;
  }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Đăng ký bán
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Đăng ký bán </a></li>
    <li class="active">Chi tiết</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      @include('admin.include.message')
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
      <div class="box-body col-sm-11">
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Người đăng ký</label>

          <div class="col-sm-9">
            <span>{{ $regSale->fulname}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Email</label>

          <div class="col-sm-9">
            <span>{{ $regSale->email}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Điện thoại</label>

          <div class="col-sm-9">
            <span>{{ $regSale->phone}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Thông tin</label>

          <div class="col-sm-9">
            <span>{{ $regSale->message}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Ngày bán</label>

          <div class="col-sm-9">
            <span>{{ $regSale->date_sale}}</span>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-10">
          <div class="col-sm-4 col-sm-offset-2">
            <a href="{{ route('admin.regsale.list') }}" class="btn btn-primary pull-right">
              <i class="fa fa-list" aria-hidden="true"></i> Xem danh sách
            </a>
          </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  <!-- /.box -->

</section>

<!-- /.content -->
@endsection