<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Materialize Bootstrap Admin panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/fav.png">

        <!-- Start Global Mandatory Style
            =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- materialize css -->
        <link href="assets/plugins/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap css-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Animate Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- notify alert -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/notify/css/notify.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/notify/css/prettify.css">
        <!-- iziToast alert -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/iziToast/dist/css/iziToast.min.css">
        <!-- sweetalert2 -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/sweetalert2/dist/sweetalert2.min.css">
        <!-- Notification Styles -->
        <link href="assets/plugins/NotificationStyles/css/demo.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/NotificationStyles/css/ns-default.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/NotificationStyles/css/ns-style-growl.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/NotificationStyles/css/ns-style-attached.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/NotificationStyles/css/ns-style-bar.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/NotificationStyles/css/ns-style-other.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- simplebar scroll css -->
        <link href="assets/plugins/simplebar/dist/simplebar.css" rel="stylesheet" type="text/css" />
        <!-- mCustomScrollbar css -->
        <link href="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <!-- custom CSS -->
        <link href="assets/dist/css/stylematerial.css" rel="stylesheet">

    </head>

    <body>
        <div id="wrapper">
            <!--navbar top-->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <!-- Logo -->
                <a class="navbar-brand pull-left" href="index.html">
                    <img src="assets/dist/img/logo3.png" alt="logo" width="205" height="60">
                </a>
                <a id="menu-toggle">
                    <i class="material-icons">apps</i>
                </a>
                <div class="navbar-custom-menu hidden-xs">
                    <ul class="nav navbar-nav navbar-left hidden-xs">
                        <li class="top-search "><a href="#search"><i class="material-icons">search</i></a></li>
                        <li>
                            <div id="search" class="top-search">
                                <button type="button" class="close">x</button>
                                <form>
                                    <input type="search" value="" placeholder="type For searching..." />
                                    <button type="submit" class="btn">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar navbar-right">
                        <!--Notification-->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications_active</i><span class="numbers">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-message mCustomScrollbar animated bounceIn dropdown-notification" data-mcs-theme="minimal">
                                <li class="list-details">
                                    <!-- start notification -->
                                    <a href="#">
                                        <div class="pro-images pull-left">
                                            <img src="assets/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                        </div>
                                        <h5 class="indigo-text">Mr.alrazy</h5>
                                        <p>Please oreder 10 pices of kits..</p>
                                        <span class="badge pro-badge teal">15 hours ago</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start notification -->
                                    <a href="#">
                                        <div class="pro-images pull-left">
                                            <img src="assets/dist/img/avatar3.png" class="img-circle" height="40" width="40" alt="User Image">
                                        </div>
                                        <h5 class="purple-text">Jahir</h5>
                                        <p>Please oreder 10 pices of kits..</p>
                                        <span class="badge pro-badge teal">15 hours ago</span>
                                    </a>
                                </li>

                                <li class="list-details">
                                    <!-- start notification -->
                                    <a href="#">
                                        <div class="pro-images pull-left">
                                            <img src="assets/dist/img/avatar2.png" class="img-circle" height="40" width="40" alt="User Image">
                                        </div>
                                        <h5 class="blue-text">Karim</h5>
                                        <p>Please oreder 10 pices of kits..</p>
                                        <span class="badge pro-badge teal">15 hours ago</span>
                                    </a>
                                </li>
                                <li class="list-details list-ntfc">
                                    <!-- start notification -->
                                    <a href="#">
                                        <div class="pro-images pull-left">
                                            <img src="assets/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                        </div>
                                        <h5 class="teal-text">Shipon</h5>
                                        <p>Please oreder 10 pices of kits..</p>
                                        <span class="badge pro-badge teal">15 hours ago</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.notification -->
                            <!--tasks-->
                        <li class="list-details dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">assignment</i><span class="numbers">6+</span>
                            </a>
                            <ul class="dropdown-menu dropdown-message mCustomScrollbar animated bounceIn" data-mcs-theme="minimal">
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <p>
                                            <span class="label-primary pro-label label label-default pull-right">35%</span> Data table error
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="35%" style="width: 35%">
                                                <span class="sr-only">35% Complete (primary)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="label-success pro-label label label-default pull-right">55%</span> Change theme color
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="55%" style="width: 55%">
                                                <span class="sr-only">55% Complete (primary)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="label-info pro-label label label-default pull-right">60%</span> Change the font-family
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="60%" style="width: 60%">
                                                <span class="sr-only">60% Complete (info)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="label-warning pro-label label label-default pull-right">80%</span> Animation skip
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="80%" style="width: 80%">
                                                <span class="sr-only">80% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="pro-label label label-default deep-purple pull-right">75%</span> Add More Ui
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped deep-purple active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="75%" style="width: 75%">
                                                <span class="sr-only">75% Complete (purple)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="pro-label label label-default teal pull-right">50%</span> Add visitor
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped teal active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="50%" style="width: 50%">
                                                <span class="sr-only">50% Complete (teal)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start message -->
                                    <a href="#">
                                        <p>
                                            <span class="pro-label label label-default red pull-right">90%</span> system ststus recheck
                                        </p>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active red" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" data-original-title="90%" style="width: 90%">
                                                <span class="sr-only">90% Complete (teal)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- /.tasks -->
                        <!--tasks-->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">message</i><span class="numbers">9+</span>
                            </a>
                            <ul class="dropdown-menu dropdown-message mCustomScrollbar animated bounceIn" data-mcs-theme="minimal">
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-file-text-o blue-grey"></i>
                                        </div>
                                        <p>Photo loction should be redy...</p>
                                        <span class="badge blue-grey">3 days</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-user-circle blue"></i>
                                        </div>
                                        <p>user panel should be redy...</p>
                                        <span class="badge blue">20 days</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-file-text indigo"></i>
                                        </div>
                                        <p>file loction should be checked...</p>
                                        <span class="badge indigo">3 days</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-book deep-purple"></i>
                                        </div>
                                        <p>room should be booked...</p>
                                        <span class="badge deep-purple">6 days</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-bell red"></i>
                                        </div>
                                        <p>tasks are not created directly...</p>
                                        <span class="badge red">5 days</span>
                                    </a>
                                </li>
                                <li class="list-details">
                                    <!-- start tasks -->
                                    <a href="#">
                                        <div class="tasks pull-left">
                                            <i class="fa fa-bullhorn"></i>
                                        </div>
                                        <p>projects should be Complete...</p>
                                        <span class="badge #26a69a">10 days</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.tasks -->
                        </li>
                        <!--user profile-->
                        <li class="dropdown">
                            <a class='dropdown-button user-pro' href='#' data-activates='dropdown-user'>
                                <img src="assets/dist/img/avatar5.png" class="img-circle" height="45" width="50" alt="User Image">
                            </a>
                            <ul id='dropdown-user' class='dropdown-content'>
                                <li>
                                    <a href="#!"><i class="material-icons">perm_identity</i> View profile</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="material-icons">settings</i> Settings</a>
                                </li>
                                <li>
                                    <a href="#!"><i class="material-icons">lock</i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- /.user profile -->
                    </ul>
                </div>
            </nav>
            <!-- Sidebar -->
            <div id="sidebar-wrapper" class="waves-effect" data-simplebar>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="list-header">Main Navigation ---</li>
                            <li><a href="index.html"><i class="material-icons">dashboard</i>Dashboard</a></li>
                            <li>
                                <a><i class="material-icons">email</i>Mailbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="mailbox.html">Mailbox</a></li>
                                    <li><a href="mailDetails.html">Mailbox Details</a></li>
                                    <li><a href="compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">text_format</i>Forms<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="forms_basic.html">Basic Forms</a></li>
                                    <li><a href="form_file_upload.html">Forms File Upload</a></li>
                                    <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                    <li><a href="forms_emoji.html">Forms Emoji</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">business</i>Tables<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="table.html">Simple tables</a></li>
                                    <li><a href="dataTables.html">Data tables</a></li>
                                </ul>
                            </li>
                            <li class="list-divider"></li>
                            <li class="list-header">Component ---</li>
                            <li class="active"><a href="#"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li class="active-link"><a href="notification.html">Notification</a></li>
                                    <li><a href="tree-view.html">Tree View</a></li>
                                    <li><a href="progressbars.html">Progressber</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="icheck_toggle_pagination.html">iCheck, Toggle, Pagination</a></li>
                                    <li><a href="featurediscovery.html">Feature Discovery</a></li>
                                    <li><a href="color.html">Colors</a></li>
                                    <li><a href="tooltip.html">Tooltip & Popup</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="quote.html">Quote</a></li>
                                    <li><a href="note.html">Sticky Notes</a></li>
                                    <li><a href="image_gellary.html">Image Gellary</a></li>
                                    <li><a href="carousel.html">Slider</a></li>
                                </ul>
                            </li>
                            <li><a><i class="material-icons">layers_clear</i>Maps<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="maps_data.html">Data Maps</a></li>
                                    <li><a href="maps_jvector.html">Jvector Maps</a></li>
                                    <li><a href="maps_google.html">Google map</a></li>
                                </ul>
                            </li>
                            <li>
                                <a><i class="material-icons">pie_chart</i>Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="charts_flot.html">Flot Chart</a></li>
                                    <li><a href="charts_sparkline.html">Sparkline Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a><i class="material-icons">insert_emoticon</i>Icons<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
                                    <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                                    <li><a href="icons_material.html">Material Icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calender.html"><i class="material-icons">timer</i>Calender
                                    <span class="label pull-right red">New</span>   
                                </a>
                            </li>
                            <li>
                                <a href="widget.html"><i class="material-icons">widgets</i>Widgets
                                    <span class="label pull-right orange">5+</span>   
                                </a>
                            </li>
                            <li class="list-divider"></li>
                            <li class="list-header">Extra ---</li>
                            <li>
                                <a><i class="fa fa-newspaper-o"></i>
                                    Other page<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forget_password.html">Forget password</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="505.html">505 Error</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="gridsystem.html"><i class="fa fa-indent"></i> <span>Grid Style</span>
                                    <span class="label pull-right orange">5+</span>   
                                </a>
                            </li>
                            <li class="side-last"></li>
                        </ul>
                        <!-- ./sidebar-nav -->
                    </div>
                    <!-- ./sidebar -->
                </div>
                <!-- ./sidebar-nav -->
            </div>
            <!-- ./sidebar-wrapper -->
            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header z-depth-1">
                        <div class="header-icon">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="header-title">
                            <h1> Notification</h1>
                            <small> Notification Details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="notification.html">Notification</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-triangle fa-lg"></i>
                                        <h2>Bootstrap Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success z-depth-1">
                                            <strong>Success!</strong> This alert box could indicate a successful or positive action.
                                        </div>
                                        <div class="alert alert-info z-depth-1">
                                            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                                        </div>
                                        <div class="alert alert-warning z-depth-1">
                                            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                                        </div>
                                        <div class="alert alert-danger z-depth-1">
                                            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->

                            <!-- Animated alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-circle fa-lg"></i>
                                        <h2>Bootstrap Animated Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Success!</strong> This alert box could indicate a successful or positive action.
                                        </div>
                                        <div class="alert alert-info alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
                                        </div>
                                        <div class="alert alert-warning alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
                                        </div>
                                        <div class="alert alert-danger alert-dismissable fade in z-depth-1">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->
                        </div>
                        <!-- ./row -->
                        <!-- alerts link-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bell fa-lg"></i>
                                        <h2>Bootstrap Alerts link</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="alert alert-success z-depth-1" role="alert">
                                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                                        </div>
                                        <div class="alert alert-info z-depth-1" role="alert">
                                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                                        </div>
                                        <div class="alert alert-warning z-depth-1" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                                        </div>
                                        <div class="alert alert-danger z-depth-1" role="alert">
                                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts link-->

                            <!-- alerts -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bell fa-lg"></i>
                                        <h2>notify Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="button-list">
                                            <button type="button" class="btn m-b-10" onclick="api_type('default')">default</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('toast')">toast</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('info')">info</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('success')">success</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('danger')">danger</button>
                                            <button type="button" class="btn m-b-10" onclick="api_type('warning')">warning</button>
                                        </div>
                                        <pre class="prettyprint">$.notify("Alert!", {type:"info"});</pre>
                                        <h3>Colorfull Alerts</h3>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-1 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#D44950'})">#D44950</button>
                                            <button type="button" class="btn btn-2 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#4B7EE0'})">#4B7EE0</button>
                                            <button type="button" class="btn btn-3 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#20D67B'})">#20D67B</button>
                                            <button type="button" class="btn btn-4 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#A5881B'})">#A5881B</button>
                                            <button type="button" class="btn btn-5 m-b-10" onclick="$.notify('Alert!', {color: '#fff', background: '#4a148c'})">purple</button>
                                        </div>
                                        <pre class="prettyprint">$.notify("Alert!", {color: "#fff", background: "#D44950"});</pre>

                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->
                        </div>
                        <!-- ./row -->
                        <div class="row">
                            <!-- Sweet Alerts -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation fa-lg"></i>
                                        <h2>Sweet Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="showcase sweet">
                                            <button class="waves-effect waves-light btn m-b-10 m-t-5">Show error message</button>
                                            <pre>
swal(
  <span class="str">'Oops...'</span>,
  <span class="str">'Something went wrong!'</span>,
  <span class="str">'error'</span>
)</pre>
                                        </div>
                                        <ul class="examples">
                                            <li class="message">
                                                <div class="ui">
                                                    <p>A basic message</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="title-text">
                                                <div class="ui">
                                                    <p>A title with a text under</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>
                                            <li class="success">
                                                <div class="ui">
                                                    <p>A success message!</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="html">
                                                <div class="ui">
                                                    <p>Custom HTML description and buttons</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>
                                            </li>

                                            <li class="html-jquery">
                                                <div class="ui">
                                                    <p>jQuery HTML with custom animation (<a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css <i class="fa fa-external-link"></i></a>)</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="warning confirm">
                                                <div class="ui">
                                                    <p>A warning message, with a function attached to the "Confirm"-button...</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="warning cancel" id="dismiss-handle">
                                                <div class="ui">
                                                    <p>... and by passing a parameter, you can execute something else for "Cancel".</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>

                                            <li class="custom-image">
                                                <div class="ui">
                                                    <p>A message with a custom image and CSS animation disabled</p>
                                                    <button class="waves-effect waves-light btn m-b-10 m-t-5">Try me!</button>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ./alerts -->

                            <!-- Animated alerts -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-exclamation-circle fa-lg"></i>
                                        <h2>Animated Alerts</h2>
                                    </div>
                                    <div class="card-content">
                                        <table class="table table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Scale</td>
                                                    <td>
                                                        <button id="scale" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jelly</td>
                                                    <td>
                                                        <button id="jelly" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Slide in</td>
                                                    <td>
                                                        <button id="slideIn" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Genie</td>
                                                    <td>
                                                        <button id="genie" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Flip</td>
                                                    <td>
                                                        <button id="flip" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bouncy Flip</td>
                                                    <td>
                                                        <button id="bouncyFlip" class="btn progress-button pull-right m-b-5 m-t-5">
                                                            <span class="">Run example</span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <!-- ./animated alert -->
                        </div>
                        <!-- ./row -->
                    </div>
                    <!-- ./cotainer -->
                </div>
                <!-- ./page-content -->
            </div>
            <!-- ./page-content-wrapper -->
        </div>
        <!-- ./page-wrapper -->
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-position">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-teal">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- materialize  -->
        <script src="assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
        <!-- metismenu-master -->
        <script src="assets/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- pnotify -->
        <script src="assets/plugins/pnotify/pnotify.custom.min.js" type="text/javascript"></script>
        <!-- sweet alert2 -->
        <script src="assets/plugins/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <!-- Notify -->
        <script src="assets/plugins/notify/js/notify.js" type="text/javascript"></script>
        <script src="assets/plugins/notify/js/prettify.js" type="text/javascript"></script>
        <!-- iziToast -->
        <script src="assets/plugins/iziToast/dist/js/iziToast.min.js" type="text/javascript"></script>
        <!-- Notification js -->
        <script src="assets/plugins/NotificationStyles/js/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/classie.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/notificationFx.js" type="text/javascript"></script>
        <script src="assets/plugins/NotificationStyles/js/snap.svg-min.js" type="text/javascript"></script>
        <script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script
            =====================================================================-->

        <script>
                                                "use strict";
                                                //iztoast js
                                                iziToast.show({
                                                    title: 'Hey',
                                                    message: 'What would you like to add?'
                                                });
                                                // animated alerts
                                                function animalert() {
                                                    (function () {
                                                        function1();
                                                        function2();
                                                        function3();
                                                        function4();
                                                        function5();
                                                        function6();
                                                    })();

                                                    function function1() {
                                                        var bttn = document.getElementById('scale');
                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>This is just a simple notice. Everything is in order and this is a <a href="#">simple link</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'scale',
                                                                    type: 'notice', // notice, warning, error or success
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function2() {
                                                        var bttn = document.getElementById('jelly');
                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Hello there! I\'m a classic notification but I have some elastic jelliness thanks to <a href="http://bouncejs.com/">bounce.js</a>. </p>',
                                                                    layout: 'growl',
                                                                    effect: 'jelly',
                                                                    type: 'notice', // notice, warning, error or success
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function3() {
                                                        var bttn = document.getElementById('slideIn');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>This notification has slight elasticity to it thanks to <a href="http://bouncejs.com/">bounce.js</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'slide',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function4() {
                                                        var bttn = document.getElementById('genie');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                                                                    layout: 'growl',
                                                                    effect: 'genie',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function5() {
                                                        var bttn = document.getElementById('flip');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<p>Your preferences have been saved successfully. See all your settings in your <a href="#">profile overview</a>.</p>',
                                                                    layout: 'attached',
                                                                    effect: 'flip',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }

                                                    function function6() {

                                                        var bttn = document.getElementById('bouncyFlip');

                                                        // make sure..
                                                        bttn.disabled = false;

                                                        bttn.addEventListener('click', function () {
                                                            // simulate loading (for demo purposes only)
                                                            classie.add(bttn, 'active');
                                                            setTimeout(function () {

                                                                classie.remove(bttn, 'active');

                                                                // create the notification
                                                                var notification = new NotificationFx({
                                                                    message: '<span class="icon icon-calendar"></span><p>The event was added to your calendar. Check out all your events in your <a href="#">event overview</a>.</p>',
                                                                    layout: 'attached',
                                                                    effect: 'bouncyflip',
                                                                    type: 'notice', // notice, warning or error
                                                                    onClose: function () {
                                                                        bttn.disabled = false;
                                                                    }
                                                                });

                                                                // show the notification
                                                                notification.show();

                                                            }, 1200);

                                                            // disable the button (for demo purposes only)
                                                            this.disabled = true;
                                                        });
                                                    }
                                                }

                                                animalert();
                                                //Notify js
                                                function usage() {
                                                    $.notify("Alert!");
                                                }

                                                function api_type(type) {
                                                    $.notify("Alert!", {
                                                        type: type
                                                    });
                                                }

                                                function api_position() {
                                                    var an = $(":radio[name=align]:checked").val();
                                                    var vn = $(":radio[name=verticalAlign]:checked").val();
                                                    $.notify("Alert!", {
                                                        align: an,
                                                        verticalAlign: vn
                                                    });
                                                }

                                                function api_delay() {
                                                    $.notify("Alert!", {
                                                        delay: $("#delayValue").val()
                                                    });
                                                }

                                                function myFunc() {
                                                    alert("?????????????????????");
                                                }

                                                function example1() {
                                                    $.notify({
                                                        delay: 999999,
                                                        message: "hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!hello world!",
                                                        type: "warning",
                                                        close: "true",
                                                        animation: true,
                                                        animationType: "scale",
                                                        align: "center",
                                                        verticalAlign: "middle",
                                                        color: "#777",
                                                        background: "#eee"
                                                    });
                                                }

                                                function example2() {
                                                    $.notify({
                                                        delay: 0,
                                                        message: "hello world!",
                                                        animation: true,
                                                        align: "center",
                                                        verticalAlign: "middle",
                                                        buttons: ["??????", "??????"],
                                                        buttonFunc: ["test"],
                                                        buttonAlign: "right",
                                                        blur: 0.2
                                                    });
                                                }

                                                !function ($) {
                                                    $(function () {
                                                        window.prettyPrint && prettyPrint()
                                                    })
                                                }(window.jQuery)

                                                //sweet alerts
                                                function sweetalerts() {
                                                    $('.download').on('click', function () {
                                                        $('html, body').animate({
                                                            scrollTop: $('.download-section').offset().top
                                                        }, 1000)
                                                    })

                                                    $('.showcase.normal button').on('click', function () {
                                                        window.alert('Oops! Something went wrong!')
                                                    })

                                                    $('.showcase.sweet button').on('click', function () {
                                                        swal('Oops...', 'Something went wrong!', 'error').catch(swal.noop)
                                                    })

                                                    $('.examples .message button').on('click', function () {
                                                        swal('Any fool can use a computer').catch(swal.noop)
                                                    })

                                                    $('.examples .timer button').on('click', function () {
                                                        swal({
                                                            title: 'Auto close alert!',
                                                            text: 'I will close in 2 seconds.',
                                                            timer: 2000
                                                        }).then(
                                                                function () {},
                                                                // handling the promise rejection
                                                                        function (dismiss) {
                                                                            if (dismiss === 'timer') {
                                                                                console.log('I was closed by the timer')
                                                                            }
                                                                        }
                                                                )
                                                            })
                                                    //sweet alerts1
                                                    $('.examples .html button').on('click', function () {
                                                        swal({
                                                            title: '<i>HTML</i> <u>example</u>',
                                                            type: 'info',
                                                            html: 'You can use <b>bold text</b>, ' +
                                                                    '<a href="//github.com">links</a> ' +
                                                                    'and other HTML tags',
                                                            showCloseButton: true,
                                                            showCancelButton: true,
                                                            confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                                                            cancelButtonText: '<i class="fa fa-thumbs-down"></i>'
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts2
                                                    $('.examples .html-jquery button').on('click', function () {
                                                        swal({
                                                            title: 'jQuery HTML example',
                                                            html: $('<div>').addClass('some-class').text('jQuery is everywhere.'),
                                                            animation: false,
                                                            customClass: 'animated tada'
                                                        }).catch(swal.noop)
                                                    })
                                                    //sweet alerts3
                                                    $('.examples .title-text button').on('click', function () {
                                                        swal('The Internet?', 'That thing is still around?', 'question').catch(swal.noop)
                                                    })
                                                    //sweet alerts4
                                                    $('.examples .success button').on('click', function () {
                                                        swal('Good job!', 'You clicked the button!', 'success').catch(swal.noop)
                                                    })
                                                    //sweet alerts5
                                                    $('.examples .warning.confirm button').on('click', function () {
                                                        swal({
                                                            title: 'Are you sure?',
                                                            text: 'You won\'t be able to revert this!',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!'
                                                        }).then(function () {
                                                            swal('Deleted!', 'Your file has been deleted!', 'success')
                                                        }).catch(swal.noop)


                                                        
                                                    })
                                                    //sweet alerts6
                                                    $('.examples .warning.cancel button').on('click', function () {
                                                        swal({
                                                            title: 'Are you sure?',
                                                            text: 'Buttons below are styled with Bootstrap classes',
                                                            type: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Yes, delete it!',
                                                            cancelButtonText: 'No, cancel!',
                                                            confirmButtonClass: 'btn btn-success',
                                                            cancelButtonClass: 'btn btn-danger',
                                                            buttonsStyling: false
                                                        }).then(function () {
                                                            swal('Deleted!', 'Your file has been deleted!', 'success')
                                                        }, function (dismiss) {
                                                            // dismiss can be 'cancel', 'overlay', 'close', 'timer'
                                                            if (dismiss === 'cancel') {
                                                                swal('Cancelled', 'Your imaginary file is safe :)', 'error')
                                                            }
                                                        })
                                                    })




                                                    //sweet alerts7
                                                    $('.examples .custom-image button').on('click', function () {
                                                        swal({
                                                            title: 'Sweet!',
                                                            text: 'Modal with a custom image.',
                                                            imageUrl: 'https://unsplash.it/400/200/?random',
                                                            imageWidth: 400,
                                                            imageHeight: 200,
                                                            animation: false
                                                        }).catch(swal.noop)



                                                    })
                                                    //sweet alerts8
                                                    $('.examples .custom-width-padding-background button').on('click', function () {
                                                        swal({
                                                            title: 'Custom width, padding, background.',
                                                            width: 600,
                                                            padding: 100,
                                                            background: '#fff url(https://bit.ly/1Nqn9HU)'
                                                        }).catch(swal.noop)
                                                    })

                                                    $('.examples .dynamic-queue button').on('click', function () {
                                                        swal.queue([{
                                                                title: 'Your public IP',
                                                                confirmButtonText: 'Show my public IP',
                                                                text: 'Your public IP will be received via AJAX request',
                                                                currentProgressStep: 0,
                                                                showLoaderOnConfirm: true,
                                                                preConfirm: function () {
                                                                    return new Promise(function (resolve) {
                                                                        $.get('https://api.ipify.org?format=json')
                                                                                .done(function (data) {
                                                                                    swal.insertQueueStep(data.ip)
                                                                                    resolve()
                                                                                })
                                                                    })
                                                                }
                                                            }]).catch(swal.noop)
                                                    })

                                                    $('.modal-types button').on('click', function () {
                                                        var type = $(this).attr('class').slice(5)
                                                        swal(type + '!', '', type).catch(swal.noop)
                                                    })
                                                }

                                                sweetalerts();
        </script>

    </body>

</html>