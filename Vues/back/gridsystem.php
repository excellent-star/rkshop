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
                            <li class="active-link">
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
                            <i class="fa fa-window-restore"></i>
                        </div>
                        <div class="header-title">
                            <h1> Grid</h1>
                            <small> Grid System</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="grid.html">Grid</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Grid system material  -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Material Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <p class="m-b-5">The container class is not strictly part of the grid but is important in laying out content. It allows you to center your page content.The <code class=" language-markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span><span class="token punctuation">&gt;</span></span></code> tag with a <code class=" language-markup">container</code> class is set to ~70% of the window width. It helps you center and contain your page content. We use the container to contain our body content.To add a container just put your content inside a <code class=" language-markup">div</code> tag with a container class. Here's an example of how your page might be set up.</p>
                                        <div class="row">
                                            <div class="col s1 grid-example">1</div>
                                            <div class="col s1 grid-example">2</div>
                                            <div class="col s1 grid-example">3</div>
                                            <div class="col s1 grid-example">4</div>
                                            <div class="col s1 grid-example">5</div>
                                            <div class="col s1 grid-example">6</div>
                                            <div class="col s1 grid-example">7</div>
                                            <div class="col s1 grid-example">8</div>
                                            <div class="col s1 grid-example">9</div>
                                            <div class="col s1 grid-example">10</div>
                                            <div class="col s1 grid-example">11</div>
                                            <div class="col s1 grid-example">12</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example">This div is 12-columns wide</div>
                                            <div class="col s6 grid-example">This div is 6-columns wide</div>
                                            <div class="col s6 grid-example">This div is 6-columns wide</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
                                            <div class="col s6 offset-s6 grid-example"><span class="flow-text">6-columns (offset-by-6)</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 grid-example"><span class="flow-text">s12</span></div>
                                            <div class="col s12 m4 l2 grid-example"><span class="flow-text">s12 m4</span></div>
                                            <div class="col s12 m4 l8 grid-example"><span class="flow-text">s12 m4</span></div>
                                            <div class="col s12 m4 l2 grid-example"><span class="flow-text">s12 m4</span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                            <div class="col s12 m6 l3 grid-example"><span class="flow-text">s12 m6 l3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Grid system material -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Grid options</h3>
                                        <p class="m-b-5">See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th> Extra small devices <small>Phones (&lt;768px)</small> </th>
                                                        <th> Small devices <small>Tablets (???768px)</small> </th>
                                                        <th> Medium devices <small>Desktops (???992px)</small> </th>
                                                        <th> Large devices <small>Desktops (???1200px)</small> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                                        <td>Horizontal at all times</td>
                                                        <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Container width</th>
                                                        <td>None (auto)</td>
                                                        <td>750px</td>
                                                        <td>970px</td>
                                                        <td>1170px</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                                        <td><code>.col-xs-</code></td>
                                                        <td><code>.col-sm-</code></td>
                                                        <td><code>.col-md-</code></td>
                                                        <td><code>.col-lg-</code></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row"># of columns</th>
                                                        <td colspan="4">12</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Column width</th>
                                                        <td class="text-muted">Auto</td>
                                                        <td>~62px</td>
                                                        <td>~81px</td>
                                                        <td>~97px</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                                        <td colspan="4">30px (15px on each side of a column)</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Nestable</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Offsets</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                                        <td colspan="4">Yes</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Stacked-to-horizontal</h3>
                                        <p class="m-b-5">Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                            <div class="col-md-1">.col-md-1</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-8">.col-md-8</div>
                                            <div class="col-md-4">.col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4">.col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-6">.col-md-6</div>
                                            <div class="col-md-6">.col-md-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Mobile and desktop</h3>
                                        <p class="m-b-5">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6">.col-xs-6</div>
                                            <div class="col-xs-6">.col-xs-6</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Mobile, tablet, desktop</h3>
                                        <p class="m-b-5">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                            <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                            <div class="clearfix visible-xs-block"></div>
                                            <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Responsive column resets</h3>
                                        <p class="m-b-5">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.
                                        </p>
                                        <div class="row show-grid m-0">
                                            <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                                <br> Resize your viewport or check it out on your phone for an example.
                                            </div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                            <div class="clearfix visible-xs-block"></div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                            <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0"> Offsetting columns</h3>
                                        <p class="m-b-5">Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code>over four columns.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-4">.col-md-4</div>
                                            <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                            <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                                        </div>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Nesting columns</h3>
                                        <p class="m-b-5">To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).
                                        </p>
                                        <div class="row show-grid m-0">
                                            <div class="col-sm-9">
                                                Level 1: .col-sm-9
                                                <div class="row show-grid">
                                                    <div class="col-xs-8 col-sm-6"> Level 2: .col-xs-8 .col-sm-6 </div>
                                                    <div class="col-xs-4 col-sm-6"> Level 2: .col-xs-4 .col-sm-6 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
                            <!-- Bootstrap Grid System -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-window-restore fa-lg"></i>
                                        <h2>Bootstrap Grid System</h2>
                                    </div>
                                    <div class="card-content">
                                        <h3 class="m-t-0">Column ordering</h3>
                                        <p class="m-b-5">Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code> modifier classes.</p>
                                        <div class="row show-grid m-0">
                                            <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
                                            <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Bootstrap Grid System -->
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
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script-->
    </body>
</html>