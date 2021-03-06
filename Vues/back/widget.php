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
        <!-- Animation Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                            <li><a href="#"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="notification.html">Notification</a></li>
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
                            <li class="active-link">
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
                            <i class="fa fa-gift"></i>
                        </div>
                        <div class="header-title">
                            <h1> Widgets</h1>
                            <small> Widgets use & preview</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="widget.html">widget</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Colorful Cards -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bitbucket fa-lg"></i>
                                        <h2> Colorful Cards</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card pink darken-1">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">pink darken-1</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card red darken-2">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">red darken-2</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card purple darken-3">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">purple darken-3</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card deep-purple darken-2">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">deep-purple darken-2</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card indigo darken-2">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">indigo darken-2</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card cyan darken-2">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">cyan darken-2</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card orange darken-4">
                                                    <div class="card-content white-text">
                                                        <span class="card-title"> orange darken-4</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card grey darken-2">
                                                    <div class="card-content white-text">
                                                        <span class="card-title"> grey darken-2</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card teal darken-1">
                                                    <div class="card-content white-text">
                                                        <span class="card-title"> teal darken-1</span>
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#">This is a link</a>
                                                        <a href="#">This is a link</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- ./row -->
                                    </div>
                                </div>
                            </div>
                            <!-- ./Colorful Cards -->

                            <!-- No Heading Cards -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bitbucket fa-lg"></i>
                                        <h2> No Heading Cards</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel light-blue darken-4">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel deep-orange accent-3">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel blue-grey darken-4">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel blue-grey darken-1">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel deep-purple darken-2">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xs-12">
                                                <div class="card-panel cyan darken-3">
                                                    <span class="white-text">I am a very simple card. I am good at containing small bits of information.
                                                        I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./No Heading Cards -->
                            <!-- Simple card content -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-id-card-o"></i>
                                        <h2>Simple card content</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="panel cardbox bg-primary">
                                                    <div class="panel-body card-item panel-refresh">
                                                        <a class="refresh" href="#">
                                                            <span class="fa fa-refresh"></span>
                                                        </a> 
                                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                                        <div class="timer" data-to="780" data-speed="1500">0</div>
                                                        <div class="cardbox-icon">
                                                            <i class="material-icons">directions_run</i>
                                                        </div>
                                                        <div class="card-details">
                                                            <h4>Running Tasks</h4>
                                                            <span>10% Higher than last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="panel cardbox bg-success">
                                                    <div class="panel-body card-item panel-refresh">
                                                        <a class="refresh" href="#">
                                                            <span class="fa fa-refresh"></span>
                                                        </a> 
                                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                                        <div class="timer" data-to="1285" data-speed="1500">0</div>
                                                        <div class="cardbox-icon">
                                                            <i class="material-icons">supervisor_account</i>
                                                        </div>
                                                        <div class="card-details">
                                                            <h4>Users</h4>
                                                            <span>10% Higher than last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="panel cardbox bg-warning">
                                                    <div class="panel-body card-item panel-refresh">
                                                        <a class="refresh2" href="#">
                                                            <span class="fa fa-refresh"></span>
                                                        </a> 
                                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                                        <div class="timer" data-to="920" data-speed="1500">0</div>
                                                        <div class="cardbox-icon">
                                                            <i class="material-icons">visibility</i>
                                                        </div>
                                                        <div class="card-details">
                                                            <h4>Daily visitors</h4>
                                                            <span>10% Higher than last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                <div class="panel cardbox bg-dark">
                                                    <div class="panel-body card-item panel-refresh">
                                                        <a class="refresh" href="#">
                                                            <span class="fa fa-refresh"></span>
                                                        </a> 
                                                        <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>
                                                        <div class="timer" data-to="51" data-speed="1500">0</div>
                                                        <div class="cardbox-icon">
                                                            <i class="material-icons">email</i>
                                                        </div>
                                                        <div class="card-details">
                                                            <h4>Total Email</h4>
                                                            <span>10% Higher than last week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./row -->
                                    </div>
                                </div>
                            </div>
                            <!-- ./Simple card content -->
                            <!-- Accordion -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-sticky-note"></i>
                                        <h2>Accordion</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="panel-group" id="accordion" role="tablist">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading panel-acc" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                Collapsible Item No.1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body panel-sum">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading panel-accr" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseTwo">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                Collapsible Item No.2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body panel-summ">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading panel-accor" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseThree">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                Collapsible Item No.3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body panel-summr">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading panel-accordn" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-controls="collapseFour">
                                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                                Collapsible Item No.4
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body panel-summry">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- panel-group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Accordion -->
                            <!-- todo list -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-square-o fa-lg"></i>
                                        <h2> Todo List</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="well">
                                            <ul class="list-group checked-list-box">
                                                <li class="list-group-item">Cras justo odio</li>
                                                <li class="list-group-item" data-checked="true">Dapibus ac facilisis in</li>
                                                <li class="list-group-item">Morbi leo risus</li>
                                                <li class="list-group-item">Porta ac consectetur ac</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./todo list -->
                            <!-- profile -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-address-card-o fa-lg"></i>
                                        <h2>Profile widget</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="cards hovercards">
                                            <div class="cardheader">
                                                <img src="assets/dist/img/bac.jpg" height="135" width="335" alt="User Image">
                                            </div>
                                            <div class="avatar">
                                                <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <a target="_blank">Mr.AlRazy</a>
                                                </div>
                                                <div class="desc">FrontEnd Developer</div>
                                                <div class="desc">Curious developer</div>
                                                <div class="desc">Bdtask</div>
                                            </div>
                                            <div class="bottom">
                                                <a class="btn btn-twitter btn-sm" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" rel="publisher" href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="btn btn-warning btn-sm" rel="publisher" href="#">
                                                    <i class="fa fa-behance"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./profile -->
                            <!-- weather widget  -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bolt fa-lg"></i>
                                        <h2> Weather widget</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="weatherInfo">
                                            <div id="city">
                                                New York
                                            </div>
                                            <div class="left" id="temp">
                                                35&#176;C
                                            </div>
                                            <div class="left" id="weatherSymbol">
                                                &#9728;
                                            </div>
                                            <hr class='clear'>
                                            <div class="forecast left">
                                                <div class="day">Tu</div>
                                                <div class="forecastTemp">15&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Wed</div>
                                                <div class="forecastTemp">31&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Th</div>
                                                <div class="forecastTemp">25&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Fr</div>
                                                <div class="forecastTemp">19&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Sa</div>
                                                <div class="forecastTemp">42&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Su</div>
                                                <div class="forecastTemp">-1&#176;C</div>
                                            </div>
                                            <div class="forecast left">
                                                <div class="day">Mo</div>
                                                <div class="forecastTemp">-5&#176;C</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./weather widget -->
                            <!-- Basic Cards -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bitbucket fa-lg"></i>
                                        <h2> Basic Cards</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="card-image">
                                                        <img src="assets/dist/img/imgs/3.jpg" height="170" alt="card">
                                                        <span class="card-title cd-title">This is title</span>
                                                        <a class="btn-floating halfway-fab waves-effect waves-light red card-btn"><i class="material-icons">add</i></a>
                                                    </div>
                                                    <div class="card-content card-summry">
                                                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="card-image waves-effect waves-block waves-light">
                                                        <img src="assets/dist/img/imgs/2.jpg" height="170" alt="card">
                                                    </div>
                                                    <div class="card-content card-lnk">
                                                        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                                                        <p><a href="#">This is a link</a></p>
                                                    </div>
                                                    <div class="card-reveal">
                                                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="card horizontal">
                                                    <div class="card-image">
                                                        <img src="assets/dist/img/imgs/4.jpg" height="220" width="90" alt="logo">
                                                    </div>
                                                    <div class="card-stacked">
                                                        <div class="card-content card-summry">
                                                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                                                        </div>
                                                        <div class="card-action">
                                                            <a href="#" class="orange-text">This is a link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Basic Cards -->
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
        <!-- Start Core Plugins-->
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
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script-->
        <script>
            "use strict";
            //panel refresh
            $.fn.refreshMe = function (opts) {
                var $this = this,
                        defaults = {
                            ms: 1500,
                            started: function () {
                            },
                            completed: function () {
                            }
                        },
                settings = $.extend(defaults, opts);

                var panelToRefresh = $this.parents('.panel').find('.refresh-container');
                var dataToRefresh = $this.parents('.panel').find('.refresh-data');
                var ms = settings.ms;
                var started = settings.started;		//function before timeout
                var completed = settings.completed;	//function after timeout

                $this.click(function () {
                    $this.addClass("fa-spin");
                    panelToRefresh.show();
                    started(dataToRefresh);
                    setTimeout(function () {
                        completed(dataToRefresh);
                        panelToRefresh.fadeOut(800);
                        $this.removeClass("fa-spin");
                    }, ms);
                    return false;
                });
            };

            $(document).ready(function () {
                $('.refresh, .refresh2').refreshMe({
                    started: function (ele) {
                        ele.html("Getting new data..");
                    },
                    completed: function (ele) {
                        ele.html("This is the new data after refresh..");
                    }
                });
            });

        </script>
    </body>
</html>