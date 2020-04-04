<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>{{project_name}} -Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Xplex" name="author">
    <link rel="shortcut icon" href="{{url('upstarter/img/default/icons/favicon.png')}}"> @yield('header')

    <link href="{{url('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('dashboard/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('dashboard/assets/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{route('home')}}" class="logo"><span>
                            <img
                                    src="{{url('upstarter/img/default/logos/logo_white.svg')}}" alt=""
                                    height="30"> </span><i><img
                                    src="{{url('upstarter/img/default/icons/favicon.png')}}" alt=""
                                    height="45"></i></a>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list d-none d-md-block">
                        <form role="search" class="app-search">

                        </form>
                    </li>
                    <!-- language-->
                    <!-- full screen -->
                    <li class="dropdown notification-list d-none d-md-block"><a class="nav-link waves-effect" href="#" id="btn-fullscreen"><i
                                        class="mdi mdi-fullscreen noti-icon"></i></a>
                    </li>
                    {{--left side top--}}
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{url('dashboard/assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle">{{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="{{route('change-password')}}">
                                    <i class="mdi mdi-settings"></i>Password
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power text-danger"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i>
                            </button>
                    </li>
                    <li class="d-none d-sm-block">

                    </li>
                </ul>
            </nav>
        </div>
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li><a href="{{route('home')}}" class="waves-effect"><i class="ti-home"></i>
                                    <span>Dashboard</span></a>
                        </li>

                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-upload"></i><span> Upload <span
                                                class="float-right menu-arrow"><i
                                                    class="mdi mdi-chevron-right"></i></span></span></a> @include('admin_panel.layouts.sidebar.upload_menu')
                        </li>
                        {{--
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i--}} {{--class="ti-reload"></i><span>Scan & Backup</span></a>
                        </li>--}}
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-folder"></i><span> Explore<span
                                                class="float-right menu-arrow"><i
                                                    class="mdi mdi-chevron-right"></i></span></span></a> @include('admin_panel.layouts.sidebar.explore_menu')
                        </li>
                        {{--
                        <li class="menu-title">Settings</li>--}} {{--
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-settings"></i>--}}
                                    {{--<span>Settings<span class="float-right menu-arrow"><i--}}
                                                    {{--class="mdi mdi-chevron-right"></i></span></span></a>--}} {{--
                            <ul class="submenu">--}} {{--
                                <li><a href="ui-alerts.html"><i class="ti-user"></i> Admin Panel</a></li>--}} {{--
                                <li><a href="ui-buttons.html"><i class="ti-eraser"></i> Reset Password</a></li>--}} {{--

                            </ul>--}} {{--
                        </li>--}}


                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <footer class="footer">© 2019 {{project_name}} - Dashboard <span class="d-none d-sm-inline-block">- Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Turtle Venture</span>.
            </footer>
            @yield('modal')
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{url('dashboard/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('dashboard/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{url('dashboard/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('dashboard/assets/js/waves.min.js')}}"></script>
    <!-- Jquery-Ui -->
    @yield('footer')
    <script src="{{url('dashboard/assets/js/app.js')}}"></script>
</body>

</html>