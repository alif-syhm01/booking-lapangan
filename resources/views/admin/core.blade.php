<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-purple border-bottom-0">
            <!-- left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button" id="burger-button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- notifications dropdown menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 user requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <!-- messages dropdown menu -->
                <li class="nav-item dropdown">
                    <a href="javascript:;" class="nav-link" data-toggle="dropdown">
                        <div class="media" style="margin-top: -5px">
                            <img src="{{ asset('images/default1.jpg') }}" alt="User Avatar" class="img-size-32 mr-3 img-circle">
                            <div class="media-body mt-2">
                              <h3 class="dropdown-item-title">
                                <span id="user-name">Admin</span>
                                <span class="float-right text-sm text-danger"></span>
                              </h3>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a href="javascript:;" class="dropdown-item">
                            <i class="fas fa-user-cog mr-3 text-muted"></i><span class="text-muted text-sm">User Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:;" class="dropdown-item" id="logout">
                            <i class="fas fa-sign-out-alt mr-3 text-muted"></i><span class="text-muted text-sm ml-1">Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- end navbar -->
        <!-- main sidebar container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('admin') }}" class="brand-link navbar-purple">
                <img src="{{ asset('images/logo-96.png') }}" alt="brand-logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bolder">Booking Lapangan</span>
            </a>
            <!-- sidebar -->
            <div class="sidebar">
                <!-- sidebar menu -->
                @yield('sidebar-menu')
            </div>
        </aside>
        <!-- content wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- content header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-left">
                                @yield('content-header')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content-body')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/admin/app.js') }}"></script>
    @yield('footer-asset')
</body>
</html>