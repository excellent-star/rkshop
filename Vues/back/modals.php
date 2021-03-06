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
        <!-- animate Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- tingle css -->
        <link href="assets/plugins/tingle/dist/tingle.css" rel="stylesheet" type="text/css" />
        <!-- ssi-modal css -->
        <link href="assets/plugins/ssi-modal/ssi-modal.css" rel="stylesheet" type="text/css" />
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
                                    <li><a href="notification.html">Notification</a></li>
                                    <li><a href="tree-view.html">Tree View</a></li>
                                    <li><a href="progressbars.html">Progressber</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li class="active-link"><a href="modals.html">Modals</a></li>
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
                            <i class="fa fa-window-maximize"></i>
                        </div>
                        <div class="header-title">
                            <h1> Modals</h1>
                            <small>Modal examples</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="modals.html">Modals</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- ./Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2>Modals example</h2>
                                    </div>
                                    <div class="card-content">
                                        <a class="waves-effect waves-light btn m-b-10" href="#bounceIn" data-target="#bounceIn" data-toggle="modal">bounceIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flash" data-target="#flash" data-toggle="modal">flash</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#pulse" data-target="#pulse" data-toggle="modal">pulse</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#shake" data-target="#shake" data-toggle="modal">shake</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#swing" data-target="#swing" data-toggle="modal">swing</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#tada" data-target="#tada" data-toggle="modal">tada</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#fadeIn" data-target="#fadeIn" data-toggle="modal">fadeIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#slideInLeft" data-target="#slideInLeft" data-toggle="modal">slideInLeft</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#slideInRight" data-target="#slideInRight" data-toggle="modal">slideInRight</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#rollIn" data-target="#rollIn" data-toggle="modal">rollIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#zoomIn" data-target="#zoomIn" data-toggle="modal">zoomIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#zoomInDown" data-target="#zoomInDown" data-toggle="modal">zoomInDown</a>

                                        <a class="waves-effect waves-light btn m-b-10" href="#rotateIn" data-target="#rotateIn" data-toggle="modal">rotateIn</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flipInX" data-target="#flipInX" data-toggle="modal">flipInX</a>
                                        <a class="waves-effect waves-light btn m-b-10" href="#flipInY" data-target="#flipInY" data-toggle="modal">flipInY</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ./MOdals -->

                            <!-- Animated Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2>Animated Modals example</h2>
                                    </div>
                                    <div class="card-content">
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-1 m-b-10">A simple modal</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-2 m-b-10">Need buttons?</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-3 m-b-10">Big content? No problem!</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-4 m-b-10">Stick to me!</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-5 m-b-10">Close with footer button only</button>
                                        <button class="btn cyan darken-2 btn-demo js-tingle-modal-6 m-b-10">?</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Animated Modals -->
                            <!-- ssi Modals -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-maximize fa-lg"></i>
                                        <h2> Basic Modals</h2>
                                    </div>
                                    <div class="card-content">
                                        <button id="modal" class="btn indigo darken-3 m-b-10">simple modal</button>
                                        <button id="modal1" class="btn indigo darken-3 m-b-10">Open modal</button>
                                        <button id="modal2" class="btn indigo darken-3 m-b-10">Confirm modal</button>
                                        <button id="modal2a" class="btn indigo darken-3 m-b-10">Open modal</button>
                                        <button id="modal3" class="btn indigo darken-3 m-b-10">Button modal</button>
                                        <button id="notify" class="btn indigo darken-3 m-b-10">Right top</button>
                                        <button id="notify2" class="btn indigo darken-3 m-b-10">Left top</button>
                                        <button id="notify3" class="btn indigo darken-3 m-b-10">Right bottom</button>
                                        <button id="notify4" class="btn indigo darken-3 m-b-10">Left bottom</button>
                                        <button id="notify5" class="btn indigo darken-3 m-b-10">Center top</button>
                                        <button id="notify6" class="btn indigo darken-3 m-b-10">Center bottom</button>
                                    </div>
                                </div>
                            </div>
                            <!-- ./ssi Modals -->
                            <!-- bounce -->
                            <div class="modal animated bounceIn" id="bounceIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- flash -->
                            <div class="modal animated flash" id="flash" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- flash -->
                            <div class="modal animated pulse modal-col-pink" id="pulse" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- shake -->
                            <div class="modal animated shake" id="shake" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- swing -->
                            <div class="modal animated swing" id="swing" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- tada -->
                            <div class="modal animated tada" id="tada" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- fadeIn -->
                            <div class="modal animated fadeIn" id="fadeIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- slideInRight -->
                            <div class="modal animated slideInRight" id="slideInRight" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- slideInLeft -->
                            <div class="modal animated slideInLeft" id="slideInLeft" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- zoomIn -->
                            <div class="modal animated zoomIn" id="zoomIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- zoomInDown -->
                            <div class="modal animated zoomInDown" id="zoomInDown" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- rollIn -->
                            <div class="modal animated rollIn" id="rollIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- rotateIn -->
                            <div class="modal animated rotateIn" id="rotateIn" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- flipInX -->
                            <div class="modal animated flipInX" id="flipInX" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- flipInY -->
                            <div class="modal animated flipInY" id="flipInY" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="waves-effect waves-light btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--animated Modals-->
                            <!-- Tingle tiny content -->
                            <div class="tingle-demo tingle-demo-tiny">
                                <h1>A small content</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <!-- /Tingle tiny content -->

                            <!-- Tingle big content -->
                            <div class="tingle-demo tingle-demo-big">
                                <h1 class="plop">Big content with scroll</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <img src="https://placehold.it/700x400" height="400" alt="">
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <img src="https://placehold.it/700x400" height="400" alt="">
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>

                            <!-- Tingle big content with sticky footer -->
                            <div class="tingle-demo tingle-demo-sticky">
                                <h1>Terms of use</h1>
                                <h2>Boring first article</h2>
                                <p>
                                    Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                </p>
                                <h2>Boring second article</h2>
                                <p>
                                    Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue.
                                </p>
                                <h2>Boring third article</h2>
                                <p>
                                    Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.
                                </p>

                                <p>
                                    Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                </p>
                            </div>
                            <!-- Tingle tiny content -->
                            <div class="tingle-demo tingle-demo-force-close">
                                <h1>Forcing the user to use the close button</h1>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>
                            <!-- /Tingle tiny content -->

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
        <!-- tingle js -->
        <script src="assets/plugins/tingle/dist/tingle.js" type="text/javascript"></script>
        <!-- ssi-modal js -->
        <script src="assets/plugins/ssi-modal/ssi-modal.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins-->
        =====================================================================-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script-->
        <script>
             "use strict";
            function modelsuprise() {
                //Modal Tiny no footer
                var modalTinyNoFooter = new tingle.modal({
                    onClose: function () {
                        console.log('close');
                    },
                    onOpen: function () {
                        console.log('open');
                    },
                    beforeClose: function () {
                        console.log('before close');
                        return true;
                    },
                    cssClass: ['class1', 'class2']
                });
                var btn = document.querySelector('.js-tingle-modal-1');
                btn.addEventListener('click', function () {
                    modalTinyNoFooter.open();
                });
                modalTinyNoFooter.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

                //Modal tiny with btn

                var modalTinyBtn = new tingle.modal({
                    footer: true
                });
                var btn2 = document.querySelector('.js-tingle-modal-2');

                btn2.addEventListener('click', function () {
                    modalTinyBtn.open();
                });

                modalTinyBtn.setContent(document.querySelector('.tingle-demo-tiny').innerHTML);

                modalTinyBtn.addFooterBtn('Primary action', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    alert('click on primary button!');
                });

                modalTinyBtn.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalTinyBtn.close();
                });

                modalTinyBtn.addFooterBtn('Danger!', 'tingle-btn tingle-btn--danger', function () {
                    alert('click on danger button!');
                });

                //Modal big

                var modalBigContent = new tingle.modal();
                var btn3 = document.querySelector('.js-tingle-modal-3');
                btn3.addEventListener('click', function () {
                    modalBigContent.open();
                });
                modalBigContent.setContent(document.querySelector('.tingle-demo-big').innerHTML);

                // Modal big with sticky footer

                var modalStickyFooter = new tingle.modal({
                    footer: true,
                    stickyFooter: true
                });
                var btn4 = document.querySelector('.js-tingle-modal-4');
                btn4.addEventListener('click', function () {
                    modalStickyFooter.open();
                });

                modalStickyFooter.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    modalStickyFooter.close();
                });

                modalStickyFooter.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalStickyFooter.close();
                });

                modalStickyFooter.setContent(document.querySelector('.tingle-demo-sticky').innerHTML);

                //Force close button

                var modalButtonOnly = new tingle.modal({
                    closeMethods: [],
                    footer: true,
                    stickyFooter: true
                });
                var btn5 = document.querySelector('.js-tingle-modal-5');
                btn5.addEventListener('click', function () {
                    modalButtonOnly.open();
                });
                modalButtonOnly.setContent(document.querySelector('.tingle-demo-force-close').innerHTML);

                modalButtonOnly.addFooterBtn('I agree', 'tingle-btn tingle-btn--primary tingle-btn--pull-right', function () {
                    modalButtonOnly.close();
                });

                modalButtonOnly.addFooterBtn('Cancel', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function () {
                    modalButtonOnly.close();
                });

                //Modal suprise

                var btn6 = document.querySelector('.js-tingle-modal-6');
                btn6.addEventListener('click', function () {
                    var modalSurprise = new tingle.modal({
                        onClose: function () {
                            modalSurprise.destroy();
                        }
                    });
                    modalSurprise.setContent('<iframe width="100%" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>');
                    modalSurprise.open();
                });
            }
            modelsuprise();
            //basic model
            function main() {
                var $body = $('body');
                $('#modal').click(function () {
                    ssi_modal.show({
                        content: 'Hello World'
                    });
                });
                $('#modal1').click(function () {
                    ssi_modal.show({
                        content: 'Hello World',
                        sizeClass: 'small',
                        title: 'Featured modal',
                        animation: true
                    });
                });
                $('#modal2').click(function () {
                    ssi_modal.confirm({
                        content: 'Are you sure you want to exit?',
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        cancelBtn: {
                            className: 'btn btn-danger'
                        }
                    }, function (result) {
                        if (result)
                            ssi_modal.notify('success', {
                                content: 'Result: ' + result
                            });
                        else
                            ssi_modal.notify('error', {
                                content: 'Result: ' + result
                            });
                    });
                });
                $('#modal2a').click(function () {
                    ssi_modal.dialog({
                        content: 'Hello World',
                        okBtn: {
                            className: 'btn btn-primary'
                        }
                    });
                });
                $('#modal3').click(function () {
                    ssi_modal.show({
                        content: 'Hello World',
                        title: 'Modal with buttons',
                        buttons: [{
                                className: 'btn btn-primary',
                                label: 'Ok',
                                enableAfter: 3,
                                keyPress: 39,
                                closeAfter: false,
                                method: function () {
                                    ssi_modal.notify('info', {
                                        content: 'Ok'
                                    })
                                }
                            }, {
                                className: 'btn btn-danger',
                                label: 'Cancel',
                                closeAfter: true,
                                focused: true,
                                method: function () {
                                    ssi_modal.notify('error', {
                                        content: 'Cancel'
                                    })
                                }
                            }]
                    });

                });

                $body.on('click.example', '#modal6b', function () {

                    ssi_modal.show({
                        content: '<button id="modal6c" class="btn btn-primary">Open modal</butto>',
                        sizeClass: 'small',
                        title: 'Second modal',
                        onClose: function () {
                            ssi_modal.notify('warning', {
                                content: 'Second closed'
                            })
                        }
                    });
                });

                $body.on('click.example', '#modal6c', function () {
                    ssi_modal.show({
                        content: '<a href="images/3b5dd04be82af929dd3070cb089bcf03.jpg" title="My landscape" class="ssi-imgBox"><img src="images/3b5dd04be82af929dd3070cb089bcf03.jpg" style="width:50px;height:50px"/></a>',
                        sizeClass: 'dialog',
                        title: 'Third modal',
                        onClose: function () {
                            ssi_modal.notify('info', {
                                content: 'Third closed'
                            })
                        }
                    });
                });

                var modalContent = 'Start</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>-</br>End';

                $body.on('click', '#modal5b', function (e) {});
                var modalOptions = {
                    animation: true,
                    sizeClass: 'dialog'
                };

                $body.on('click.example', '#modal10a', function () {
                    modalOptions.content = '<button id="modal10b" class="btn btn-primary">Center bottom</button>';
                    modalOptions.title = modalOptions.position = 'left top';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10b', function () {
                    modalOptions.content = '<button id="modal10c" class="btn btn-primary">Left bottom</button>';
                    modalOptions.title = modalOptions.position = 'center bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10c', function () {
                    modalOptions.content = '<button id="modal10d" class="btn btn-primary">Right bottom</button>';
                    modalOptions.title = modalOptions.position = 'left bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10d', function () {
                    modalOptions.content = '<button id="modal10e" class="btn btn-primary">Center top</button>';
                    modalOptions.title = modalOptions.position = 'right bottom';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10e', function () {
                    modalOptions.content = 'The end!!<br><br><button id="modal10f" class="btn btn-primary">Remove all</button>';
                    modalOptions.title = modalOptions.position = 'center top';
                    ssi_modal.show(modalOptions)
                });
                $body.on('click.example', '#modal10f', function () {
                    ssi_modal.removeAll();
                })

                $body.on('click.example', '#modal10', function () {

                    ssi_modal.show({
                        title: 'stackModal left top',
                        position: 'left top',
                        content: '<button id="modal11a" class="btn btn-primary">Open modal</button>',
                        backdrop: false,
                        stack: true
                    })
                });
                $body.on('click.example', '#modal11a', function () {
                    ssi_modal.show({
                        title: 'stackModal right top',
                        position: 'right top',
                        content: '<button id="modal11" class="btn btn-primary">Open modal</button>',
                        backdrop: false,
                        stack: true
                    })
                });

                //====== right top ======

                $('#notify').click(function () {
                    ssi_modal.notify('success', {
                        content: 'You have successfully upload the file!',
                        modalAnimation: {
                            'show': 'animated fadeInRight mediumSpeed',
                            'hide': 'animated  fadeOutRight mediumSpeed'
                        }
                    });
                });
                //====== left top ======

                $('#notify2').click(function () {
                    ssi_modal.notify('error', {
                        position: 'left top',
                        backdrop: 'shared',
                        outSideClose: true,
                        content: 'An error occurred.',
                        buttons: [{
                                label: 'Shared backdrop',
                                className: 'btn btn-default btn-xs',
                                method: function () {
                                    ssi_modal.notify('info', {
                                        content: 'hi',
                                        outSideClose: true,
                                        backdrop: 'shared'
                                    })
                                }
                            }, {
                                label: 'Without backdrop',
                                className: 'btn btn-default btn-xs',
                                method: function () {
                                    ssi_modal.notify('warning', {
                                        content: 'hi'
                                    })
                                }
                            }]
                    })
                });
                //====== left bottom ======
                $("#notify3").click(function () {
                    ssi_modal.notify('info', {
                        position: 'right bottom',
                        content: 'Hello there'
                    })
                });
                $('#notify4').click(function () {
                    ssi_modal.notify('warning', {
                        position: 'left bottom',
                        content: 'You have to register first to see the content!'
                    })
                });
                //====== center top ======

                $('#notify5').click(function () {
                    ssi_modal.notify('dialog', {
                        sizeClass: 'medium',
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        position: 'center top',
                        content: 'This site uses cookies to provide better services!'
                    }, function () {})
                });
                //====== center bottom ======

                $('#notify6').click(function () {
                    ssi_modal.notify('confirm', {
                        closeIcon: true,
                        okBtn: {
                            className: 'btn btn-primary'
                        },
                        cancelBtn: {
                            className: 'btn btn-danger'
                        },
                        position: 'center bottom',
                        content: 'Are you sure you want to exit?'
                    }, function (result) {
                        if (result) {
                            ssi_modal.notify('success', {
                                content: 'Result: ' + result
                            })
                        } else {
                            ssi_modal.notify('error', {
                                content: 'Result: ' + result
                            })
                        }
                    })
                });
                //====== custom full ======

                $('#notify7').click(function () {
                    ssi_modal.notify('custom', {
                        sizeClass: 'full',
                        icon: 'fa fa-glass',
                        position: 'center top',
                        content: 'This is a custom notification message!'
                    })
                });

                ssi_modal.imgBox({
                    title: true,
                    animation: true,
                    center: true,
                    iframe: {
                        className: 'idd'
                    }
                }, 'landscapes');
                ssi_modal.imgBox({
                    className: 'aaa',
                    title: false,
                    backdropAnimation: true,
                    modalAnimation: {
                        'show': 'animated  rotateInDownLeft',
                        hide: 'animated  rotateOutDownLeft'
                    }
                }, 'bands');
            }

            main();
        </script>
    </body>

</html>