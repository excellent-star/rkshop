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
                            <li class="active">
                                <a><i class="material-icons">insert_emoticon</i>Icons<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="active-link"><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
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
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="header-title">
                            <h1> Bootstrap Icons</h1>
                            <small> Bootstrap Icons details & used</small>
                            <ul class="link">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Bootstrap icons -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-cloud fa-lg"></i>
                                        <h2>Glyphicons Icons</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Bootstrap icons -->
                                        <p class="m-b-20">Includes over 250 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.</p>
                                        <div class="m-b-20 flag-icon-inner">
                                            <ul class="icon_list z-depth-1">
                                                <li>
                                                    <i class="glyphicon glyphicon-asterisk"></i>
                                                    <span class="icon_name">glyphicon-asterisk</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span class="icon_name">glyphicon-plus</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-euro"></i>
                                                    <span class="icon_name">glyphicon-euro</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-eur"></i>
                                                    <span class="icon_name">glyphicon-eur</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-minus"></i>
                                                    <span class="icon_name">glyphicon-minus</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cloud"></i>
                                                    <span class="icon_name">glyphicon-cloud</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-envelope"></i>
                                                    <span class="icon_name">glyphicon-envelope</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    <span class="icon_name">glyphicon-pencil</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-glass"></i>
                                                    <span class="icon_name">glyphicon-glass</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-music"></i>
                                                    <span class="icon_name">glyphicon-music</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-search"></i>
                                                    <span class="icon_name">glyphicon-search</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-heart"></i>
                                                    <span class="icon_name">glyphicon-heart</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-star"></i>
                                                    <span class="icon_name">glyphicon-star</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-star-empty"></i>
                                                    <span class="icon_name">glyphicon-star-empty</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-user"></i>
                                                    <span class="icon_name">glyphicon-user</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-film"></i>
                                                    <span class="icon_name">glyphicon-film</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-th-large"></i>
                                                    <span class="icon_name">glyphicon-th-large</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-th"></i>
                                                    <span class="icon_name">glyphicon-th</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-th-list"></i>
                                                    <span class="icon_name">glyphicon-th-list</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ok"></i>
                                                    <span class="icon_name">glyphicon-ok</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-remove"></i>
                                                    <span class="icon_name">glyphicon-remove</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-zoom-in"></i>
                                                    <span class="icon_name">glyphicon-zoom-in</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-zoom-out"></i>
                                                    <span class="icon_name">glyphicon-zoom-out</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-off"></i>
                                                    <span class="icon_name">glyphicon-off</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-signal"></i>
                                                    <span class="icon_name">glyphicon-signal</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cog"></i>
                                                    <span class="icon_name">glyphicon-cog</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span class="icon_name">glyphicon-trash</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-home"></i>
                                                    <span class="icon_name">glyphicon-home</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-file"></i>
                                                    <span class="icon_name">glyphicon-file</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-time"></i>
                                                    <span class="icon_name">glyphicon-time</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-road"></i>
                                                    <span class="icon_name">glyphicon-road</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-download-alt"></i>
                                                    <span class="icon_name">glyphicon-download-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-download"></i>
                                                    <span class="icon_name">glyphicon-download</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-upload"></i>
                                                    <span class="icon_name">glyphicon-upload</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-inbox"></i>
                                                    <span class="icon_name">glyphicon-inbox</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-play-circle"></i>
                                                    <span class="icon_name">glyphicon-play-circle</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-repeat"></i>
                                                    <span class="icon_name">glyphicon-repeat</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-refresh"></i>
                                                    <span class="icon_name">glyphicon-refresh</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-list-alt"></i>
                                                    <span class="icon_name">glyphicon-list-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-lock"></i>
                                                    <span class="icon_name">glyphicon-lock</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-flag"></i>
                                                    <span class="icon_name">glyphicon-flag</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-headphones"></i>
                                                    <span class="icon_name">glyphicon-headphones</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-volume-off"></i>
                                                    <span class="icon_name">glyphicon-volume-off</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-volume-down"></i>
                                                    <span class="icon_name">glyphicon-volume-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-volume-up"></i>
                                                    <span class="icon_name">glyphicon-volume-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-qrcode"></i>
                                                    <span class="icon_name">glyphicon-qrcode</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-barcode"></i>
                                                    <span class="icon_name">glyphicon-barcode</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tag"></i>
                                                    <span class="icon_name">glyphicon-tag</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tags"></i>
                                                    <span class="icon_name">glyphicon-tags</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-book"></i>
                                                    <span class="icon_name">glyphicon-book</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bookmark"></i>
                                                    <span class="icon_name">glyphicon-bookmark</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-print"></i>
                                                    <span class="icon_name">glyphicon-print</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-camera"></i>
                                                    <span class="icon_name">glyphicon-camera</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-font"></i>
                                                    <span class="icon_name">glyphicon-font</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bold"></i>
                                                    <span class="icon_name">glyphicon-bold</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-italic"></i>
                                                    <span class="icon_name">glyphicon-italic</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-text-height"></i>
                                                    <span class="icon_name">glyphicon-text-height</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-text-width"></i>
                                                    <span class="icon_name">glyphicon-text-width</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-align-left"></i>
                                                    <span class="icon_name">glyphicon-align-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-align-center"></i>
                                                    <span class="icon_name">glyphicon-align-center</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-align-right"></i>
                                                    <span class="icon_name">glyphicon-align-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-align-justify"></i>
                                                    <span class="icon_name">glyphicon-align-justify</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-list"></i>
                                                    <span class="icon_name">glyphicon-list</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-indent-left"></i>
                                                    <span class="icon_name">glyphicon-indent-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-indent-right"></i>
                                                    <span class="icon_name">glyphicon-indent-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-facetime-video"></i>
                                                    <span class="icon_name">glyphicon-facetime-video</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-picture"></i>
                                                    <span class="icon_name">glyphicon-picture</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-map-marker"></i>
                                                    <span class="icon_name">glyphicon-map-marker</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-adjust"></i>
                                                    <span class="icon_name">glyphicon-adjust</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tint"></i>
                                                    <span class="icon_name">glyphicon-tint</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                    <span class="icon_name">glyphicon-edit</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-share"></i>
                                                    <span class="icon_name">glyphicon-share</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-check"></i>
                                                    <span class="icon_name">glyphicon-check</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-move"></i>
                                                    <span class="icon_name">glyphicon-move</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-step-backward"></i>
                                                    <span class="icon_name">glyphicon-step-backward</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-fast-backward"></i>
                                                    <span class="icon_name">glyphicon-fast-backward</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-backward"></i>
                                                    <span class="icon_name">glyphicon-backward</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-play"></i>
                                                    <span class="icon_name">glyphicon-play</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-pause"></i>
                                                    <span class="icon_name">glyphicon-pause</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-stop"></i>
                                                    <span class="icon_name">glyphicon-stop</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-stop"></i>
                                                    <span class="icon_name">glyphicon-stop</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-fast-forward"></i>
                                                    <span class="icon_name">glyphicon-fast-forward</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-eject"></i>
                                                    <span class="icon_name">glyphicon-eject</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    <span class="icon_name">glyphicon-chevron-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                    <span class="icon_name">glyphicon-chevron-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-plus-sign"></i>
                                                    <span class="icon_name">glyphicon-plus-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-minus-sign"></i>
                                                    <span class="icon_name">glyphicon-minus-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-remove-sign"></i>
                                                    <span class="icon_name">glyphicon-remove-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ok-sign"></i>
                                                    <span class="icon_name">glyphicon-ok-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-question-sign"></i>
                                                    <span class="icon_name">glyphicon-question-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-info-sign"></i>
                                                    <span class="icon_name">glyphicon-info-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-screenshot"></i>
                                                    <span class="icon_name">glyphicon-screenshot</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-remove-circle"></i>
                                                    <span class="icon_name">glyphicon-remove-circle</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ok-circle"></i>
                                                    <span class="icon_name">glyphicon-ok-circle</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                    <span class="icon_name">glyphicon-ban-circle</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-arrow-left"></i>
                                                    <span class="icon_name">glyphicon-arrow-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-arrow-right"></i>
                                                    <span class="icon_name">glyphicon-arrow-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-arrow-up"></i>
                                                    <span class="icon_name">glyphicon-arrow-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-arrow-down"></i>
                                                    <span class="icon_name">glyphicon-arrow-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-share-alt"></i>
                                                    <span class="icon_name">glyphicon-share-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-resize-full"></i>
                                                    <span class="icon_name">glyphicon-resize-full</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-resize-small"></i>
                                                    <span class="icon_name">glyphicon-resize-small</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-exclamation-sign"></i>
                                                    <span class="icon_name">glyphicon-exclamation-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-gift"></i>
                                                    <span class="icon_name">glyphicon-gift</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-leaf"></i>
                                                    <span class="icon_name">glyphicon-leaf</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-fire"></i>
                                                    <span class="icon_name">glyphicon-fire</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                    <span class="icon_name">glyphicon-eye-open</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-eye-close"></i>
                                                    <span class="icon_name">glyphicon-eye-close</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-warning-sign"></i>
                                                    <span class="icon_name">glyphicon-warning-sign</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-plane"></i>
                                                    <span class="icon_name">glyphicon-plane</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon glyphicon-calendar"></i>
                                                    <span class="icon_name">glyphicon glyphicon-calendar</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-random"></i>
                                                    <span class="icon_name">glyphicon-random</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-comment"></i>
                                                    <span class="icon_name">glyphicon-comment</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-magnet"></i>
                                                    <span class="icon_name">glyphicon-magnet</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                                    <span class="icon_name">glyphicon-chevron-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-chevron-down"></i>
                                                    <span class="icon_name">glyphicon-chevron-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-retweet"></i>
                                                    <span class="icon_name">glyphicon-retweet</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                                    <span class="icon_name">glyphicon-shopping-cart</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-folder-close"></i>
                                                    <span class="icon_name">glyphicon-folder-close</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-folder-open"></i>
                                                    <span class="icon_name">glyphicon-folder-open</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-resize-vertical"></i>
                                                    <span class="icon_name">glyphicon-resize-vertical</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-resize-horizontal"></i>
                                                    <span class="icon_name">glyphicon-resize-horizontal</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hdd"></i>
                                                    <span class="icon_name">glyphicon-hdd</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bullhorn"></i>
                                                    <span class="icon_name">glyphicon-bullhorn</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bell"></i>
                                                    <span class="icon_name">glyphicon-bell</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-certificate"></i>
                                                    <span class="icon_name">glyphicon-certificate</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-thumbs-up"></i>
                                                    <span class="icon_name">glyphicon-thumbs-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-thumbs-down"></i>
                                                    <span class="icon_name">glyphicon-thumbs-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hand-right"></i>
                                                    <span class="icon_name">glyphicon-hand-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hand-left"></i>
                                                    <span class="icon_name">glyphicon-hand-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hand-up"></i>
                                                    <span class="icon_name">glyphicon-hand-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hand-down"></i>
                                                    <span class="icon_name">glyphicon-hand-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-circle-arrow-right"></i>
                                                    <span class="icon_name">glyphicon-circle-arrow-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-circle-arrow-left"></i>
                                                    <span class="icon_name">glyphicon-circle-arrow-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-circle-arrow-up"></i>
                                                    <span class="icon_name">glyphicon-circle-arrow-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-circle-arrow-down"></i>
                                                    <span class="icon_name">glyphicon-circle-arrow-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-globe"></i>
                                                    <span class="icon_name">glyphicon-globe</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-wrench"></i>
                                                    <span class="icon_name">glyphicon-wrench</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tasks"></i>
                                                    <span class="icon_name">glyphicon-tasks</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-filter"></i>
                                                    <span class="icon_name">glyphicon-filter</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-briefcase"></i>
                                                    <span class="icon_name">glyphicon-briefcase</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-fullscreen"></i>
                                                    <span class="icon_name">glyphicon-fullscreen</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-dashboard"></i>
                                                    <span class="icon_name">glyphicon-dashboard</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-paperclip"></i>
                                                    <span class="icon_name">glyphicon-paperclip</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-heart-empty"></i>
                                                    <span class="icon_name">glyphicon-heart-empty</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-link"></i>
                                                    <span class="icon_name">glyphicon-link</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-phone"></i>
                                                    <span class="icon_name">glyphicon-phone</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-pushpin"></i>
                                                    <span class="icon_name">glyphicon-pushpin</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-usd"></i>
                                                    <span class="icon_name">glyphicon-usd</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-gbp"></i>
                                                    <span class="icon_name">glyphicon-gbp</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort"></i>
                                                    <span class="icon_name">glyphicon-sort</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-alphabet"></i>
                                                    <span class="icon_name">glyphicon-sort-by-alphabet</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-alphabet-alt"></i>
                                                    <span class="icon_name">glyphicon-sort-by-alphabet-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-order"></i>
                                                    <span class="icon_name">glyphicon-sort-by-order</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-order-alt"></i>
                                                    <span class="icon_name">glyphicon-sort-by-order-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-attributes"></i>
                                                    <span class="icon_name">glyphicon-sort-by-attributes</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
                                                    <span class="icon_name">glyphicon-sort-by-attributes-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-unchecked"></i>
                                                    <span class="icon_name">glyphicon-unchecked</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-expand"></i>
                                                    <span class="icon_name">glyphicon-expand</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-collapse-down"></i>
                                                    <span class="icon_name">glyphicon-collapse-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-collapse-up"></i>
                                                    <span class="icon_name">glyphicon-collapse-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-log-in"></i>
                                                    <span class="icon_name">glyphicon-log-in</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-flash"></i>
                                                    <span class="icon_name">glyphicon-flash</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-log-out"></i>
                                                    <span class="icon_name">glyphicon-log-out</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-new-window"></i>
                                                    <span class="icon_name">glyphicon-new-window</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-record"></i>
                                                    <span class="icon_name">glyphicon-record</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-save"></i>
                                                    <span class="icon_name">glyphicon-save</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-open"></i>
                                                    <span class="icon_name">glyphicon-open</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-saved"></i>
                                                    <span class="icon_name">glyphicon-saved</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-import"></i>
                                                    <span class="icon_name">glyphicon-import</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-export"></i>
                                                    <span class="icon_name">glyphicon-export</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-send"></i>
                                                    <span class="icon_name">glyphicon-send</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-floppy-disk"></i>
                                                    <span class="icon_name">glyphicon-floppy-disk</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-floppy-saved"></i>
                                                    <span class="icon_name">glyphicon-floppy-saved</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-floppy-remove"></i>
                                                    <span class="icon_name">glyphicon-floppy-remove</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-floppy-save"></i>
                                                    <span class="icon_name">glyphicon-floppy-save</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-floppy-open"></i>
                                                    <span class="icon_name">glyphicon-floppy-open</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-credit-card"></i>
                                                    <span class="icon_name">glyphicon-credit-card</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-transfer"></i>
                                                    <span class="icon_name">glyphicon-transfer</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cutlery"></i>
                                                    <span class="icon_name">glyphicon-cutlery</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-header"></i>
                                                    <span class="icon_name">glyphicon-header</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-compressed"></i>
                                                    <span class="icon_name">glyphicon-compressed</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-earphone"></i>
                                                    <span class="icon_name">glyphicon-earphone</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                                    <span class="icon_name">glyphicon-phone-alt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tower"></i>
                                                    <span class="icon_name">glyphicon-tower</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-stats"></i>
                                                    <span class="icon_name">glyphicon-stats</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sd-video"></i>
                                                    <span class="icon_name">glyphicon-sd-video</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hd-video"></i>
                                                    <span class="icon_name">glyphicon-hd-video</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-subtitles"></i>
                                                    <span class="icon_name">glyphicon-subtitles</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sound-stereo"></i>
                                                    <span class="icon_name">glyphicon-sound-stereo</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sound-dolby"></i>
                                                    <span class="icon_name">glyphicon-sound-dolby</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sound-5-1"></i>
                                                    <span class="icon_name">glyphicon-sound-5-1</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sound-6-1"></i>
                                                    <span class="icon_name">glyphicon-sound-6-1</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sound-7-1"></i>
                                                    <span class="icon_name">glyphicon-sound-7-1</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-copyright-mark"></i>
                                                    <span class="icon_name">glyphicon-copyright-mark</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-registration-mark"></i>
                                                    <span class="icon_name">glyphicon-registration-mark</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                                    <span class="icon_name">glyphicon-cloud-download</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cloud-upload"></i>
                                                    <span class="icon_name">glyphicon-cloud-upload</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tree-conifer"></i>
                                                    <span class="icon_name">glyphicon-tree-conifer</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tree-deciduous"></i>
                                                    <span class="icon_name">glyphicon-tree-deciduous</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-cd"></i>
                                                    <span class="icon_name">glyphicon-cd</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-save-file"></i>
                                                    <span class="icon_name">glyphicon-save-file</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-open-file"></i>
                                                    <span class="icon_name">glyphicon-open-file</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-level-up"></i>
                                                    <span class="icon_name">glyphicon-level-up</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-copy"></i>
                                                    <span class="icon_name">glyphicon-copy</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-paste"></i>
                                                    <span class="icon_name">glyphicon-paste</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-alert"></i>
                                                    <span class="icon_name">glyphicon-alert</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-equalizer"></i>
                                                    <span class="icon_name">glyphicon-equalizer</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-king"></i>
                                                    <span class="icon_name">glyphicon-king</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-queen"></i>
                                                    <span class="icon_name">glyphicon-queen</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-pawn"></i>
                                                    <span class="icon_name">glyphicon-pawn</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bishop"></i>
                                                    <span class="icon_name">glyphicon-bishop</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-knight"></i>
                                                    <span class="icon_name">glyphicon-knight</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-baby-formula"></i>
                                                    <span class="icon_name">glyphicon-baby-formula</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-tent"></i>
                                                    <span class="icon_name">glyphicon-tent</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-blackboard"></i>
                                                    <span class="icon_name">glyphicon-blackboard</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bed"></i>
                                                    <span class="icon_name">glyphicon-bed</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-apple"></i>
                                                    <span class="icon_name">glyphicon-apple</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-erase"></i>
                                                    <span class="icon_name">glyphicon-erase</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-hourglass"></i>
                                                    <span class="icon_name">glyphicon-hourglass</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-lamp"></i>
                                                    <span class="icon_name">glyphicon-lamp</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-duplicate"></i>
                                                    <span class="icon_name">glyphicon-duplicate</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-piggy-bank"></i>
                                                    <span class="icon_name">glyphicon-piggy-bank</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-scissors"></i>
                                                    <span class="icon_name">glyphicon-scissors</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-bitcoin"></i>
                                                    <span class="icon_name">glyphicon-bitcoin</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-btc"></i>
                                                    <span class="icon_name">glyphicon-btc</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-xbt"></i>
                                                    <span class="icon_name">glyphicon-xbt</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-yen"></i>
                                                    <span class="icon_name">glyphicon-yen</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-jpy"></i>
                                                    <span class="icon_name">glyphicon-jpy</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ruble"></i>
                                                    <span class="icon_name">glyphicon-ruble</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-rub"></i>
                                                    <span class="icon_name">glyphicon-rub</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-scale"></i>
                                                    <span class="icon_name">glyphicon-scale</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ice-lolly"></i>
                                                    <span class="icon_name">glyphicon-ice-lolly</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-ice-lolly-tasted"></i>
                                                    <span class="icon_name">glyphicon-ice-lolly-tasted</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-education"></i>
                                                    <span class="icon_name">glyphicon-education</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-option-horizontal"></i>
                                                    <span class="icon_name">glyphicon-option-horizontal</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-option-vertical"></i>
                                                    <span class="icon_name">glyphicon-option-vertical</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                                                    <span class="icon_name">glyphicon-menu-hamburger</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-modal-window"></i>
                                                    <span class="icon_name">glyphicon-modal-window</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-oil"></i>
                                                    <span class="icon_name">glyphicon-oil</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-grain"></i>
                                                    <span class="icon_name">glyphicon-grain</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-sunglasses"></i>
                                                    <span class="icon_name">glyphicon-sunglasses</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-text-size"></i>
                                                    <span class="icon_name">glyphicon-text-size</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-text-color"></i>
                                                    <span class="icon_name">glyphicon-text-color</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-text-background"></i>
                                                    <span class="icon_name">glyphicon-text-background</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-top"></i>
                                                    <span class="icon_name">glyphicon-object-align-top</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-bottom"></i>
                                                    <span class="icon_name">glyphicon-object-align-bottom</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-horizontal"></i>
                                                    <span class="icon_name">glyphicon-object-align-horizontal</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-left"></i>
                                                    <span class="icon_name">glyphicon-object-align-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-vertical"></i>
                                                    <span class="icon_name">glyphicon-object-align-vertical</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-object-align-right"></i>
                                                    <span class="icon_name">glyphicon-object-align-righ</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-triangle-right"></i>
                                                    <span class="icon_name">glyphicon-triangle-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-triangle-left"></i>
                                                    <span class="icon_name">glyphicon-triangle-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-triangle-bottom"></i>
                                                    <span class="icon_name">glyphicon-triangle-bottom</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-triangle-top"></i>
                                                    <span class="icon_name">glyphicon-triangle-top</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-console"></i>
                                                    <span class="icon_name">glyphicon-console</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-superscript"></i>
                                                    <span class="icon_name">glyphicon-superscript</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-subscript"></i>
                                                    <span class="icon_name">glyphicon-subscript</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-menu-left"></i>
                                                    <span class="icon_name">glyphicon-menu-left</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-menu-right"></i>
                                                    <span class="icon_name">glyphicon-menu-right</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-menu-down"></i>
                                                    <span class="icon_name">glyphicon-menu-down</span>
                                                </li>
                                                <li>
                                                    <i class="glyphicon glyphicon-menu-up"></i>
                                                    <span class="icon_name">glyphicon-menu-up</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap icons -->

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
    </body>
</html>