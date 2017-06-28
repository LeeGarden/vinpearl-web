@extends('admin.master')
@section('page-title') Tư vấn @endsection

@section('content-wrapper')
<style type="text/css">
  .form-group span {
    font-size: 18px;
  }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tư vấn
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tư vấn </a></li>
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
          <label for="username" class="col-sm-3 control-label">Người gửi</label>

          <div class="col-sm-9">
            <span>{{ $consult->fulname}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Email</label>

          <div class="col-sm-9">
            <span>{{ $consult->email}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Điện thoại</label>

          <div class="col-sm-9">
            <span>{{ $consult->phone}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Nội dung cần tư vấn</label>

          <div class="col-sm-9">
            <span>{{ $consult->message}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Ngày gửi</label>

          <div class="col-sm-9">
            <span>{{ $consult->created_at}}</span>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-10">
          <div class="col-sm-4 col-sm-offset-2">
            <a href="{{ route('admin.consult.list') }}" class="btn btn-primary pull-right">
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