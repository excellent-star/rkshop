<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Materialize Bootstrap Admin panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/assets_backend/dist/img/ico/fav.png">

        <!-- Start Global Mandatory Style
            =====================================================================-->
        <!-- jquery-ui css -->
        <link href="assets/assets_backend/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- materialize css -->
        <link href="assets/assets_backend/plugins/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Bootstrap css-->
        <link href="assets/assets_backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Animation Css -->
        <link href="assets/assets_backend/plugins/animate/animate.css" rel="stylesheet" />
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/assets_backend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- simplebar scroll css -->
        <link href="assets/assets_backend/plugins/simplebar/dist/simplebar.css" rel="stylesheet" type="text/css" />
        <!-- mCustomScrollbar css -->
        <link href="assets/assets_backend/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
        <!-- custom CSS -->
        <link href="assets/assets_backend/dist/css/stylematerial.css" rel="stylesheet">

    </head>

    <body>
        <div id="wrapper">
            <!--navbar top-->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <!-- Logo -->
                <a class="navbar-brand pull-left" href="index.html">
                    <img src="assets/assets_backend/dist/img/logo3.png" alt="logo" width="205" height="60">
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
                                            <img src="assets/assets_backend/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
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
                                            <img src="assets/assets_backend/dist/img/avatar3.png" class="img-circle" height="40" width="40" alt="User Image">
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
                                            <img src="assets/assets_backend/dist/img/avatar2.png" class="img-circle" height="40" width="40" alt="User Image">
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
                                            <img src="assets/assets_backend/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
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
                                <img src="assets/assets_backend/dist/img/avatar5.png" class="img-circle" height="45" width="50" alt="User Image">
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
                            <li class="active"><a><i class="material-icons">text_format</i>Forms<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="active-link"><a href="forms_basic.html">Basic Forms</a></li>
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
                            <i class="fa fa-file-o"></i>
                        </div>
                        <div class="header-title">
                            <h1> Basic Forms</h1>
                            <small> Basic forms styles</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="forms_basic.html">forms basic</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- basic forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-text-o fa-lg"></i>
                                        <h2>Basic Forms</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <form class="col s12 m-t-20">
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input id="icon_prefix" type="tel" class="validate">
                                                    <label for="icon_prefix">First Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <input type="tel" class="validate">
                                                    <label>Last Name</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">email</i>
                                                    <input type="tel" class="validate">
                                                    <label>Email</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">lock</i>
                                                    <input type="password" class="validate">
                                                    <label>Password</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_telephone" type="tel" class="validate">
                                                    <label for="icon_telephone">Telephone</label>
                                                </div>
                                                <div class="input-field form-input col s6">
                                                    <i class="material-icons prefix">textsms</i>
                                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                                    <label for="autocomplete-input">Autocomplete</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <i></i>
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="" data-icon="assets/assets_backend/dist/img/avatar.png" class="left circle">example 1</option>
                                                        <option value="" data-icon="assets/assets_backend/dist/img/avatar2.png" class="left circle">example 2</option>
                                                        <option value="" data-icon="assets/assets_backend/dist/img/avatar3.png" class="left circle">example 3</option>
                                                    </select>
                                                    <label>Images in select</label>
                                                </div>
                                                <div class="input-field form-input form-input-select col s6">
                                                    <select class="icons">
                                                        <option value="" disabled selected>Choose your option</option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                    </select>
                                                    <label>Materialize Select</label>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- ./basic forms -->

                            <!-- forms cntrol -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-file-o fa-lg"></i>
                                        <h2>Bootstrap Froms</h2>
                                    </div>
                                    <div class="card-content">
                                        <form class="form-horizontal" method="post">
                                            <h2 class="text-center">Basic forms Example</h2>
                                            <fieldset>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">First Name:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="first_name" type="text" class="validate" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Last Name:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="Last_name" type="text" class="validate" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">E-Mail:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="mail" type="text" class="validate" placeholder="Enter mail">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Password:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="password" type="password" class="validate" placeholder="Enter Password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Mobile No:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="Mobile" type="text" class="validate" placeholder="(757)555-1456">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">City:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="city" type="text" class="validate" placeholder="Enter City">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./Text input-->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Postal Code:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-field">
                                                            <input name="post__code" type="text" class="validate" placeholder="Post code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address:</label>
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <textarea id="icon_prefix2" class="materialize-textarea" placeholder="Address"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input name="group1" type="radio" id="test1" />
                                                            <label for="test1">Radio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input class="with-gap" name="group3" type="radio" id="test5" checked />
                                                            <label for="test5">options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="input-group">
                                                            <input type="checkbox" id="test2" />
                                                            <label for="test2">checkbox</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <div class="switch">
                                                            <label>
                                                                Off
                                                                <input type="checkbox">
                                                                <span class="lever"></span> On
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-5 col-md-offset-3">
                                                        <input class="datepicker" type="text" placeholder="DatePicker">
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <button type="submit" class="btn btn-success">Submit <span class="glyphicon glyphicon-send"></span></button>
                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./bootstrap forms -->
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./cotainer -->
            </div>
            <!-- ./page-content -->
        </div>
        <!-- ./page-content-wrapper -->

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
        <script src="assets/assets_backend/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/assets_backend/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/assets_backend/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- materialize  -->
        <script src="assets/assets_backend/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
        <!-- metismenu-master -->
        <script src="assets/assets_backend/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- m-custom-scrollbar -->
        <script src="assets/assets_backend/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/assets_backend/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>

        <!-- custom js -->
        <script src="assets/assets_backend/dist/js/custom.js" type="text/javascript"></script>

        
        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/assets_backend/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script-->
        <script>
            "use strict";
            $(function () {
                $('select').material_select();
                Materialize.updateTextFields();
                // autocomplete
                $('input.autocomplete').autocomplete({
                    data: {
                        "Apple": null,
                        "Microsoft": null,
                        "Google": 'https://placehold.it/250x250'
                    },
                    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
                    onAutocomplete: function (val) {
                        // Callback function when value is autcompleted.
                    },
                    minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
                });

                //datepicker
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15 // Creates a dropdown of 15 years to control year
                });
            });
        </script>

    </body>

</html>