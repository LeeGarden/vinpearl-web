@extends('admin.master')
@section('title')Tư vấn @endsection

  <!-- Data table -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách cần Tư vấn
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tư vấn</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Họ & tên</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listConsult as $item)
            <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['fulname']}}</td>
              <td>{{ $item['email']}}</td>
              <td>{{ $item['phone']}}</td>
              <td>
                <a href="#" class="showModal" url-data="{{ asset('admin/consult/detail') }}/{{ $item['id'] }}" title="Xem nhanh"><i class="fa fa-search-plus"></i></a>
                <a href="{{ asset('admin/consult/detail') }}/{{ $item['id'] }}" title="Xem chi tiết"><i class="fa fa-folder-open-o"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="exampleModalLabel">Thông tin cần Tư vấn</h3>
          </div>
          <form class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Người gửi</label>
                <div class="col-md-9" id="name">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-2 control-label">Email</label>
                <div class="col-md-9" id="email">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-2 control-label">Điện thoại</label>
                <div class="col-md-9" id="phone">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-2 control-label">Nội dung cần tư vấn</label>
                <div class="col-md-9" id="message">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">Ngày gửi</label>
                <div class="col-md-9" id="created_at">
                </div>
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <button type="button" class="btn btn-primary" id="submit">Chi tiết</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
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
    $('.showModal').click(function(){
            var url = $(this).attr('url-data');
            var data = {
            }
            $.ajax({
                url : url,
                type : "get",
                cache : false,
                success:function(data){
                    // console.log(data)
                    $('#name').html('<span>'+data['fulname']+'</span>');
                    $('#email').html('<span>'+data['email']+'</span>');
                    $('#phone').html('<span>'+data['phone']+'</span>');
                    $('#message').html('<span>'+data['message']+'</span>');
                    $('#created_at').html('<span>'+data['created_at']+'</span>');
                    //css for tag SPAN
                    $(".col-md-9 > span").css("font-size", "18px");
                },
                error:function(data){
                    console.log(data);
                }
            });
      //show modal
      $('#modalData').modal('show');
    });
  </script>

@endsection