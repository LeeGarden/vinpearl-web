@extends('admin.master')
@section('title')Dự án @endsection

  <!-- Data table -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách Dự án
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Dự án</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
        <a href="{{ URL::route('admin.project.getAdd') }}" class="btn btn-primary"> 
          <i class="fa fa-plus"></i> Thêm Dự án</a>
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Dự án</th>
            <th>Thời gian</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listProject as $item)
            <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['name']}}</td>
              <td>{{ $item['updated_at']}}</td>
              <td>
                {{-- <a href="#" class="showModal" url-data="{{ asset('admin/event/detail') }}/{{ $item['id'] }}" title="Xem nhanh"><i class="fa fa-search-plus"></i></a> --}}
                <a href="{{ asset('admin/project/edit') }}/{{ $item['id'] }}" title="Edit"><i class="fa fa-cog"></i></a>
                <a href="#" title="Xóa sự kiện" id-data="{{ $item['id'] }}" class="showDelete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!--Show data Modal -->
    <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="exampleModalLabel">Thông tin Sự kiện</h3>
          </div>
          <form class="form-horizontal">
          <div class="modal-body">
            <div class="form-group">
                <label class="col-md-3 control-label">Tên sự kiện</label>
                <div class="col-md-8" id="title">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-3 control-label">Nội dung</label>
                <div class="col-md-8" id="content">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-3 control-label">Thời gian b.đầu</label>
                <div class="col-md-8" id="datetime">
                </div>
            </div>
          </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            <a class="btn btn-primary" id="submit">Chi tiết</a>
          </div>
        </div>
      </div>
    </div>
    <!--Show delete Modal dialog-->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="exampleModalLabel">Xóa Sự kiện</h3>
          </div>
          <form class="form-horizontal" method="POST" id="form-delete">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <input type="hidden" name="_method" value="DELETE" >
            <div class="modal-body">
              <span style="font-size: 18px">Xóa dữ liệu này. Bạn chắc chắn xóa?</span>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
              <button type="submit" class="btn btn-primary" id="btn-delte">Đồng ý</button>
            </div>
          </form>
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
    $(".showDelete").click(function(){
      var id = $(this).attr('id-data');
      $('#form-delete').attr('action','{{ asset('admin/project/delete') }}/'+id);
      //show modal
      $('#modalDelete').modal('show');

    });
    $('.showModal').click(function(){
            var url = $(this).attr('url-data');
            var data = {
            }
            $.ajax({
                url : url,
                type : "get",
                cache : false,
                success:function(data){
                    console.log(data)
                    $('#title').html('<span>'+data['title']+'</span>');
                    $('#content').html('<span>'+data['content']+'</span>');
                    $('#datetime').html('<span>'+data['time_begin'] + "</span><span style='padding-left:10px'>" +data['date_begin'] +'</span>');
                    //css for tag SPAN
                    $(".form-group > .col-md-8").css({"margin-top": "5px"});
                    $(".col-md-8 > span").css({"font-size": "18px"});
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