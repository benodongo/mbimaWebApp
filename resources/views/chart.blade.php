<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 6/6/18
 * Time: 4:24 PM
 */
?>
        <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>m - Bima</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="nav-link form-inline mt-2 mt-md-0 d-none d-lg-flex search" action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" placeholder="Search for something..." name="q">
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">

                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-danger">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject">Event today</h6>
                                <p class="text-muted ellipsis">
                                    Just a reminder that you have an event today
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject">Settings</h6>
                                <p class="text-muted ellipsis">
                                    Update dashboard
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject">Launch Admin</h6>
                                <p class="text-muted ellipsis">
                                    New admin wow!
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                    </div>
                </li>
                <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/faces/face1.jpg" alt="image">
                        <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            Signout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </ul>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-backburger"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
    {{--<div class="theme-setting-wrapper">--}}
    {{--<div id="settings-trigger"><i class="mdi mdi-settings"></i></div>--}}
    {{--<div id="theme-settings" class="settings-panel">--}}
    {{--<i class="settings-close mdi mdi-close"></i>--}}
    {{--<p class="settings-heading">SIDEBAR SKINS</p>--}}
    {{--<div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>--}}
    {{--<div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>--}}
    {{--<p class="settings-heading mt-2">HEADER SKINS</p>--}}
    {{--<div class="color-tiles mx-0 px-4">--}}
    {{--<div class="tiles primary"></div>--}}
    {{--<div class="tiles success"></div>--}}
    {{--<div class="tiles warning"></div>--}}
    {{--<div class="tiles danger"></div>--}}
    {{--<div class="tiles pink"></div>--}}
    {{--<div class="tiles info"></div>--}}
    {{--<div class="tiles dark"></div>--}}
    {{--<div class="tiles default"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link d-flex">
                        <div class="profile-image">
                            <img src="images/faces/face1.jpg" alt="image"/>
                            <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                        </div>
                        <div class="profile-name">
                            <p class="name">
                                {{ Auth::user()->name }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Main</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/home">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <span class="badge badge-primary badge-pill">1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clients ">
                        <i class="icon-server menu-icon"></i>
                        <span class="menu-title">All CLients</span>
                    </a>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Categories</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="page-layouts">
                        <i class="icon-box menu-icon"></i>
                        <span class="menu-title">Policies</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" >vehicle</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">General</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Medical</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Personal Accident</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Other</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link"></span>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-speech-bubble menu-icon"></i>
                        <span class="menu-title">Settings</span>
                        <span class="badge badge-info badge-pill">8</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-bell menu-icon"></i>
                        <span class="menu-title">Premium</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="icon-eye menu-icon"></i>
                        <span class="menu-title">Privacy</span>
                        <i class="menu-arrow"></i>
                    </a>
            </ul>
        </nav>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut  Chart</h4>
                                <div class="google-chart-container">
                                    <div id="Donut-chart" class="google-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total clients per month</h4>
                                <div class="google-chart-container d-flex align-items-center justify-content-center h-100">
                                    <div id="Bar-chart" class="google-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Histogram chart</h4>
                                <div class="google-chart-container ">
                                    <div id="Histogram-chart" class="google-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Donut  Chart</h4>
                                <div class="google-chart-container">
                                    <div id="area-chart" class="google-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Curve Chart</h4>
                                <div class="google-chart-container">
                                    <div id="curve_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:assets/partials/_footer.html -->

            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 m-bima. All rights reserved.</span>
                </div>
            </footer>

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="https://www.gstatic.com/charts/loader.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/google-charts.js"></script>
<!-- End custom js for this page-->
<script>
    var clientData = "{{ json_encode($info) }}";

    clientData = JSON.parse(clientData.replace(/&quot;/g,'"'));

    console.log(clientData);

    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Months', 'Total Clients'],
            ["Jan", 2],
            ["Feb", 8],
            ["Mar", 9],
            ["April", 1],
            ["May", clientData.clientMonthlyRecords.may],
            ["June", clientData.clientMonthlyRecords.june],
            ["July", 2],
            ["Aug", 2],
            ["Oct", 8],
            ["Nov", 12],
            ["Dec", 11],
        ]);

        var options = {
            title: 'Approximating Normal Distribution',
            legend: {
                position: 'none'
            },
            colors: ['#76C1FA'],

            chartArea: {
                width: 401
            },
            hAxis: {
                ticks: [-1, -0.75, -0.5, -0.25, 0, 0.25, 0.5, 0.75, 1]
            },
            bar: {
                gap: 0
            },

            histogram: {
                bucketSize: 0.02,
                maxNumBuckets: 200,
                minValue: -1,
                maxValue: 1
            }
        };

        var chart = new google.charts.Bar(document.getElementById('Bar-chart'));
        chart.draw(data, options);
    };
    // Donut Chart Starts

    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Vehicle', clientData.policyTypes.vehicle],
            ['Personal Accident', clientData.policyTypes.personal],
            // ['Commute', 2],
            // ['Watch TV', 2],
            // ['Sleep', 7]
        ]);

        var options = {
            title: 'Policy Types',
            pieHole: 0.4,
            colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66'],
            chartArea: {
                width: 500
            },
        };

        var Donutchart = new google.visualization.PieChart(document.getElementById('Donut-chart'));
        Donutchart.draw(data, options);
    }


    // Donut Chart Ends
    // Histogram Charts Starts
    (function($) {

        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Vehicle', 'P . Accident', 'Medical', 'General'],
                [clientData.categories.may.vehicle, clientData.categories.may.personal, 1, null],
                [clientData.categories.june.vehicle, clientData.categories.june.personal, 1, null],
                [-1 / 3, 0, null, null]
            ]);

            var options = {
                title: 'policies',
                legend: {
                    position: 'top',
                    maxLines: 1
                },
                colors: ['#76C1FA', '#63CF72', '#F36368', '#FABA66'],
                interpolateNulls: false,
                chartArea: {
                    width: 401
                },
                vAxis: {title: "Total"},
                hAxis: {title: "Months",ticks: [{v:2, f:"Jan"},{v:4, f:"Feb"},
                        {v:6, f:"Mar"},{v:-0.25, f:"April"},{v:0, f:"May"},{v:0.25, f:"Jun"},{v:0.5, f:"July"},
                        {v:0.75, f:"Aug"},{v:1, f:"Sept"}]} ,
            };

            var chart = new google.visualization.Histogram(document.getElementById('Histogram-chart'));
            chart.draw(data, options);
        }

    })(jQuery);

    // Histogram Charts Ends


</script>

</html>
