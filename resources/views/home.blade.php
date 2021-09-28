<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Project - Blank Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/fontawesome/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/morris/morris.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/feather.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a to="index.php" class="logo">
                    <img src="{{ asset('dashboard/assets/img/logo-white.png') }}" alt="Logo">
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="{{ asset('dashboard/assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-bars"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit">
                        <i class="feather-search"></i>
                    </button>
                </form>
            </div>

            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->

            <!-- Header Right Menu -->
            <ul class="nav user-menu">
                <!-- Flag -->
                <li class="nav-item dropdown has-arrow flag-nav mr-2">
                    <a class="nav-link align-items-center" data-toggle="dropdown" href="#" role="button">
                        <img src="{{ asset('dashboard/assets/img/flags/us-1.png') }}" alt="" width="24" height="16"
                            class="lang-flag mr-1">
                        English
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('dashboard/assets/img/flags/us.png') }}" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('dashboard/assets/img/flags/fr.png') }}" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('dashboard/assets/img/flags/es.png') }}" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ asset('dashboard/assets/img/flags/de.png') }}" alt="" height="16"> German
                        </a>
                    </div>
                </li>
                <!-- /Flag -->

                <!-- Fullscreen -->
                <li class="nav-item dropdown">
                    <a href="#" id="btnFullscreen" class="">
                        <i class="feather-maximize"></i>
                    </a>
                </li>
                <!-- /Fullscreen -->

                <!-- Notifications -->
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="feather-bell"></i>
                        <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('dashboard/assets/img/user/user.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Jonathan Doe</span>
                                                    Schedule
                                                    <span class="noti-title">his appointment</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('dashboard/assets/img/user/user1.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Julie Pennington</span>
                                                    has booked her appointment to <span class="noti-title">Ruby
                                                        Perrin</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('dashboard/assets/img/user/user2.jpg')}}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Tyrone Roberts</span>
                                                    sent a amount of $210 for his
                                                    <span class="noti-title">appointment</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{ asset('dashboard/assets/img/user/user4.jpg') }}">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details">
                                                    <span class="noti-title">Patricia Manzi</span>
                                                    send a message
                                                    <span class="noti-title"> to his Mentee</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <li class="nav-item dropdown has-arrow main-drop ml-3">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img src="{{asset('uploads/user_photos').'/'.Auth::user()->photo}}" alt="">
                            {{ Auth::user()->name }}
                            <span class="status online"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="">
                                <i class="feather-user"></i>
                                My Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="feather-power"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /Header Right Menu -->

        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul id="nav">
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class="active">
                            <router-link to="/home">
                                <i class="feather-home"></i>
                                <span>Dashboard</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/firstpage">
                                <i class="feather-user"></i>
                                <span>Mentor</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="mentee.php">
                                <i class="feather-users"></i>
                                <span>Mentee</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="booking-list.php">
                                <i class="feather-list"></i>
                                <span>Booking List</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="categories.php">
                                <i class="feather-disc"></i>
                                <span>Categories</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="transactions-list.php">
                                <i class="feather-dollar-sign"></i><span>Transactions</span></router-link>
                        </li>
                        <li>
                            <router-link to="settings.php">
                                <i class="feather-settings"></i><span>Settings</span></router-link>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-book"></i><span> Reports</span> <span class="menu-arrow"></span>
                            </router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="invoice-report.php">Invoice Reports</router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li>
                            <router-link to="/profile">
                                <i class="feather-user-plus"></i>
                                <span>My Profile</span>
                            </router-link>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-book-open"></i><span>Blog</span> <span class="menu-arrow"></span>
                            </router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="blog.php"> Blog </router-link>
                                </li>
                                <li>
                                    <router-link to="blog-details.php"> Blog Details </router-link>
                                </li>
                                <li>
                                    <router-link to="add-blog.php"> Add Blog </router-link>
                                </li>
                                <li>
                                    <router-link to="edit-blog.php"> Edit Blog </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-lock"></i>
                                <span> Authentication </span> <span class="menu-arrow"></span></router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="login.php"> Login </router-link>
                                </li>
                                <li>
                                    <router-link to="register.php"> Register </router-link>
                                </li>
                                <li>
                                    <router-link to="forgot-password.php"> Forgot Password </router-link>
                                </li>
                                <li>
                                    <router-link to="lock-screen.php"> Lock Screen </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-alert-octagon"></i>
                                <span> Error Pages </span> <span class="menu-arrow"></span></router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="error-404.php">404 Error </router-link>
                                </li>
                                <li>
                                    <router-link to="error-500.php">500 Error </router-link>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <router-link to="blank-page.php">
                                <i class="feather-file"></i>
                                <span>Blank Page</span>
                            </router-link>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li>
                            <router-link to="components.php">
                                <i class="feather-layers"></i>
                                <span>Components</span>
                            </router-link>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-sidebar"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="form-basic-inputs.php">Basic Inputs </router-link>
                                </li>
                                <li>
                                    <router-link to="form-input-groups.php">Input Groups </router-link>
                                </li>
                                <li>
                                    <router-link to="form-horizontal.php">Horizontal Form </router-link>
                                </li>
                                <li>
                                    <router-link to="form-vertical.php"> Vertical Form </router-link>
                                </li>
                                <li>
                                    <router-link to="form-mask.php"> Form Mask </router-link>
                                </li>
                                <li>
                                    <router-link to="form-validation.php"> Form Validation </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <router-link to="#">
                                <i class="feather-layout"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span></router-link>
                            <ul style="display: none;">
                                <li>
                                    <router-link to="tables-basic.php">Basic Tables </router-link>
                                </li>
                                <li>
                                    <router-link to="data-tables.php">Data Table </router-link>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <router-link to="javascript:void(0);">
                                <i class="feather-align-left"></i>
                                <span>Multi
                                    Level</span>
                                <span class="menu-arrow"></span>
                            </router-link>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <router-link to="javascript:void(0);">
                                        <span>Level 1</span>
                                        <span class="menu-arrow"></span>
                                    </router-link>
                                    <ul style="display: none;">
                                        <li>
                                            <router-link to="javascript:void(0);">
                                                <span>Level 2</span>
                                            </router-link>
                                        </li>
                                        <li class="submenu">
                                            <router-link to="javascript:void(0);">
                                                <span> Level 2</span>
                                                <span
                                                    class="menu-arrow"></span>
                                                </router-link>
                                            <ul style="display: none;">
                                                <li>
                                                    <router-link to="javascript:void(0);">Level 3</router-link>
                                                </li>
                                                <li>
                                                    <router-link to="javascript:void(0);">Level 3</router-link>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <router-link to="javascript:void(0);">
                                                <span>Level 2</span>
                                            </router-link>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <router-link to="javascript:void(0);">
                                        <span>Level 1</span>
                                    </router-link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper" id="app">

            <!-- Page Content -->


            <router-view></router-view>


            <!-- Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>

    <!-- Jquery 1.12.4 -->
    <script src="{{ asset('dashboard/assets/js/jquery-1.12.4.min.js') }}"></script>

    <!-- App Js/All Js files -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
