@extends('admin.master')
@section('title')Căn hộ @endsection

  <!-- Data table -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables/dataTables.bootstrap.css">
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Danh sách Căn hộ
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Căn hộ</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      @include('admin.include.message')
        <a href="{{ URL::route('admin.apartment.getAdd') }}" class="btn btn-primary"> 
          <i class="fa fa-plus"></i> Thêm Căn hộ</a>
      <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="data-table" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Căn hộ</th>
            <th>Thời gian</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listApartment as $item)
            <tr>
              <td>{{ $item['id']}}</td>
              <td>{{ $item['name']}}</td>
              <td>{{ $item['updated_at']}}</td>
              <td>
                {{-- <a href="#" class="showModal" url-data="{{ asset('admin/event/detail') }}/{{ $item['id'] }}" title="Xem nhanh"><i class="fa fa-search-plus"></i></a> --}}
                <a href="{{ asset('admin/apartment/edit') }}/{{ $item['id'] }}" title="Edit"><i class="fa fa-cog"></i></a>
                <a href="#" title="Xóa thông tin căn hộ" id-data="{{ $item['id'] }}" class="showDelete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
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
@endsection