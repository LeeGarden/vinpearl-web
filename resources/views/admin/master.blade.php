<!DOCTYPE html>
<html>
<head>
  <!--Include all common CSS & meta-->
  @include('admin.include.head')
  <!--Section include CSS of each page-->
  @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!--Include header of page-->
      @include('admin.include.header')    
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!--Include left-aside of page-->
      @include('admin.include.aside')   
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!--Section include CONTENT of each page-->
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


    <!--Include right-aside of page-->
    @include('admin.include.right-aside') 
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!--Include all common SCRIPT-->
  @yield('script')
  <!--Section include SCRIPT of each page-->
  @include('admin.include.script')
</body>
</html>
