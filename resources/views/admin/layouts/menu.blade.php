<ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview {{ request()->is('*admin') ? 'active':'' }}">
      <a href="{{ route('admin.dashboard') }}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview {{ request()->is('*categories*') ? 'active':'' }}">
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
    <li class="treeview {{ request()->is('*destinations*') ? 'active':'' }}">
      <a href="#">
        <i class="fa fa-suitcase"></i> <span>Destinations</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ route('admin.destinations.index') }}"><i class="fa fa-list"></i> index</a></li>
        <li><a href="{{ route('admin.destinations.create') }}"><i class="fa fa-plus"></i> create</a></li>
      </ul>
    </li>
    <li class="treeview {{ request()->is('*users*') ? 'active':'' }}">
      <a href="#">
        <i class="fa fa-users"></i> <span>Users</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-list"></i> index</a></li>
      </ul>
    </li>
    <li class="treeview {{ request()->is('*purchases*') ? 'active':'' }}">
      <a href="#">
        <i class="fa fa-users"></i> <span>Purchases</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="{{ route('admin.purchases.index') }}"><i class="fa fa-list"></i> index</a></li>
      </ul>
    </li>
  </ul>
