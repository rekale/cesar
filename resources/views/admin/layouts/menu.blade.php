<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="{{ route('admin.dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-book"></i> <span>Categories</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ route('admin.categories.index') }}"><i class="fa fa-list"></i> index</a></li>
        <li><a href="{{ route('admin.categories.create') }}"><i class="fa fa-plus"></i> create</a></li>
      </ul>
    </li>
  </ul>
