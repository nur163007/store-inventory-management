<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Screen extends -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Profile Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" style="height:40px;width:40px;margin-top:-8px;"alt="User Image">
            <span>{{Auth::user()->name ?? ''}}</span>
            <i class="fas fa-caret-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>