  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{url('assets/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image">
      <span class="brand-text font-weight-light">Canzuk</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('assets/images/logo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link @yield('dashboard_select')">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('visitor.Inquries')}}" class="nav-link @yield('pending_select')">
              <i class="nav-icon fa fa-list"></i>
              <i class="fas fa-ballot-check"></i>
              <p>Inquries</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/completed')}}" class="nav-link @yield('complete_select')">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>Completed</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/rejected')}}" class="nav-link @yield('reject_select')">
              <i class="nav-icon fas fa-times-circle"></i>
              <p>Rejected</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="{{ route('manage.front.logo')}}" class="nav-link @yield('logo_select')">
              <i class="nav-icon fas fa-image"></i>
              <p>Manage logo</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('manage.front.slider')}}" class="nav-link @yield('slider_select')">
              <i class="nav-icon far fa-caret-square-right"></i>
              <p>Manage slider</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('view.contact_address')}}" class="nav-link @yield('contact_select')">
              <i class="nav-icon 	fas fa-angle-double-right"></i>
              <p>Manage Contact</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('view.home_content')}}" class="nav-link @yield('home_content_select')">
              <i class="nav-icon fas fa-check-square"></i>
              <p>Manage Home data </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('view.home_services')}}" class="nav-link @yield('home_services')">
              <i class="nav-icon fas fa-certificate"></i>
              <p>Manage Services </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('view.support_text')}}" class="nav-link @yield('below_footer')">
              <i class="nav-icon far fa-building"></i>
              <p>After  Services Text </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('view.about_data')}}" class="nav-link @yield('about_content')">
              <i class="nav-icon far fa-building"></i>
              <p>About us  Text </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>