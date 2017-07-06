@extends('admin.master')
@section('page-title')  Căn hộ @endsection
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
        Sửa thông tin Căn hộ
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Căn hộ</a></li>
        <li class="active">Sửa</li>
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
                  <h3 class="box-title col-md-6 col-md-offset-1">TỔNG QUAN CĂN HỘ</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="name" class="col-sm-3 control-label">Tên Căn hộ</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $apartment->name }}" placeholder="Tên Căn hộ" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="description" class="col-sm-3 control-label">Mô tả</label>

                      <div class="input-group col-sm-5">
                        <textarea name="description" placeholder="Mô tả chung" style="width: 100%; height: 120px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;" required>{{ $apartment->description }}</textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="image" class="col-sm-3 control-label">Ảnh hiện thị</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" name="image" id="image" accept="image/*">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="link_video" class="col-sm-3 control-label">Link video yotube</label>

                      <div class="input-group col-sm-5">
                        <input type="text" required class="form-control" name="link_video" id="link_video" value="{{ $apartment->video }}" placeholder="Link video">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="overview" class="col-sm-3 control-label">Tổng quan</label>

                      <div class="input-group col-sm-5">
                        <textarea name="overview" class="textarea" required placeholder="Mô tả Tổng quan Căn hộ" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->overview }}</textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">VỊ TRÍ CĂN HỘ</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="des_location" class="col-sm-3 control-label">Mô tả Vị trí</label>

                      <div class="input-group col-sm-5">
                        <textarea name="des_location" class="textarea" required placeholder="Mô tả Vị trí" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->location->description }}</textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="img_location" class="col-sm-3 control-label">Hình ảnh Vị trí</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" name="img_location" id="img_location" accept="image/*">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-header with-border">
                  <h3 class="box-title col-md-6 col-md-offset-1">MẶT BẰNG TỔNG THỂ CĂN HỘ</h3>
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="des_og" class="col-sm-3 control-label">Mô tả Mặt bằng</label>

                      <div class="input-group col-sm-5">
                        <textarea name="des_og" class="textarea" required placeholder="Mô tả Mặt bằng" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->overall_ground->description }}</textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="img_og" class="col-sm-3 control-label">Hình ảnh Mặt bằng</label>

                      <div class="input-group col-sm-5">
                        <input type="file" class="form-control" name="img_og" id="img_og" accept="image/*">
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
                        <textarea name="des_villas" required placeholder="Giới thiệu chung Các mẫu villas"  style="width: 100%; height: 120px; font-size: 14px; line-height: 18px;  border: 1px solid #dddddd; padding: 10px;">{{ $apartment->sample_villa->description }}</textarea>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample1" class="col-sm-3 control-label">Tên mẫu 1</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample1" id="sample1" value="{{ $apartment->sample_villa->sample1->title }}" placeholder="Tên mẫu Villa 1">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img1" class="col-sm-3 control-label">Hình ảnh mẫu 1</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" class="form-control" name="sp_img1" id="sp_img1" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample2" class="col-sm-3 control-label">Tên mẫu 2</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample2" id="sample2" value="{{ $apartment->sample_villa->sample2->title }}" placeholder="Tên mẫu Villa 2">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img2" class="col-sm-3 control-label">Hình ảnh mẫu 2</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*"  class="form-control" name="sp_img2" id="sp_img2" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample3" class="col-sm-3 control-label">Tên mẫu 3</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample3" id="sample3" value="{{ $apartment->sample_villa->sample3->title }}" placeholder="Tên mẫu Villa 3">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img3" class="col-sm-3 control-label">Hình ảnh mẫu 3</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" class="form-control" name="sp_img3" id="sp_img3" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample4" class="col-sm-3 control-label">Tên mẫu 4</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample4" id="sample4" value="{{ $apartment->sample_villa->sample4->title }}" placeholder="Tên mẫu Villa 4">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img4" class="col-sm-3 control-label">Hình ảnh mẫu 4</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" class="form-control" name="sp_img4" id="sp_img4" >
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="form-group">
                      <label for="sample5" class="col-sm-3 control-label">Tên mẫu 5</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="sample5" id="sample5" value="{{ $apartment->sample_villa->sample5->title }}" placeholder="Tên mẫu Villa 5">
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="sp_img5" class="col-sm-3 control-label">Hình ảnh mẫu 5</label>

                      <div class="input-group col-sm-5">
                        <input  type="file" accept="image/*" class="form-control" name="sp_img5" id="sp_img5">
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
                        <input type="text" class="form-control" required name="inve1" id="inve1" value="{{ $apartment->investment->inve1->title }}" placeholder="Tên Chính sách 1">
                        <textarea class="textarea" name="des_iv1" required placeholder="Nội dung Chính sách 1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->investment->inve1->description }}</textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve2" class="col-sm-3 control-label">Chính sách 2</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve2" id="inve2" value="{{ $apartment->investment->inve2->title }}" placeholder="Tên Chính sách 2">
                        <textarea class="textarea" name="des_iv2" required placeholder="Nội dung Chính sách 2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->investment->inve2->description }}</textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve3" class="col-sm-3 control-label">Chính sách 3</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve3" id="inve3" value="{{ $apartment->investment->inve3->title }}" placeholder="Tên Chính sách 3">
                        <textarea class="textarea" name="des_iv3" required placeholder="Nội dung Chính sách 3" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->investment->inve3->description }}</textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve4" class="col-sm-3 control-label">Chính sách 4</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve4" id="inve4" value="{{ $apartment->investment->inve4->title }}" placeholder="Tên Chính sách 4">
                        <textarea class="textarea" name="des_iv4" required placeholder="Nội dung Chính sách 4" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->investment->inve4->description }}</textarea>
                      </div>


                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>

                <div class="box-body">
                    <div class="form-group">
                      <label for="inve5" class="col-sm-3 control-label">Chính sách 5</label>

                      <div class="input-group col-sm-5">
                        <input type="text" class="form-control" required name="inve5" id="inve5" value="{{ $apartment->investment->inve5->title }}" placeholder="Tên Chính sách 5">
                        <textarea class="textarea" name="des_iv5" required placeholder="Nội dung Chính sách 5" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->investment->inve5->description }}</textarea>
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
                        <textarea class="textarea" name="payment" required placeholder="Mô tả Tiến độ Thanh toán" style="">{{ $apartment->payment }}</textarea>
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
                        <textarea class="textarea" name="const" required placeholder="Mô tả Tiến độ Xây dựng" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $apartment->construction }}</textarea>
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
                    <button type="submit" class="btn btn-info pull-right">Cập nhập</button>
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
  <script type="text/javascript">
    var list = $(document).ready(function(){
      url = '{{ asset('admin/apartment/list-main-apartment') }}';
      $.ajax({
          url : url,
          type : "get",
          cache : false,
          success:function(data){
            $(data).each(function(index){
              var value = data[index]["id"];
              var name = data[index]["name"];
              var option = '<option value="'+value+'">'+name+'</option>';
              $('#main-apartment').after(option);
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
      $('#add-main-apartment').removeClass('hide');

    });
    $('#btn-cancle').click(function(){      
      $('#btn-add-mp').removeClass('hide');
      $('#add-main-apartment').addClass('hide');
    });
    $('#btn-add-mp').click(function(){
      var mainapartment = $('#input-name').val();
      var url =  $(this).attr('url-data');
      var data = {
        mainapartment: mainapartment,
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
          $('#main-apartment').after(option);
          $('#btn-add-mp').removeClass('hide');
          $('#btn-show-add-mp').removeClass('hide');
          $('#add-main-apartment').addClass('hide');
          alert('Đã hòan tất thêm mục chọn.');
        },
        error:function(data){
            console.log('Error'+data);
        }
      });

    });
  </script>
@endsection