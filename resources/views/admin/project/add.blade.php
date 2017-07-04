@extends('admin.master')
@section('page-title')  Dự án @endsection
@section('css')
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/skins/_all-skins.min.css">
  <style type="text/css">
    .dropdown-menu{
      left: 25%!important;
    }
    .textarea{
      width: 100%;
      height: 200px;
      font-size: 14px;
      line-height: 18px;
      border: 1px solid #dddddd;
      padding: 10px;
    }
  </style>
@endsection
@section('content-wrapper')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm Dự án
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dự án</a></li>
        <li class="active">Thêm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">        

            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="box-header with-border">
                  @include('admin.include.message')
                  <h3 class="box-title col-md-6 col-md-offset-1">CHỌN DỰ ÁN CHÍNH</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="title" class="col-sm-3 control-label">Tên Dự án chính</label>

                      <div class="input-group col-sm-5">
                        <select class="form-control" name="main_project">
                          <option id="main-project" value="">Thêm dự án này là dự án chính</option>
                        </select>
                      </div>
                      <div class="input-group col-sm-3 col-md-offset-3" style="margin-top:13px;">
                        <a href="#" id="btn-show-add-mp"><i class="fa fa-plus" aria-hidden="true"></i> Thêm mục chọn</a>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group hide" id="add-main-project">
                      <label for="title" class="col-sm-3 control-label"></label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" id="input-name"  placeholder="Nhập tên Dự án">
                        <button type="button" class="btn btn-success" data-token="{{ csrf_token() }}" url-data="{{ asset('admin/project/add-main-project') }}" id="btn-add-mp" style="margin-top:13px;">Thêm mục chọn</button>
                        <button type="button" class="btn btn-default" id="btn-cancle" style="margin:13px 0 0 10px;">Đóng</button>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">TỔNG QUAN DỰ ÁN</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="name" class="col-sm-3 control-label">Tên Dự án</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Tên Dự án" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="description" class="col-sm-3 control-label">Mô tả</label>

                      <div class="input-group col-sm-5">
                        <textarea name="description" placeholder="Mô tả chung" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;" required></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="image" class="col-sm-3 control-label">Ảnh hiện thị</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" required name="image" id="image" accept="image/*">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="link_video" class="col-sm-3 control-label">Link video</label>

                      <div class="input-group col-sm-5">
                        <input type="text" required class="form-control" name="link_video" id="link_video" value="{{ old('link_video') }}" placeholder="Link video">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="overview" class="col-sm-3 control-label">Tổng quan</label>

                      <div class="input-group col-sm-5">
                        <textarea name="overview" class="textarea" required placeholder="Mô tả Tổng quan dự án" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">VỊ TRÍ DỰ ÁN</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="des_location" class="col-sm-3 control-label">Mô tả Vị trí</label>

                      <div class="input-group col-sm-5">
                        <textarea name="des_location" class="textarea" required placeholder="Mô tả Vị trí" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="img_location" class="col-sm-3 control-label">Hình ảnh Vị trí</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" required name="img_location" id="img_location" accept="image/*">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">MẶT BẰNG TỔNG THỂ DỰ ÁN</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="des_og" class="col-sm-3 control-label">Mô tả Mặt bằng</label>

                      <div class="input-group col-sm-5">
                        <textarea name="des_og" class="textarea" required placeholder="Mô tả Mặt bằng" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="img_og" class="col-sm-3 control-label">Hình ảnh Mặt bằng</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" required name="img_og" id="img_og" accept="image/*">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>


                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">CÁC MẪU VILLAS</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="des_villas" class="col-sm-3 control-label">Giới thiệu chung</label>

                      <div class="input-group col-sm-5">
                        <textarea name="des_villas" required placeholder="Giới thiệu chung Các mẫu villas"  style="width: 100%; height: 120px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample1" class="col-sm-3 control-label">Tên mẫu 1</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample1" id="sample1" value="{{ old('sample1') }}" placeholder="Tên mẫu Villa 1">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img1" class="col-sm-3 control-label">Hình ảnh mẫu 1</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" required class="form-control" name="sp_img1" id="sp_img1" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample2" class="col-sm-3 control-label">Tên mẫu 2</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample2" id="sample2" value="{{ old('sample2') }}" placeholder="Tên mẫu Villa 2">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img2" class="col-sm-3 control-label">Hình ảnh mẫu 2</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" required  class="form-control" name="sp_img2" id="sp_img2" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample3" class="col-sm-3 control-label">Tên mẫu 3</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample3" id="sample3" value="{{ old('sample3') }}" placeholder="Tên mẫu Villa 3">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img3" class="col-sm-3 control-label">Hình ảnh mẫu 3</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" required class="form-control" name="sp_img3" id="sp_img3" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample4" class="col-sm-3 control-label">Tên mẫu 4</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample4" id="sample4" value="{{ old('sample4') }}" placeholder="Tên mẫu Villa 4">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img4" class="col-sm-3 control-label">Hình ảnh mẫu 4</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" required class="form-control" name="sp_img4" id="sp_img4" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample5" class="col-sm-3 control-label">Tên mẫu 5</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample5" id="sample5" value="{{ old('sample5') }}" placeholder="Tên mẫu Villa 5">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img5" class="col-sm-3 control-label">Hình ảnh mẫu 5</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" required class="form-control" name="sp_img5" id="sp_img5">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">CHÍNH SÁCH ĐẦU TƯ</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve1" class="col-sm-3 control-label">Chính sách 1</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve1" id="inve1" value="{{ old('inve1') }}" placeholder="Tên Chính sách 1">
                        <textarea class="textarea" name="des_iv1" required placeholder="Nội dung Chính sách 1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve2" class="col-sm-3 control-label">Chính sách 2</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve2" id="inve2" value="{{ old('inve2') }}" placeholder="Tên Chính sách 2">
                        <textarea class="textarea" name="des_iv2" required placeholder="Nội dung Chính sách 2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve3" class="col-sm-3 control-label">Chính sách 3</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve3" id="inve3" value="{{ old('inve3') }}" placeholder="Tên Chính sách 3">
                        <textarea class="textarea" name="des_iv3" required placeholder="Nội dung Chính sách 3" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve4" class="col-sm-3 control-label">Chính sách 4</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve4" id="inve4" value="{{ old('inve4') }}" placeholder="Tên Chính sách 4">
                        <textarea class="textarea" name="des_iv4" required placeholder="Nội dung Chính sách 4" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve5" class="col-sm-3 control-label">Chính sách 5</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve5" id="inve5" value="{{ old('inve5') }}" placeholder="Tên Chính sách 5">
                        <textarea class="textarea" name="des_iv5" required placeholder="Nội dung Chính sách 5" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">TIẾN ĐỘ THANH TOÁN</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="payment" class="col-sm-3 control-label">Mô tả Tiến độ Thanh toán</label>

                      <div class="input-group col-sm-5">
                        <textarea class="textarea" name="payment" required placeholder="Mô tả Tiến độ Thanh toán" style=""></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>


                 <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">TIẾN ĐỘ XÂY DỰNG</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="const" class="col-sm-3 control-label">Mô tả Tiến độ Xây dựng</label>

                      <div class="input-group col-sm-5">
                        <textarea class="textarea" name="const" required placeholder="Mô tả Tiến độ Xây dựng" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-footer">
                  <div class="col-sm-3">
                    <a href="#" class="btn btn-default pull-right">Danh sách </a>
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
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script type="text/javascript">
    $(".textarea").wysihtml5();
  </script>
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
  <script type="text/javascript">
    var list = $(document).ready(function(){
      url = '{{ asset('admin/project/list-main-project') }}';
      $.ajax({
          url : url,
          type : "get",
          cache : false,
          success:function(data){
            $(data).each(function(index){
              var value = data[index]["id"];
              var name = data[index]["name"];
              var option = '<option value="'+value+'">'+name+'</option>';
              $('#main-project').after(option);
            });

          },
          error:function(data){
              console.log('Error'+data);
          }
      });
    });

    $('#btn-show-add-mp').click(function(e){
      e.preventDefault();
      $(this).addClass('hide');
      $('#add-main-project').removeClass('hide');

    });
    $('#btn-cancle').click(function(){      
      $('#btn-add-mp').removeClass('hide');
      $('#add-main-project').addClass('hide');
    });
    $('#btn-add-mp').click(function(){
      var mainproject = $('#input-name').val();
      var url =  $(this).attr('url-data');
      var data = {
        mainproject: mainproject,
        _token: $(this).data('token'),
      }
      $.ajax({
        url : url,
        type : "post",
        cache : false,
        data : data,
        success:function(data){
          var value = data["id"];
          var name = data["name"];
          var option = '<option value="'+value+'" selected>'+name+'</option>';
          $('#main-project').after(option);
          $('#btn-add-mp').removeClass('hide');
          $('#btn-show-add-mp').removeClass('hide');
          $('#add-main-project').addClass('hide');
          alert('Đã hòan tất thêm mục chọn.');
        },
        error:function(data){
            console.log('Error'+data);
        }
      });

    });
  </script>
@endsection