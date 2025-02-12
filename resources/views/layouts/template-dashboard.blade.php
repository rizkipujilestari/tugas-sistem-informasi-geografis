<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Pray My Way</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('elegant/img/svg/logo.svg') }}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('elegant/css/style.min.css') }}">

  <style>
    .alert {
        padding: 20px;
        color: white;
        border-radius: 20px;
    }

    .alert-success-custom {
        background-color: #88d488;
    }

    .alert-danger-custom {
        background-color: #dc4545;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
  </style>
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
{{-- <a class="skip-link sr-only" href="#skip-target">Skip to content</a> --}}
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                {{-- <span class="icon logo" aria-hidden="true"></span> --}}
                <div class="logo-text">
                    <h3 style="color:white;">Pray My Way</h3>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a href="{{ url('/admin/dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <span class="icon home" aria-hidden="true"></span>Dashboard
                    </a>
                </li>

                @if(auth()->check())
                    @if(in_array(auth()->user()->role, ['admin']))
                        <li>
                            <a href="{{ url('/admin/locations') }}" class="{{ request()->is('admin/locations') ? 'active' : '' }}">
                                <span class="icon edit" aria-hidden="true"></span>Data Lokasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/religion') }}" class="{{ request()->is('admin/religion') ? 'active' : '' }}">
                                <span class="icon paper" aria-hidden="true"></span>Data Agama
                            </a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>Data Daerah
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="{{ url('/admin/districts') }}" class="{{ request()->is('admin/districts') ? 'active' : '' }}">
                                        Kecamatan
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/admin/users') }}" class="{{ request()->is('admin/users') ? 'active' : '' }}">
                                <i data-feather="user" aria-hidden="true"></i> &nbsp; Data Users
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="#"><span class="icon folder" aria-hidden="true"></span>Jadwal Ibadah</a>
                        </li>
                    @endif
                @endif

            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        
    </div>
</aside>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <nav class="main-nav--bg">
        <div class="container main-nav">
            <div class="main-nav-start">
            </div>
            <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>
            
            <div class="notification-wrapper">
                <i> {{ $auth_user->name }} </i>
            </div>
            <div class="nav-user-wrapper">
                <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                <span class="sr-only">My profile</span>
                <span class="nav-user-img">
                    <i data-feather="settings" aria-hidden="true"></i>
                </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
                    {{-- <li><a href="##">
                        <i data-feather="user" aria-hidden="true"></i>
                        <span>Profile</span>
                        </a>
                    </li>
                    <li><a href="##">
                        <i data-feather="settings" aria-hidden="true"></i>
                        <span>Account settings</span>
                        </a>
                    </li> --}}
                    <li><a class="danger" href="{{ url('/logout') }}">
                        <i data-feather="log-out" aria-hidden="true"></i>
                        <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>

    <!-- ! Main -->
    <main class="main" style="padding: 30px" id="skip-target">
        @yield('content')
    </main>
    
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">
      <p> Pray My Way © 2025 - Template Dashboard : <a href="elegant-dashboard.com" target="_blank"
          rel="noopener noreferrer">elegant-dashboard.com</a></p>
    </div>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="{{ asset('elegant/plugins/chart.min.js') }}"></script>
<!-- Icons library -->
<script src="{{ asset('elegant/plugins/feather.min.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('elegant/js/script.js') }}"></script>
</body>

</html>