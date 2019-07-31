 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{($menu == 'dashboard')?'active':''}}">
        <a class="nav-link" href="{{url('/admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item  {{($menu == 'settings')?'active':''}}">
        <a class="nav-link {{($menu == 'settings')?'':'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="{{($menu == 'settings')?'false':''}}" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>General</span>
        </a>
        <div id="collapseTwo" class="collapse {{($menu == 'settings')?'show':''}}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item {{($menu == 'settings')?'active':''}}" href="{{url('/admin/settings')}}">Site Settings</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{($menu == 'portfolio')?'active':''}}{{($menu == 'social')?'active':''}}">
        <a class="nav-link {{($menu == 'portfolio')?'':'collapsed'}}{{($menu == 'social')?'':'collapsed'}}" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="{{($menu == 'portfolio')?'false':''}}{{($menu == 'social')?'false':''}}" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Components</span>
        </a>
        <div id="collapseUtilities" class="collapse {{($menu == 'portfolio')?'show':''}}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{($menu == 'portfolio')?'active':''}}" href="{{ url('/admin/portfolio') }}">Portfolio</a>
            <a class="collapse-item {{($menu == 'social')?'active':''}}" href="{{ url('/admin/social') }}">Social Links</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Nav Item - Charts -->
      <li class="nav-item {{ ($menu == 'message')? 'active' : ''}}">
        <a class="nav-link {{ ($menu == 'message')? 'active' : ''}}" href="{{ url('/admin/message') }}">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Messages</span></a>
      </li>

     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>