<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 5/23/18
 * Time: 1:40 PM
 */
?>

        <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pearl UI</title>
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
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-success">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html"><img src="assets/images/logo.svg" alt="logo"/></a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/faces/face1.jpg" alt="image">
                        <span class="d-none d-lg-inline">Daniel Russiel</span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i>
                            Signout
                        </a>
                    </div>
                </li>
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
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove mdi mdi-close-circle-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                        <p class="text-gray mb-0">build a js based app</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
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
                            <img src="assets/images/faces/face1.jpg" alt="image"/>
                            <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                        </div>
                        <div class="profile-name">
                            <p class="name">
                                Daniel Russiel
                            </p>
                            <p class="designation">
                                Senior Architect
                            </p>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Main</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/index.html">
                        <i class="icon-layout menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                        <span class="badge badge-primary badge-pill">1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/widgets.html">
                        <i class="icon-server menu-icon"></i>
                        <span class="menu-title">Widgets</span>
                        <span class="badge badge-danger">New</span>
                    </a>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Layouts</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
                        <i class="icon-box menu-icon"></i>
                        <span class="menu-title">Page Layouts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/boxed-layout.html">Boxed</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/rtl-layout.html">RTL</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                        <i class="icon-globe menu-icon"></i>
                        <span class="menu-title">Sidebar Layouts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/compact-menu.html">Compact menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">UI Features</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="icon-layers menu-icon"></i>
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/badges.html">Badges</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/modals.html">Modals</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/progress.html">Progress bar</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/tooltips.html">Tooltips</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                        <i class="icon-air-play menu-icon"></i>
                        <span class="menu-title">Advanced Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/dragula.html">Dragula</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/carousel.html">Carousel</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/context-menu.html">Context menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/loaders.html">Loaders</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/slider.html">Slider</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/colcade.html">Colcade</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/ui-features/tour.html">Tour</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/ui-features/popups.html">
                        <i class="icon-speech-bubble menu-icon"></i>
                        <span class="menu-title">Popups</span>
                        <span class="badge badge-info badge-pill">8</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/ui-features/notifications.html">
                        <i class="icon-bell menu-icon"></i>
                        <span class="menu-title">Notifications</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <i class="icon-eye menu-icon"></i>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/icons/flag-icons.html">Flag icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/icons/font-awesome.html">Font Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/icons/simple-line-icon.html">Simple line icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/icons/themify.html">Themify icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Form</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/basic_elements.html">
                        <i class="icon-file menu-icon"></i>
                        <span class="menu-title">Form Elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/advanced_elements.html">
                        <i class="icon-disc menu-icon"></i>
                        <span class="menu-title">Advanced Elements</span>
                        <span class="badge badge-success badge-pill">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/validation.html">
                        <i class="icon-flag menu-icon"></i>
                        <span class="menu-title">Validation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/wizard.html">
                        <i class="icon-cog menu-icon"></i>
                        <span class="menu-title">Wizard</span>
                        <span class="badge badge-danger badge-pill">New</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/text_editor.html">
                        <i class="icon-clipboard menu-icon"></i>
                        <span class="menu-title">Text editors</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/forms/code_editor.html">
                        <i class="menu-icon icon-ribbon"></i>
                        <span class="menu-title">Code editors</span>
                    </a>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Data Representation</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <i class="icon-bar-graph menu-icon"></i>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/chartjs.html">ChartJs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/flot-chart.html">Float</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/google-charts.html">Google charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/sparkline.html">Sparkline js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/chartist.html">Chartists</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/charts/justGage.html">JustGage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="icon-grid-2 menu-icon"></i>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/tables/basic-table.html">Basic table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/tables/data-table.html">Data table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/tables/js-grid.html">Js-grid</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/tables/sortable-table.html">Sortable table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                        <i class="icon-map menu-icon"></i>
                        <span class="menu-title">Maps</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/maps/mapeal.html">Mapeal</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/maps/vector-map.html">Vector Map</a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/maps/google-maps.html">Google Map</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Sample pages</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="icon-lock menu-icon"></i>
                        <span class="menu-title">Authentication</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                        <i class="icon-help menu-icon"></i>
                        <span class="menu-title">Error pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                        <i class="icon-location menu-icon"></i>
                        <span class="menu-title">General Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/landing-page.html"> Landing Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/timeline.html"> Timeline </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/profile.html"> Profile </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/faq.html"> FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/faq-2.html"> FAQ 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/news-grid.html"> News grid </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/search-results.html"> Search Results </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/portfolio.html"> Portfolio </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                        <i class="icon-briefcase menu-icon"></i>
                        <span class="menu-title">E-commerce</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/pricing-table.html"> Pricing </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/invoice.html"> Invoice </a></li>
                            <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/orders.html"> Orders </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Applications</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/apps/email.html">
                        <i class="icon-mail menu-icon"></i>
                        <span class="menu-title">E-mail</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/apps/calendar.html">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/apps/gallery.html">
                        <i class="icon-image menu-icon"></i>
                        <span class="menu-title">Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/pages/apps/todo.html">
                        <i class="icon-file-add menu-icon"></i>
                        <span class="menu-title">Todo</span>
                    </a>
                </li>
                <li class="nav-item nav-doc">
                    <a class="nav-link bg-primary" href="assets/pages/documentation.html">
                        <i class="icon-book menu-icon"></i>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data table</h4>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Purchased On</th>
                                        <th>Customer</th>
                                        <th>Ship to</th>
                                        <th>Base Price</th>
                                        <th>Purchased Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2012/08/03</td>
                                        <td>Edinburgh</td>
                                        <td>New York</td>
                                        <td>$1500</td>
                                        <td>$3200</td>
                                        <td>
                                            <label class="badge badge-info">On hold</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2015/04/01</td>
                                        <td>Doe</td>
                                        <td>Brazil</td>
                                        <td>$4500</td>
                                        <td>$7500</td>
                                        <td>
                                            <label class="badge badge-danger">Pending</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2010/11/21</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>2016/01/12</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2017/12/28</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>2000/10/30</td>
                                        <td>Sam</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-info">On-hold</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>2011/03/11</td>
                                        <td>Cris</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>2015/06/25</td>
                                        <td>Tim</td>
                                        <td>Italy</td>
                                        <td>$6300</td>
                                        <td>$2100</td>
                                        <td>
                                            <label class="badge badge-info">On-hold</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>2016/11/12</td>
                                        <td>John</td>
                                        <td>Tokyo</td>
                                        <td>$2100</td>
                                        <td>$6300</td>
                                        <td>
                                            <label class="badge badge-success">Closed</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>2003/12/26</td>
                                        <td>Tom</td>
                                        <td>Germany</td>
                                        <td>$1100</td>
                                        <td>$2300</td>
                                        <td>
                                            <label class="badge badge-danger">Pending</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:assets/partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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