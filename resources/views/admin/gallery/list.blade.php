@extends('admin.master')
@section('title')Bộ sưu tập @endsection

  <!-- Data table -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách Hình ảnh
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Hình ảnh</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
      <a href="#" id="add-image" class="btn btn-primary"> 
          <i class="fa fa-plus"></i> Thêm Hình ảnh</a>
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Hình ảnh</th>
            <th>Admin</th>
            <th>Ngày tạo</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listImage as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td><img src="{{ asset('uploads/images') }}/{{ $item->image }}" width="100px"></td>
              <td>{{ $item->admin->name }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>{{ $item->updated_at }}</td>
              <td>
                <a url="{{ asset('admin/gallery/edit') }}/{{ $item['id'] }}" title="Đổi hình ảnh" class="showUpdate"><i class="fa fa-cog"></i></a>
                <a url="{{ asset('admin/gallery/delete') }}/{{ $item['id'] }}" title="Xóa Hình ảnh" class="showDelete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          @endforeach   
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!--Add image Modal -->
  <div class="modal fade" id="modalAddImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title" id="exampleModalLabel">Thêm Hình ảnh</h3>
        </div>
        <form class="form-horizontal" action="{{ route('admin.gallery.postAdd') }}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Hình ảnh</label>
                <div class="col-md-8">                    
                  <input  type="file" accept="image/*" class="form-control" name="image" id="image" required>
                </div>
            </div>
            <div class="form-group">
              <div id="image-holder" class="col-sm-8 col-sm-offset-3">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Thêm Hình ảnh</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--Edit image Modal -->
  <div class="modal fade" id="modalUpdateImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title" id="exampleModalLabel">Cập nhập Hình ảnh</h3>
        </div>
        <form class="form-horizontal form-edit" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Hình ảnh</label>
                <div class="col-md-8">                    
                  <input  type="file" accept="image/*" class="form-control" name="image" id="edit-image" required>
                </div>
            </div>
            <div class="form-group">
              <div id="image-holder2" class="col-sm-8 col-sm-offset-3">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Cập nhập Hình ảnh</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--Delete image Modal -->
  <div class="modal fade" id="modalDeleteImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title" id="exampleModalLabel">Xóa Hình ảnh</h3>
        </div>
        <form class="form-horizontal form-delete" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="DELETE">
          <div class="modal-body">
            Xóa hình ảnh này. Bạn chắc chắc muốn xóa?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Xóa Hình ảnh</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
@section('script')
  <!-- DataTables -->
  <script src="{{ asset('/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/admin') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
  $(function(){
    $("#data-table").DataTable({
      "language": {
            "lengthMenu": "Hiển thị _MENU_ mục",
            "zeroRecords": "Không có dữ liệu",
            "info": "Trang _PAGE_ của _PAGES_",
            "infoEmpty": "Không có dữ liệu",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Tìm kiếm",
            "decimal":        "",
            "emptyTable":     "Không có dữ liệu trong bảng",
            "loadingRecords": "Đang tải...",
            "processing":     "Đang xử lý...",
            "paginate": {
                "first":      "Đầu",
                "last":       "Cuối",
                "next":       "Sau",
                "previous":   "Trước"
            },
        }
    });
  });
  </script>
  <script type="text/javascript">

    $('#add-image').click(function(){            
      //show modal
      $('#modalAddImage').modal('show');
    });

    $('.showUpdate').click(function(){            
      //show modal
      $('#modalUpdateImage').modal('show');
      var url = $(this).attr('url');
      $('.form-edit').attr('action',url);
    });

    $('.showDelete').click(function(){   
      //show modal
      $('#modalDeleteImage').modal('show');
      var url = $(this).attr('url');
      $('.form-delete').attr('action',url);
    });
  </script>
  <script>
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
          }else {
            alert("This browser does not support FileReader.");
          }
      }else {
        alert("Vui lòng chọn ảnh");
      }
    });
    $("#edit-image").on('change', function() {
        //Get count of selected files
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#image-holder2");
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
          }else {
            alert("This browser does not support FileReader.");
          }
      }else {
        alert("Vui lòng chọn ảnh");
      }
    });
</script>
@endsection