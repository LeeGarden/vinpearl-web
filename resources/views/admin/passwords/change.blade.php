@extends('admin.master')
@section('title') Đổi mật khẩu @endsection

@section('content-wrapper')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Đổi mật khẩu
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Quản trị viên </a></li>
    <li class="active">Đổi mật khẩu</li>
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
    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="name" class="col-sm-5 control-label">Mật khẩu cũ</label>

          <div class="col-sm-7">
            <input type="password" class="form-control" name="oldpass" placeholder="Mật khẩu cũ">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="username" class="col-sm-5 control-label">Mật khẩu mới</label>

          <div class="col-sm-7">
            <input type="password" class="form-control" name="newpass" placeholder="Mật khẩu mới">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="password" class="col-sm-5 control-label">Xác nhận m.khẩu</label>

          <div class="col-sm-7">
            <input type="password" class="form-control" name="confirm" placeholder="Xác nhận m.khẩu">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-8">
          <div class="col-sm-5">
           <a href="{{ URL::route('admin.getProfile') }}" class="btn btn-default pull-right">Thông tin </a>
          </div>
          <button type="submit" class="btn btn-info pull-right">Cập nhập m.khẩu</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  <!-- /.box -->

</section>
<!-- bootstrap datepicker -->
<script src="{{asset('/') }}admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript">
  $('#datepicker').datepicker({
      autoclose: true
    });
</script>
<!-- /.content -->
@endsection