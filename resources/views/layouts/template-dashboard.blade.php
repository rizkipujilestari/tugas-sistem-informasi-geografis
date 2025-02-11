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
                    <b>Pray My Way</b>
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
                    {{-- <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a> --}}
                    <a href="{{ url('/admin/dashboard') }}"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>

                @if(auth()->check())
                    @if(in_array(auth()->user()->role, ['admin']))
                        <li>
                            <a href="{{ url('/admin/locations') }}"><span class="icon edit" aria-hidden="true"></span>Data Lokasi</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/religion') }}"><span class="icon paper" aria-hidden="true"></span>Data Agama</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/districts') }}"><span class="icon folder" aria-hidden="true"></span>Data Kecamatan</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/users') }}"><i data-feather="user" aria-hidden="true"></i> &nbsp; Data Users</a>
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