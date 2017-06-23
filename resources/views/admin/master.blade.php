<!DOCTYPE html>
<html>
<head>
  @include('admin.include.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      @include('admin.include.header')    
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      @include('admin.include.aside')   
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content-wrapper')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.8
      </div>
      <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>


    @include('admin.include.right-aside')
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  @include('admin.include.script')
  @yield('script')
</body>
</html>
