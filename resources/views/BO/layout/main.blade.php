<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Back Office | Asri Graha Hotel </title>
    <link rel="stylesheet" href="{{ asset('/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/costum_bo.css') }}">
    <link rel="shortcut icon" href="{{ asset('/assets/img/logo2.png') }}" />
</head>
<body>

    <div class="container-scroller">
        
        <!-- Nav Header -->

        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="{{ route('BO.dashboard.index') }}">
                        {{Auth::guard('BO')->user()->name}} | Admin
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ route('BO.dashboard.index') }}">
                        <img src="{{ asset('/assets/img/logo2.png') }}" alt="logo" width="100px"/>
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top"> 
                <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h3 class="welcome-text">ASRI GRAHA HOTEL</h1>
                </li>
                </ul>
                <ul class="navbar-nav ms-auto">          
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/img/orang.png') }}" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="{{ asset('assets/img/orang.png') }}" width="30px" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">{{Auth::guard('BO')->user()->name}}</p>
                    </div>
                    <a class="dropdown-item" href="{{route('auth.logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Keluar</a>
                    </div>
                </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <!-- End Nav Header -->

        <div class="container-fluid page-body-wrapper">

            <!-- Menu Sidebar -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('BO.dashboard.index') }}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Data</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Data</span>
                        <i class="menu-arrow"></i> 
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('BO.kamar.index')}}">Data Kamar</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item nav-category">Transaksi</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('BO.transaksi.index')}}">
                            <i class="menu-icon mdi mdi-card-text-outline"></i>
                            <span class="menu-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('BO.riwayatTransaksi.index')}}">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Riwayat Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">MANAJEMEN</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#data_admin" aria-expanded="false" aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Administrator</span>
                        <i class="menu-arrow"></i> 
                        </a>
                        <div class="collapse" id="data_admin">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('BO.administrator.listFO')}}">Front Office</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('BO.administrator.listBO')}}">Back Office</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    {{-- <li class="nav-item nav-category">SETTING</li> --}}
                </ul>
            </nav>

            <!-- End Menu Sidebar -->

            <!-- Konten -->

            <div class="main-panel">
                <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <h2>{{Session::get('title')}}</h2>
                        
                            @yield('content')
                        
                    </div>
                    </div>
                </div>
                </div>

                <!-- Footer -->

                <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Admin Back Office | <a href="#" target="_blank">ASRI GRAHA HOTEL</a></span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
                </div>
                </footer>

                <!-- End Footer -->

            </div>
            <!-- End Konten -->

        </div>

    </div>

    @include('sweetalert::alert')

    <!-- Javascript -->

    <script src="{{ asset('/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/assets/js/template.js') }}"></script>
    <script src="{{ asset('/assets/js/settings.js') }}"></script>
    <script src="{{ asset('/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('/assets/js/costum_bo.js') }}"></script>
    <script src="{{ asset('/assets/js/Chart.roundedBarCharts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!-- End Javascript -->

</body>

</html>

