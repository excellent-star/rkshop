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
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Animation Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- Monthly css -->
        <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css" />
        <!-- dataTables css -->
        <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
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
                            <li class="active"><a><i class="material-icons">layers_clear</i>Maps<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="active-link"><a href="maps_data.html">Data Maps</a></li>
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
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="header-title">
                            <h1> Data Maps</h1>
                            <small> Data Maps details and use</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="index.html">Data Maps</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Basic data map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Basic</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map2"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Basic data map -->
                            <!-- Choropleth data map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Choropleth with color</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map4"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Choropleth data map -->
                            <!-- State Labels map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>State Labels</h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map5"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./State Labels data map -->

                            <!-- Arcs map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Arcs </h2>
                                    </div>
                                    <div class="card-content">
                                        <div id="map7"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Arcs map -->
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
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins
            =====================================================================-->
        <!-- Start Page Lavel Plugins
            =====================================================================-->
        <!-- Data maps js -->
        <script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins
            =====================================================================-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
            =====================================================================-->
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //basic data map
                var map = new Datamap({
                    element: document.getElementById('map2'),
                    fills: {
                        defaultFill: '#26a69a' // Any hex, color name or rgb/rgba value
                    }
                });

                //Choropleth
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map4"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "gray",
                        authorHasTraveledTo: "#6913a5e6"
                    },
                    data: {
                        USA: {
                            fillKey: "authorHasTraveledTo"
                        },
                        JPN: {
                            fillKey: "authorHasTraveledTo"
                        },
                        ITA: {
                            fillKey: "authorHasTraveledTo"
                        },
                        CRI: {
                            fillKey: "authorHasTraveledTo"
                        },
                        KOR: {
                            fillKey: "authorHasTraveledTo"
                        },
                        DEU: {
                            fillKey: "authorHasTraveledTo"
                        }
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {
                            fillKey: 'authorHasTraveledTo'
                        },
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

                //State Labels
                var election = new Datamap({
                    scope: 'usa',
                    element: document.getElementById('map5'),
                    geographyConfig: {
                        highlightBorderColor: '#bada55',
                        popupTemplate: function (geography, data) {
                            return '<div class="hoverinfo">' + geography.properties.name +
                                    Electoral;
                            Votes: ' +  data.electoralVotes + ';
                        },
                        highlightBorderWidth: 3
                    },
                    fills: {
                        'Republican': '#bada55',
                        'Democrat': '#306596',
                        'Heavy Democrat': '#667FAF',
                        'Light Democrat': '#A9C0DE',
                        'Heavy Republican': '#bada55',
                        'Light Republican': '#EAA9A8',
                        defaultFill: '#EDDC4E'
                    },
                    data: {
                        "AZ": {
                            "fillKey": "Republican",
                            "electoralVotes": 5
                        },
                        "CO": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 5
                        },
                        "DE": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "FL": {
                            "fillKey": "UNDECIDED",
                            "electoralVotes": 29
                        },
                        "GA": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "HI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ID": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "IL": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "IN": {
                            "fillKey": "Republican",
                            "electoralVotes": 11
                        },
                        "IA": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 11
                        },
                        "KS": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "KY": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "LA": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "MD": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ME": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MN": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "MS": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "MO": {
                            "fillKey": "Republican",
                            "electoralVotes": 13
                        },
                        "MT": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NC": {
                            "fillKey": "Light Republican",
                            "electoralVotes": 32
                        },
                        "NE": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NV": {
                            "fillKey": "Heavy Democrat",
                            "electoralVotes": 32
                        },
                        "NH": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 32
                        },
                        "NJ": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "NY": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "ND": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "NM": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "OH": {
                            "fillKey": "UNDECIDED",
                            "electoralVotes": 32
                        },
                        "OK": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "OR": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "PA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "RI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "SC": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "SD": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "TN": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "TX": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "UT": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "WI": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "VA": {
                            "fillKey": "Light Democrat",
                            "electoralVotes": 32
                        },
                        "VT": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "WA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "WV": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "WY": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "CA": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "CT": {
                            "fillKey": "Democrat",
                            "electoralVotes": 32
                        },
                        "AK": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "AR": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        },
                        "AL": {
                            "fillKey": "Republican",
                            "electoralVotes": 32
                        }
                    }
                });
                election.labels();

                //Arcs
                var arcs = new Datamap({
                    element: document.getElementById("map7"),
                    scope: 'usa',
                    fills: {
                        defaultFill: "rgba(38, 166, 154, 0.77)",
                        win: '#02386F'
                    },
                    data: {
                        'TX': {
                            fillKey: 'win'
                        },
                        'FL': {
                            fillKey: 'win'
                        },
                        'NC': {
                            fillKey: 'win'
                        },
                        'CA': {
                            fillKey: 'win'
                        },
                        'NY': {
                            fillKey: 'win'
                        },
                        'CO': {
                            fillKey: 'win'
                        }
                    }
                });

                // Arcs coordinates can be specified explicitly with latitude/longtitude,
                // or just the geographic center of the state/country.
                arcs.arc([{
                        origin: 'CA',
                        destination: 'TX'
                    }, {
                        origin: 'OR',
                        destination: 'TX'
                    }, {
                        origin: 'NY',
                        destination: 'TX'
                    }, {
                        origin: {
                            latitude: 40.639722,
                            longitude: -73.778889
                        },
                        destination: {
                            latitude: 37.618889,
                            longitude: -122.375
                        }
                    }, {
                        origin: {
                            latitude: 30.194444,
                            longitude: -97.67
                        },
                        destination: {
                            latitude: 25.793333,
                            longitude: -80.290556
                        },
                        options: {
                            strokeWidth: 2,
                            strokeColor: 'rgba(100, 10, 200, 0.4)',
                            greatArc: true
                        }
                    }, {
                        origin: {
                            latitude: 39.861667,
                            longitude: -104.673056
                        },
                        destination: {
                            latitude: 35.877778,
                            longitude: -78.7875
                        }
                    }], {
                    strokeWidth: 1,
                    arcSharpness: 1.4
                });
            });
        </script>
    </body>
</html>