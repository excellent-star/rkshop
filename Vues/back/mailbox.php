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
                            <li class="active">
                                <a><i class="material-icons">email</i>Mailbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="active-link"><a href="mailbox.html">Mailbox</a></li>
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
                            <i class="fa fa-envelope-open"></i>
                        </div>
                        <div class="header-title">
                            <h1> Inbox</h1>
                            <small> Mail Details</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="mailbox.html">Mail</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mail-box">
                                <aside class="sm-side hidden-xs">
                                    <div class="user-head">
                                        <a class="inbox-avatar">
                                            <img src="assets/dist/img/avatar5.png" class="border-green" width="60" height="50" alt="logo">
                                        </a>
                                        <div class="user-name">
                                            <h5><a href="#">AlRazY</a></h5>
                                            <span><a href="#">Alraz@Gmail.com</a></span>
                                        </div>
                                    </div>
                                    <div class="inbox-body">
                                        <a href="compose.html" class="btn btn-compose">
                                            <i class="fa fa-edit"></i> Compose
                                        </a>
                                    </div>
                                    <ul class="inbox-nav inbox-divider">
                                        <li class="active">
                                            <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">7</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-primary pull-right">15</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-pills nav-stacked labels-info ">
                                        <li>
                                            <h4> recent chat</h4>
                                        </li>
                                        <li>
                                            <p><i class=" fa fa-comments-o"></i> No recent chat</p>
                                        </li>
                                    </ul>
                                </aside>
                                <aside class="lg-side">
                                    <div class="inbox-head">
                                        <h3>Inbox</h3>
                                        <form action="#" class="pull-right position">
                                            <div class="input-append">
                                                <input type="text" class="sr-input" placeholder="Search Mail">

                                            </div>
                                        </form>
                                    </div>
                                    <div class="inbox-body">
                                        <div class="mail-option">
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class="fa fa-reply"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class="fa fa-reply-all" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                    <i class=" fa fa-refresh"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <!-- Dropdown Trigger -->
                                                <a class='dropdown-button btn' href='#' data-activates='maildropdown'>Move <i class="fa fa-angle-down "></i></a>
                                                <!-- Dropdown Structure -->
                                                <ul id='maildropdown' class='dropdown-content'>
                                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                            <ul class="unstyled inbox-pagination">
                                                <li><span>1-50 of 234</span></li>
                                                <li>
                                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                                </li>
                                                <li>
                                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <table class="table table-bordered table-hover table-responsive">
                                            <tbody>
                                                <tr class="unread" id="tabl">
                                                    <td>
                                                        <input type="checkbox" id="test1"/>
                                                        <label for="test1"></label>
                                                    </td>
                                                    <td class="view-message"><a href="maildetails.html" target="_blank">web desgn</a></td>
                                                    <td class="view-message">html,css,bootstrap,javascript..</td>
                                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message  text-right">4:32 AM</td>
                                                </tr>
                                                <tr class="unread">
                                                    <td>
                                                        <input type="checkbox" id="test2" />
                                                        <label for="test2"></label>
                                                    </td>
                                                    <td class="view-message">Google ai </td>
                                                    <td class="view-message">Improve the search presence of WebSite</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">june 16</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test3" />
                                                        <label for="test3"></label>
                                                    </td>
                                                    <td class="view-message">JW Player</td>
                                                    <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 15</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test4" />
                                                        <label for="test4"></label>
                                                    </td>
                                                    <td class="view-message">Tim Reid, S P N</td>
                                                    <td class="view-message">Boost Your Website Traffic</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">April 01</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test5" />
                                                        <label for="test5"></label>
                                                    </td>
                                                    <td class="view-message">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                                    <td class="view-message">Stop wasting your visitors </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">May 23</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test6" />
                                                        <label for="test6"></label>
                                                    </td>
                                                    <td class="view-message">WOW Slider </td>
                                                    <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">March 14</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test7" />
                                                        <label for="test7"></label>
                                                    </td>
                                                    <td class="view-message">LinkedIn Pulse</td>
                                                    <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">Feb 19</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test8" />
                                                        <label for="test8"></label>
                                                    </td>
                                                    <td class="view-message">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                                    <td class="view-message view-message">Welcome to the Drupal Community</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 04</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test9" />
                                                        <label for="test9"></label>
                                                    </td>
                                                    <td class="view-message">Facebook</td>
                                                    <td class="view-message view-message">Somebody requested a new password </td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">June 13</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test10" />
                                                        <label for="test10"></label>
                                                    </td>
                                                    <td class="view-message">Skype <span class="label label-info pull-right">family</span></td>
                                                    <td class="view-message view-message">Password successfully changed</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 24</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test11" />
                                                        <label for="test12"></label>
                                                    </td>
                                                    <td class="view-message">Google+</td>
                                                    <td class="view-message">alireza, do you know</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 09</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test12" />
                                                        <label for="test13"></label>
                                                    </td>
                                                    <td class="view-message">Zoosk </td>
                                                    <td class="view-message">7 new singles we think you'll like</td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">May 14</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test13" />
                                                        <label for="test13"></label>
                                                    </td>
                                                    <td class="view-message">LinkedIn </td>
                                                    <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                    <td class="view-message text-right">jan 25</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test14" />
                                                        <label for="test14"></label>
                                                    </td>
                                                    <td>Facebook</td>
                                                    <td class="view-message view-message">Your account was recently logged into</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">March 14</td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <input type="checkbox" id="test15" />
                                                        <label for="test15"></label>
                                                    </td>
                                                    <td class="view-message">Twitter</td>
                                                    <td class="view-message">Your Twitter password has been changed</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">April 07</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" id="test16" />
                                                        <label for="test16"></label>
                                                    </td>
                                                    <td class="view-message">InternetSeer Website Monitoring</td>
                                                    <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                                    <td class="view-message inbox-small-cells"></td>
                                                    <td class="view-message text-right">July 14</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </aside>
                            </div>

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
        <!-- End Core Plugins-->
        <!-- Start Theme label Script
            =====================================================================-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script
            =====================================================================-->
    </body>
</html>