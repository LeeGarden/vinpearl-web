<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            @if (Auth::guard('admin')->user()->image == '')                
              <img src="{{ asset('admin') }}/dist/img/default_avatar.png" class="img-circle" alt="User Image">
            @else
              <img src="{{ asset('uploads/images') }}/{{Auth::guard('admin')->user()->image }}" class="img-circle" alt="User Image">
            @endif
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name }} </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      {{-- <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form --> --}}
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>        
        <li class="active treeview">
          <a href="{{ asset('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-microchip"></i> <span>System Managerment</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ asset('admin/role/list') }}"><i class="fa fa-circle-o"></i>Role</a></li>
            <li><a href="{{ asset('admin/admin/list') }}"><i class="fa fa-user-circle-o"></i>Admin</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{ asset('admin/event/list') }}">
            <i class="fa fa-dashboard"></i> <span>Event</span>
          </a>
        </li>
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>       --}}  
      </ul>
    </section>
    <!-- /.sidebar -->