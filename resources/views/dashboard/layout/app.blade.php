<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>@yield('title')</title>
    <!-- chartist CSS -->
    <link href="/assets/libs/chartist//dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/libs/chartist-plugin-tooltips//dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="/dist/css/style.css" rel="stylesheet">

    <!-- This page CSS -->
    <link href="/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper" id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Material Admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <header class="topbar">
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
      @include('dashboard.layout.nav')
        <!-- ============================================================== -->
        <!-- Navbar scss in header.scss -->
        <!-- ============================================================== -->
    </header>
    <!-- ============================================================== -->
    <!-- Sidebar scss in sidebar.scss -->
    <!-- ============================================================== -->
      @include('dashboard.layout.side-bar')

<!-- ============================================================== -->
    <!-- Sidebar scss in sidebar.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Title and breadcrumb -->
        <!-- ============================================================== -->
        <div class="page-titles">
            <div class="d-flex align-items-center">
                <h5 class="font-medium m-b-25">@yield('nav-title')</h5>
                <div class="custom-breadcrumb ml-auto m-b-25">
                    <a href="{{ route('dashboard') }}" class="breadcrumb">Home</a>
                    <a href="@yield('route')" class="breadcrumb">@yield('nav-title')</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Summery -->
            <!-- ============================================================== -->

        @yield('content')

        <!-- ============================================================== -->
            <!-- Sales Summery -->
            <!-- ============================================================== -->


            <!--

            <div class="row">
                <div class="col s12 l8">
                    <div class="card">
                        <div class="card-content">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="card-title">Yearly Sales</h5>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline font-12 dl m-r-10">
                                        <li class="cyan-text"><i class="fa fa-circle"></i> Earnings</li>
                                        <li class="blue-text text-accent-4"><i class="fa fa-circle"></i> Sales</li>
                                    </ul>
                                </div>
                            </div>




                            <div class="p-t-20">
                                <div class="row">
                                    <div class="col s12">
                                        <div id="sales" style="height: 332px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card card-hover">
                        <div class="card-content">
                            <div class="d-flex align-items-center">
                                <div class="m-r-20">
                                    <h1 class=""><i class="ti-light-bulb"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Sales Analytics</h3>
                                    <h6 class="card-subtitle">March  2017</h6> </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="col s6">
                                    <h3 class="font-light m-t-10"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h3>
                                </div>
                                <div class="col s6 right-align">
                                    <div class="p-t-10 p-b-10">
                                        <div class="spark-count" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-hover">
                        <div class="card-content">
                            <div class="d-flex align-items-center">
                                <div class="m-r-20">
                                    <h1 class=""><i class="ti-pie-chart"></i></h1></div>
                                <div>
                                    <h3 class="card-title">Bandwidth usage</h3>
                                    <h6 class="card-subtitle">March  2017</h6>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="col s6">
                                    <h3 class="font-light m-t-10">50 GB</h3>
                                </div>
                                <div class="col s6 p-t-10 p-b-20 right-align">
                                    <div class="p-t-10 p-b-10 m-r-20">
                                        <div class="spark-count2" style="height:65px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           -->


        </div>
        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->

        @include('dashboard.layout.footer')
    </div>
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
    <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
    <aside class="right-sidebar">
        <!-- Right Sidebar -->
        <ul id="right-slide-out" class="sidenav right-sidenav p-t-10">
            <li>
                <div class="row">
                    <div class="col s12">
                        <!-- Tabs -->
                        <ul class="tabs">
                            <li class="tab col s4"><a href="#settings" class="active"><span class="material-icons">build</span></a></li>
                            <li class="tab col s4"><a href="#chat"><span class="material-icons">chat_bubble</span></a></li>
                            <li class="tab col s4"><a href="#activity"><span class="material-icons">local_activity</span></a></li>
                        </ul>
                        <!-- Tabs -->
                    </div>
                    <!-- Setting -->
                    <div id="settings" class="col s12">
                        <div class="m-t-10 p-10 b-b">
                            <h6 class="font-medium">Layout Settings</h6>
                            <ul class="m-t-15">
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="theme-view" id="theme-view" />
                                        <span>Dark Theme</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" class="nav-toggle" name="collapssidebar" id="collapssidebar" />
                                        <span>Collapse Sidebar</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="sidebar-position" id="sidebar-position" />
                                        <span>Fixed Sidebar</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="header-position" id="header-position" />
                                        <span>Fixed Header</span>
                                    </label>
                                </li>
                                <li class="m-b-10">
                                    <label>
                                        <input type="checkbox" name="boxed-layout" id="boxed-layout" />
                                        <span>Boxed Layout</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="p-10 b-b">
                            <!-- Logo BG -->
                            <h6 class="font-medium">Logo Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>

                            </ul>
                            <!-- Logo BG -->
                        </div>
                        <div class="p-10 b-b">
                            <!-- Navbar BG -->
                            <h6 class="font-medium">Navbar Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>

                            </ul>
                            <!-- Navbar BG -->
                        </div>
                        <div class="p-10 b-b">
                            <!-- Logo BG -->
                            <h6 class="font-medium">Sidebar Backgrounds</h6>
                            <ul class="m-t-15 theme-color">
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                                <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>

                            </ul>
                            <!-- Logo BG -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </aside>
    <div class="chat-windows "></div>
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="/assets/libs/jquery//dist/jquery.min.js"></script>
<script src="/dist/js/materialize.min.js"></script>
<script src="/assets/libs/perfect-scrollbar//dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="/dist/js/app.js"></script>
<script src="/dist/js/app.init.dark.js"></script>
<script src="/dist/js/app-style-switcher.js"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="/dist/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script src="/assets/libs/chartist//dist/chartist.min.js"></script>
<script src="/assets/libs/chartist-plugin-tooltips//dist/chartist-plugin-tooltip.min.js"></script>
<script src="/assets/extra-libs/sparkline/sparkline.js"></script>
<script src="/dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
