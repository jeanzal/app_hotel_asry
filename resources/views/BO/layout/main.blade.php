<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Back Office - Asry Graha Hotel</title>
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('assets/images/loader.svg') }}" width="48" height="48" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Right Icon menu Sidebar -->
    <div class="navbar-right">
        <ul class="navbar-nav">
            <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li><a href="{{route('auth.logout')}}" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>
        </ul>
    </div>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="{{route('BO.dashboard.index')}}"><img src="{{ asset('assets/img/logo2.png') }}" width="25" alt="Aero"><span class="m-l-10">ASRY GRAHA HOTEL</span></a>
        </div>
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <a class="image" href="profile.html"><img src="{{ asset('assets/images/orang.png') }}" alt="Admin"></a>
                        <div class="detail">
                            {{-- <h4>Admin</h4> --}}
                            <small>Admin | {{Auth::guard('BO')->user()->name}}</small>                        
                        </div>
                    </div>
                </li>
                <li><a href="{{route('BO.dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="{{route('BO.kamar.index')}}"><i class="zmdi zmdi-apps"></i><span>Data</span></a></li>
                <li><a href="{{route('BO.transaksi.index')}}"><i class="zmdi zmdi-assignment"></i><span>Transaksi</span></a></li>
                {{-- <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                    <ul class="ml-menu">
                        <li><a href="project-list.html">Projects List</a></li>
                        <li><a href="taskboard.html">Taskboard</a></li>
                        <li><a href="ticket-list.html">Ticket List</a></li>
                        <li><a href="ticket-detail.html">Ticket Detail</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                    <ul class="ml-menu">
                        <li><a href="file-dashboard.html">All File</a></li>
                        <li><a href="file-documents.html">Documents</a></li>
                        <li><a href="file-images.html">Images</a></li>
                        <li><a href="file-media.html">Media</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                    <ul class="ml-menu">
                        <li><a href="blog-dashboard.html">Dashboard</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="blog-list.html">List View</a></li>
                        <li><a href="blog-grid.html">Grid View</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span></a>
                    <ul class="ml-menu">
                        <li><a href="ec-dashboard.html">Dashboard</a></li>
                        <li><a href="ec-product.html">Product</a></li>
                        <li><a href="ec-product-List.html">Product List</a></li>
                        <li><a href="ec-product-detail.html">Product detail</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Components</span></a>
                    <ul class="ml-menu">
                        <li><a href="ui_kit.html">Aero UI KIT</a></li>                    
                        <li><a href="alerts.html">Alerts</a></li>                    
                        <li><a href="collapse.html">Collapse</a></li>
                        <li><a href="colors.html">Colors</a></li>
                        <li><a href="dialogs.html">Dialogs</a></li>                    
                        <li><a href="list-group.html">List Group</a></li>
                        <li><a href="media-object.html">Media Object</a></li>
                        <li><a href="modals.html">Modals</a></li>
                        <li><a href="notifications.html">Notifications</a></li>                    
                        <li><a href="progressbars.html">Progress Bars</a></li>
                        <li><a href="range-sliders.html">Range Sliders</a></li>
                        <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="waves.html">Waves</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-flower"></i><span>Font Icons</span></a>
                    <ul class="ml-menu">
                        <li><a href="icons.html">Material Icons</a></li>
                        <li><a href="icons-themify.html">Themify Icons</a></li>
                        <li><a href="icons-weather.html">Weather Icons</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span></a>
                    <ul class="ml-menu">
                        <li><a href="basic-form-elements.html">Basic Form</a></li>
                        <li><a href="advanced-form-elements.html">Advanced Form</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-editors.html">Editors</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span></a>
                    <ul class="ml-menu">
                        <li><a href="normal-tables.html">Normal Tables</a></li>
                        <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                        <li><a href="editable-table.html">Editable Tables</a></li>
                        <li><a href="footable.html">Foo Tables</a></li>
                        <li><a href="table-color.html">Tables Color</a></li>
                    </ul>
                </li>            
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                    <ul class="ml-menu">
                        <li><a href="c3.html">C3 Chart</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="chartjs.html">ChartJS</a></li>
                        <li><a href="sparkline.html">Sparkline</a></li>
                        <li><a href="jquery-knob.html">Jquery Knob</a></li>
                    </ul>
                </li>            
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span></a>
                    <ul class="ml-menu">
                        <li><a href="widgets-app.html">Apps Widgets</a></li>
                        <li><a href="widgets-data.html">Data Widgets</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span></a>
                    <ul class="ml-menu">
                        <li><a href="sign-in.html">Sign In</a></li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="404.html">Page 404</a></li>
                        <li><a href="500.html">Page 500</a></li>
                        <li><a href="page-offline.html">Page Offline</a></li>
                        <li><a href="locked.html">Locked Screen</a></li>
                    </ul>
                </li>
                <li  class="open_top active open"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span></a>
                    <ul class="ml-menu">
                        <li class="active"><a href="blank.html">Blank Page</a></li>
                        <li><a href="image-gallery.html">Image Gallery</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="invoices.html">Invoices</a></li>
                        <li><a href="invoices-list.html">Invoices List</a></li>
                        <li><a href="search-results.html">Search Results</a></li>
                    </ul>
                </li>
                <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                    <ul class="ml-menu">
                        <li><a href="google.html">Google Map</a></li>
                        <li><a href="yandex.html">YandexMap</a></li>
                        <li><a href="jvectormap.html">jVectorMap</a></li>
                    </ul>
                </li>
                <li>
                    <div class="progress-container progress-primary m-t-10">
                        <span class="progress-badge">Traffic this Month</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                <span class="progress-value">67%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-container progress-info">
                        <span class="progress-badge">Server Load</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                <span class="progress-value">86%</span>
                            </div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </aside>



    <!-- Main Content -->
    <section class="content">
        <div class="body_scroll">
            <div class="container-fluid">
                <div class="row clearfix">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <!-- Jquery Core Js --> 
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
    <script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script> <!-- Morris Plugin Js -->
    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->

    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce.js') }}"></script>
    <script src="{{ asset('assets/js/pages/charts/jquery-knob.min.js') }}"></script>
        
    <!-- Jquery DataTable Plugin Js --> 
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script> 
</body>

</html>
