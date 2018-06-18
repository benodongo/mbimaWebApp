<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 5/31/18
 * Time: 11:29 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M Bima</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:assets/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="assets/images/logo.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="assets/images/logo-mini.svg" alt="logo"/></a>
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
                    <form class="nav-link form-inline mt-2 mt-md-0 d-none d-lg-flex search">
                        <input type="text" class="form-control" placeholder="Search for something...">
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-flex">
                    <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                        English
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#">
                            French
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            Spain
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            Latin
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            Japanese
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-warning">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject ellipsis">Mark sent you a message</h6>
                                <p class="text-muted">
                                    1 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject ellipsis">Cregh sent you a message</h6>
                                <p class="text-muted">
                                    15 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject ellipsis">Profile picture updated</h6>
                                <p class="text-muted">
                                    18 Minutes ago
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                    </div>
                </li>
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
        <!-- partial:assets/partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles pink"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">

                    </div>

                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:assets/partials/_sidebar.html -->
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
                <div class="card">
                    <div class="card-body">
                        @if(isset($details))
                        <h4 class="card-title"> {{ $query }} Insurance Clients</h4>
                        <div class="row">
                            <div class="col-12">

                                <table id="order-listing" class="table">
                                    <thead style="background: rgba(2,10,22,0.77)">
                                    <tr style="color: #ffffff">
                                        <th>No</th>
                                        <th>Expirty Date</th>
                                        <th>Clinet Name</th>
                                        <th>Policy No</th>
                                        <th>Premium</th>
                                        <th>Sum Insured</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($details as $client)
                                    <tr>

                                        <td>{{$client->id}}</td>
                                        <td>{{ \Carbon\Carbon::parse($client->expiry_date)->toFormattedDateString()}}</td>
                                        <td>{{$client->first_name}}</td>
                                        <td>{{$client->policy_number}}</td>
                                        <td>KSH {{$client->premium}}</td>
                                        <td>KSH {{$client->sum_insured}}</td>
                                        <td>
                                            <label class="badge badge-info">Active</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
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
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="assets/js/data-table.js"></script>
<!-- End custom js for this page-->
</body>

</html>
