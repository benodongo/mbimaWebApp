<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>m-Bima</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
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

                <li class="nav-item nav-category">
                    <span class="nav-link"></span>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="/chart">
                        <i class="icon-speech-bubble menu-icon"></i>
                        <span class="menu-title">Reports</span>
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
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <a href="/search?q=Vehicle"><div class="btn social-btn btn-twitter btn-rounded d-inline-block" style="height: 60px;width: 60px"></div></a>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Vehicle</p>
                                                <p class="mb-0 text-muted">{{count(\App\Client::all()->where('agent_id','LIKE', Auth::User()->id)->where('policy_type','=','Vehicle'))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">

                                                <a href="/search?q=General"><div class="btn social-btn btn-facebook btn-rounded d-inline-block" style="height: 60px;width: 60px"></div></a>

                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">General</p>
                                                <p class="mb-0 text-muted">{{count(\App\Client::all()->where('agent_id','LIKE', Auth::User()->id)->where('policy_type','=','General'))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <a href="/search?q=Health Insurance"><div class="btn social-btn btn-google btn-rounded d-inline-block" style="height: 60px;width: 60px"></div></a>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Medical</p>
                                                <p class="mb-0 text-muted">{{count(\App\Client::all()->where('agent_id','LIKE', Auth::User()->id)->where('policy_type','=','Health Insurance'))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 col-sm-6 d-flex justify-content-between justify-content-md-center">
                                        <div class="wrapper d-flex align-items-center justify-content-center">
                                            <a href="/search?q=Personal Accident"><div class="btn social-btn btn-warning btn-rounded d-inline-block" style="height: 60px;width: 60px"></div></a>
                                            <div class="wrapper d-flex flex-column ml-4">
                                                <p class="font-weight-bold mb-2">Personal Accident</p>
                                                <p class="mb-0 text-muted">{{count(\App\Client::all()->where('agent_id','LIKE', Auth::User()->id)->where('policy_type','=','Personal Accident'))}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Expiring Policies</h4>
                                <div class="table-responsive">
                                    <table id="order-listing" class="table table-striped " >
                                        <thead style="background: rgba(2,10,22,0.77)">
                                        <tr style="color: #ffffff">

                                            <th><b>Client Name</b></th>
                                            <th><b>Policy No</b></th>
                                            <th><b>Premium</b></th>
                                            <th><b>Sum Insured</b></th>
                                            <th>Purchase Date</th>
                                            <th>Duration</th>
                                            <th><b>Expiry Date</b></th>
                                            <th><b>Actions</b></th>
                                        </tr>
                                        </thead>
                                        <tbody >
                                        @foreach($clients as $client)
                                            <tr >

                                                <td>{{$client->first_name}} {{$client->last_name}}</td>
                                                <td>{{$client->policy_number}}</td>
                                                <td>KSH {{number_format($client->premium,2)}}</td>
                                                <td>KSH {{number_format($client->sum_insured,2)}}</td>
                                                <td>{{ \Carbon\Carbon::parse($client->date)->toFormattedDateString()}}</td>
                                                <td>{{$client->duration}}</td>

                                                <td>{{ \Carbon\Carbon::parse($client->expiry_date)->toFormattedDateString()}}</td>
                                                <td>
                                                    <button class="btn btn-outline-primary">View</button>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-md-3 grid-margin stretch-card">--}}
                        {{--<div class="card">--}}
                            {{--<div class="card-body">--}}
                                {{--<h4 class="card-title">Todo list</h4>--}}
                                {{--<div class="add-items d-flex">--}}
                                    {{--<input type="text" class="form-control todo-list-input"  placeholder="What do you need to do today?">--}}
                                    {{--<button class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button>--}}
                                {{--</div>--}}
                                {{--<div class="list-wrapper">--}}
                                    {{--<ul class="d-flex flex-column-reverse todo-list">--}}
                                        {{--<li>--}}
                                            {{--<div class="form-check">--}}
                                                {{--<label class="form-check-label">--}}
                                                    {{--<input class="checkbox" type="checkbox">--}}
                                                    {{--Meeting with client A--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                            {{--<i class="remove mdi mdi-close-circle-outline"></i>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="form-check">--}}
                                                {{--<label class="form-check-label">--}}
                                                    {{--<input class="checkbox" type="checkbox">--}}
                                                    {{--Call client x--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                            {{--<i class="remove mdi mdi-close-circle-outline"></i>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="form-check">--}}
                                                {{--<label class="form-check-label">--}}
                                                    {{--<input class="checkbox" type="checkbox">--}}
                                                    {{--Print Statements--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                            {{--<i class="remove mdi mdi-close-circle-outline"></i>--}}
                                        {{--</li>--}}
                                        {{--<li class="completed">--}}
                                            {{--<div class="form-check">--}}
                                                {{--<label class="form-check-label">--}}
                                                    {{--<input class="checkbox" type="checkbox" checked>--}}
                                                    {{--Prepare for presentation--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                            {{--<i class="remove mdi mdi-close-circle-outline"></i>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="form-check">--}}
                                                {{--<label class="form-check-label">--}}
                                                    {{--<input class="checkbox" type="checkbox">--}}
                                                    {{--meeting with client y--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                            {{--<i class="remove mdi mdi-close-circle-outline"></i>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
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

<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/data-table.js"></script>
<!-- End custom js for this page-->
<script>

</script>
</body>

</html>
