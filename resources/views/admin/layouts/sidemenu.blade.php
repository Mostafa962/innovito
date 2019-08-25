<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{route('admin.home.index')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>Users</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('admin.coordinators.index')}}"><i class="fa fa-arrow-right"></i>Training Coordinators</a></li>
            <li><a href="{{route('admin.employees.index')}}"><i class="fa fa-arrow-right"></i>Employees</a></li>
        </ul>

    </li>

      <li><a href="{{route('admin.media.index')}}"><i class="fa fa-image"></i> <span>Media</span></a></li>

      <li><a href="{{route('admin.departments.index')}}"><i class="fa fa-building"></i> <span>Departments</span></a></li>

      <li><a href="{{route('admin.branches.index')}}"><i class="fa fa-circle"></i> <span>Branches</span></a></li>

      <li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle"></i> <span>Categories</span></a></li>

      <li><a href="{{route('admin.settings.index')}}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
