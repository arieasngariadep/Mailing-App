<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->


    @if (auth()->user()->level == "admin" || auth()->user()->level == "karyawan"   )
    <li class="nav-item">
      <a href="{{ route('home') }}" class="{{ Request::is('home')?'active':''}} nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    @endif
    @if (auth()->user()->level == "admin" || auth()->user()->level == "karyawan")
    <li class="nav-item">
      <a href="{{ route('register') }}" class="{{ Request::is('register')?'active':''}} nav-link">
        <i class="nav-icon fas fa-file"></i>
        <p>Register Surat</p>
      </a>
    </li>
    @endif
    @if (auth()->user()->level == "admin")
    <li class="nav-item">
      <a href="{{ route('user') }}" class="{{ Request::is('user')?'active':''}} nav-link ">
        <i class="nav-icon fas fa-file"></i>
        <p>User</p>
      </a>
    </li>
    @endif
    <li class="nav-header">Doc</li>
    <li class="nav-item">
        <a href="{{ route('logout')}}" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Logout</p>
        </a>
    </li>
  </ul>
