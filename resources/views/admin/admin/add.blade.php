@extends('admin.master')
@section('page-title')Add Admin @endsection

@section('content-wrapper')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Add new Admin
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Admin </a></li>
    <li class="active">Add</li>
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
          <label for="name" class="col-sm-3 control-label">Name</label>

          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Name">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="username" class="col-sm-3 control-label">Username</label>

          <div class="col-sm-9">
            <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" placeholder="Username">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Email</label>

          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="password" class="col-sm-3 control-label">Password</label>

          <div class="col-sm-9">
            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}" placeholder="Password">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="role" class="col-sm-3 control-label">Role</label>

          <div class="col-sm-9">
            <select class="form-control" name="role_id">
              <option>Select Role</option>
              @foreach ($listrole as $item)
                <option value="{{ $item['id'] }}">{{ $item['roles'] }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-8">
          <div class="col-sm-3">
            <a href="{{ URL::route('admin.admin.list') }}" class="btn btn-default pull-right">Return List </a>
          </div>
          <button type="submit" class="btn btn-info pull-right">Add New</button>
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