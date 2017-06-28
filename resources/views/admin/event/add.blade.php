@extends('admin.master')
@section('page-title')  Sự kiện @endsection
@section('css')
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/skins/_all-skins.min.css">
  <style type="text/css">
    .dropdown-menu{
      left: 25%!important;
    }
  </style>
@endsection
@section('content-wrapper')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm Sự kiện
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sự kiện</a></li>
        <li class="active">Thêm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              @include('admin.include.message')
              <h3 class="box-title"></h3>
            </div>

            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">
                  <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Tên Sự kiện</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Tên Sự kiện">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                  <div class="form-group">
                    <label for="content" class="col-sm-3 control-label">Mô tả</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="content" id="content" value="{{ old('content') }}" placeholder="Mô tả">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                  <div class="form-group">
                    <label for="date_begin" class="col-sm-3 control-label">Ngày bắt đầu</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="date_begin" id="date-begin" value="{{ old('date_begin') }}" placeholder="Ngày bắt đầu (dd-mm-yyyy)">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label for="time_begin" class="col-sm-3 control-label">Giờ bắt đầu</label>

                    <div class="input-group col-md-5">
                      <input type="text" class="form-control timepicker" name="time_begin" value="{{ old('time_begin') }}">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <div class="box-footer">
                <div class="col-sm-3">
                  <a href="{{ route('admin.event.list') }}" class="btn btn-default pull-right">Danh sách </a>
                </div>
                <div class="col-sm-5">
                  <button type="submit" class="btn btn-info pull-right">Thêm mới</button>
                </div>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
@section('script')
  <!-- InputMask -->
  <script src="{{ asset('admin') }}/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="{{ asset('admin') }}/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="{{ asset('admin') }}/plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- bootstrap time picker -->
  <script src="{{ asset('admin') }}/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script>
    $(function () {
      var dateToday = new Date();
      //date picker
      $('#date-begin').datepicker({
          autoclose: true,
          format: 'dd-mm-yyyy',
          todayHighlight: true,
          startDate: new Date()
        });
      //Timepicker
      $(".timepicker").timepicker({
        // showMeridian: false, //show 24h
        minuteStep: 5,
        showInputs: false,
      });
    });
  </script>
@endsection