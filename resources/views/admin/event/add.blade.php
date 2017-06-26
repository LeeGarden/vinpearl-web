@extends('admin.master')
@section('page-title')  Event @endsection
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
        Add new Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Event</a></li>
        <li class="active">Add</li>
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
                    <label for="title" class="col-sm-3 control-label">Event Title</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Title">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                  <div class="form-group">
                    <label for="content" class="col-sm-3 control-label">Description</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="content" id="content" value="{{ old('content') }}" placeholder="Description">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                  <div class="form-group">
                    <label for="date_begin" class="col-sm-3 control-label">Date Begin</label>

                    <div class="input-group col-sm-5">
                      <input type="text" class="form-control" name="date_begin" id="date-begin" value="{{ old('date_begin') }}" placeholder="Date Begin (dd-mm-yyyy)">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
              </div>

              <div class="box-body">
                <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label for="time_begin" class="col-sm-3 control-label">Time begin</label>

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
                  <a href="#" class="btn btn-default pull-right">Return List </a>
                </div>
                <div class="col-sm-5">
                  <button type="submit" class="btn btn-info pull-right">Add New</button>
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
        showInputs: false,
      });
    });
  </script>
@endsection