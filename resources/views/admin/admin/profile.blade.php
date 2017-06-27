@extends('admin.master')
@section('page-title') Thông tin @endsection

@section('content-wrapper')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Thông tin
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Quản trị viên </a></li>
    <li class="active">Thông tin</li>
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
          <label for="username" class="col-sm-5 control-label">Tên đăng nhập:</label>

          <div class="col-sm-7">
            <label class="control-label">{{ Auth::guard('admin')->user()->username }}</label>
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="email" class="col-sm-5 control-label">Email:</label>

          <div class="col-sm-7">
            <label for="name" class="control-label">{{ Auth::guard('admin')->user()->email }}</label>
          </div>
        </div>
      </div>
      {{-- <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="role" class="col-sm-5 control-label">Role:</label>

          <div class="col-sm-7">
            <label class="control-label">{{ $role }}</label>
          </div>
        </div>
      </div> --}}
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="name" class="col-sm-5 control-label">Họ & tên:</label>

          <div class="col-sm-7">
            <label class="control-label label-data">{{ Auth::guard('admin')->user()->name }}</label>
            <input type="text" class="hide form-control" name="name" id="name" value="{!! old('name',Auth::guard('admin')->user()->name) !!}" placeholder="Họ & tên">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="phone" class="col-sm-5 control-label">Điện thoại:</label>

          <div class="col-sm-7">
            <label class="control-label label-data">{{ Auth::guard('admin')->user()->phone }}</label>
            <input type="text" class="hide form-control" name="phone" id="phone" value="{!! old('phone',Auth::guard('admin')->user()->phone) !!}" placeholder="Điện thoại">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="address" class="col-sm-5 control-label">Địa chỉ:</label>

          <div class="col-sm-7">
            <label class="control-label label-data">{{ Auth::guard('admin')->user()->address }}</label>
            <input type="text" class="hide form-control" name="address" id="address" value="{!! old('address',Auth::guard('admin')->user()->address) !!}" placeholder="Địa chỉ">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="gender" class="col-sm-5 control-label">Giới tính:</label>

          <div class="col-sm-7">
            <label class="control-label label-data">
              @if (Auth::guard('admin')->user()->gender == '1')
                Nam
                @elseif(Auth::guard('admin')->user()->gender == '0')
                Nữ
                @else
              @endif
            </label>
            <select class=" hide form-control" name="gender">
              @if (Auth::guard('admin')->user()->gender == '')
                <option selected>Chọn giới tính</option>
                <option value="0">Nữ</option>
                <option value="1">Nam</option>
              @else
                @if (Auth::guard('admin')->user()->gender != '1')
                  <option value="1">Nam</option>
                  <option value="0" selected>Nữ</option>
                @else
                  <option value="1" selected>Nam</option>
                  <option value="0">Nữ</option>
                @endif
              @endif
            </select>
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <label for="image" class="col-sm-5 control-label">Ảnh đại diện:</label>

          <div class="col-sm-7">
            <label class="control-label label-data"></label>
            <input type="file" class="hide form-control" name="image" id="image" accept="image/*">
          </div>
        </div>
      </div>
      <div class="box-body col-sm-8">
        <div class="form-group">
          <div id="image-holder" class="col-sm-2 col-sm-offset-5">
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="col-sm-8">
        <div class="col-sm-4 col-sm-offset-3">
          <a href="{{ URL::route('admin.getChangePass') }}" id="change-pass" class="btn btn-default">Đổi mật khẩu</a>
          <button type="button" id="btn-cancle" class="hide btn btn-default">Hủy</button>
        </div>
          <button type="button" class="update-info btn btn-info pull-right">Sửa thông tin</button>
          <button type="submit" id="btn-save" class="hide btn btn-info pull-right">Lưu thay đổi</button>
        </div>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  <!-- /.box -->

</section>
<script type="text/javascript">
  $('.update-info').click(function(){
    $(this).addClass('hide');
    $('#change-pass').addClass('hide');
    $('.label-data').addClass('hide');
    $('.form-control').removeClass('hide');
    $('#btn-save').removeClass('hide');
    $('#btn-cancle').removeClass('hide');
  });
  $('#btn-cancle').click(function(){
    $(this).addClass('hide');
    $('#btn-save').addClass('hide');
    $('.form-control').addClass('hide');
    $('.update-info').removeClass('hide');
    $('#change-pass').removeClass('hide');
    $('.label-data').removeClass('hide');
  });
</script>
<script>
  $(document).ready(function() {
    $("#image").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++)
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image",
                    "style": "width:100%"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
          } else {
            alert("This browser does not support FileReader.");
          }
      } else {
        alert("Vui lòng chọn ảnh");
      }
  });
  });
</script>
<!-- /.content -->
@endsection