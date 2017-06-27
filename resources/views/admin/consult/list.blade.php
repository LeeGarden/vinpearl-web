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
                <a href="{{ asset('admin/consult/detail') }}/{{ $item['id'] }}" title="Detail"><i class="fa fa-cog"></i></a>    
                <a href="#" class="showModal" title="Detail"><i class="fa fa-cog"></i></a>    
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
        <h5 class="modal-title" id="exampleModalLabel">Test Info</h5>
      </div>
      <form class="form-horizontal">
      <div class="modal-body">
        <div class="form-group">
            <label class="col-md-2 control-label">Name of test</label>
            <div class="col-md-9" id="name">
            </div>
        </div>  
        <div class="form-group" >
            <label class="col-md-2 control-label">Time Total (min)</label>
            <div class="col-md-9" id="timetotal">
            </div>
        </div>                    
        <div class="form-group">
            <label class="col-md-2 control-label">Expired</label>
            <div class="col-md-9" id="expired">
            </div>
        </div>  
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Choose Question</button>
        <button type="button" class="btn btn-primary" id="submit" data-token="{{ csrf_token() }}">Save Test</button>
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
  <script type="text/javascript">
    $('.showModal').click(function(){
            var url = '/admin/consult/';
            var data = {
            }
            $.ajax({
                url : url + 'detail/1',
                type : "get",
                cache : false,
                
                success:function(data){
                    console.log(data['fulname']);
                    
                    $('#timetotal').html('<span style="font-size:18px">'+data['fulname']+'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ut alias aspernatur dolore ex ad nobis tempore officiis eligendi voluptas, tempora repudiandae, modi nulla ratione explicabo dolorum tenetur aliquam illo rerum odio et labore, ipsum vitae doloremque. Nemo aliquam doloremque molestiae, cupiditate quibusdam eligendi rerum perspiciatis quidem. Similique, corporis, fugit! Nesciunt cum laboriosam, repudiandae, provident doloribus voluptatibus possimus ipsum. Quisquam dignissimos nisi vero laboriosam asperiores hic tenetur! Iure cumque, quae aliquam esse corporis voluptate reiciendis aliquid vero dignissimos omnis animi sapiente tempora soluta sequi itaque quasi natus debitis. Commodi amet, ea saepe hic at repellat necessitatibus laudantium molestias dolorem autem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ut alias aspernatur dolore ex ad nobis tempore officiis eligendi voluptas, tempora repudiandae, modi nulla ratione explicabo dolorum tenetur aliquam illo rerum odio et labore, ipsum vitae doloremque. Nemo aliquam doloremque molestiae, cupiditate quibusdam eligendi rerum perspiciatis quidem. Similique, corporis, fugit! Nesciunt cum laboriosam, repudiandae, provident doloribus voluptatibus possimus ipsum. Quisquam dignissimos nisi vero laboriosam asperiores hic tenetur! Iure cumque, quae aliquam esse corporis voluptate reiciendis aliquid vero dignissimos omnis animi sapiente tempora soluta sequi itaque quasi natus debitis. Commodi amet, ea saepe hic at repellat necessitatibus </span>');
                    
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