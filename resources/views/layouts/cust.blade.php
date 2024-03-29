
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('customer-template/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href=" {{ asset('customer-template/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href=" {{ asset('customer-template/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href=" {{ asset('customer-template/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('customer-template/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href=" {{ asset('customer-template/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
       

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a  href="{{ route('customer.index') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('customer.profile') }}">
                                <i class="far fa-check-square"></i>Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('appointment.create') }}">
                                <i class="far fa-check-square"></i>Appointment</a>
                        </li>

                        <li>
                            <a href="{{ route('service.indexCust') }}">
                                <i class="far fa-check-square"></i>Service</a>
                        </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    {{-- notification,email yg kt atas --}} 
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('customer-template/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('customer-template/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                            </div>
                                            <div class="account-dropdown__footer">{{-- logout --}}
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                          @yield('content')
                      
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>
    <!-- Jquery JS-->
    <script src="{{ asset('customer-template/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('customer-template/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('customer-template/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('customer-template/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('customer-template/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('customer-template/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('customer-template/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('customer-template/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
