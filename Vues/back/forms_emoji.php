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
        <!-- emoji css -->
        <link href="assets/plugins/mervick-emojionearea/dist/emojionearea.min.css" rel="stylesheet" type="text/css" />
        <!-- jQuery-tagEditor css -->
        <link href="assets/plugins/jQuery-tagEditor/jquery.tag-editor.css" rel="stylesheet" type="text/css" />
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
                            <li class="active"><a><i class="material-icons">text_format</i>Forms<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="forms_basic.html">Basic Forms</a></li>
                                    <li><a href="form_file_upload.html">Forms File Upload</a></li>
                                    <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                    <li class="active-link"><a href="forms_emoji.html">Forms Emoji</a></li>
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
                            <i class="fa fa fa-frown-o"></i>
                        </div>
                        <div class="header-title">
                            <h1>Forms Emoji</h1>
                            <small class="hidden-xs">Supper simple emoji forms editor on bootstrap</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="forms_emoji.html">emoji forms</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Emoji forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-smile-o"></i>
                                        <h2>Emoji forms</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col-6">
                                                <p>From:</p>
                                                <textarea id="demo1">
                                                Lorem ipsum dolor ???? sit amet, consectetur ???? adipiscing elit, ???? sed do eiusmod tempor ??? incididunt ut labore et dolore magna aliqua ????.
                                                </textarea>
                                            </div>
                                            <div class="col-6">
                                                <p>To:</p>
                                                <div id="emj"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Emoji Forms -->
                            <!-- Emoji Forms -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-meh-o"></i>
                                        <h2> badge edit</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="forms-emj">
                                            <textarea id="hero-demo">example tags, sortable, autocomplete, edit in place, tab/cursor navigation, duplicate check, callbacks, copy-paste, placeholder, public methods, custom delimiter, graceful degradation</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./badge edit -->

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
        <!-- m-custom-scrollbar -->
        <script src="assets/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
        <!-- scroll -->
        <script src="assets/plugins/simplebar/dist/simplebar.js" type="text/javascript"></script>
        <!-- mervick-emojionearea js -->
        <script src="assets/plugins/mervick-emojionearea/dist/emojionearea.min.js" type="text/javascript"></script>
        <!-- jQuery-tagEditor -->
        <script src="assets/plugins/jQuery-tagEditor/jquery.caret.min.js"></script>
        <script src="assets/plugins/jQuery-tagEditor/jquery.tag-editor.js"></script>
        <!-- metismenu-master -->
        <script src="assets/plugins/metismenu-master/dist/metisMenu.min.js" type="text/javascript"></script>
        <!-- custom js -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>

        <!-- End Core Plugins-->
        <!-- Start Theme label Script-->
        <!-- main js -->
        <script src="assets/dist/js/main.js" type="text/javascript"></script>

        <!-- End Theme label Script-->

        <script>
             "use strict";
            $(function () {
                //editable badge
                var cache = {};

                function googleSuggest(request, response) {
                    var term = request.term;
                    if (term in cache) {
                        response(cache[term]);
                        return;
                    }
                    $.ajax({
                        url: 'https://query.yahooapis.com/v1/public/yql',
                        dataType: 'JSONP',
                        data: {
                            format: 'json',
                            q: 'select * from xml where url="http://google.com/complete/search?output=toolbar&q=' + term + '"'
                        },
                        success: function (data) {
                            var suggestions = [];
                            try {
                                var results = data.query.results.toplevel.CompleteSuggestion;
                            } catch (e) {
                                var results = [];
                            }
                            $.each(results, function () {
                                try {
                                    var s = this.suggestion.data.toLowerCase();
                                    suggestions.push({
                                        label: s.replace(term, '<b>' + term + '</b>'),
                                        value: s
                                    });
                                } catch (e) {
                                }
                            });
                            cache[term] = suggestions;
                            response(suggestions);
                        }
                    });
                }
                $(function () {
                    //emoji
                    $("#demo1").emojioneArea({
                        container: "#emj",
                        hideSource: false,
                    });
                    $('#hero-demo').tagEditor({
                        placeholder: 'Enter tags ...',
                        autocomplete: {
                            source: googleSuggest,
                            minLength: 3,
                            delay: 250,
                            html: true,
                            position: {
                                collision: 'flip'
                            }
                        }
                    });
                    $('#demo3').tagEditor({
                        initialTags: ['Hello', 'World'],
                        placeholder: 'Enter tags ...'
                    });
                    $('#remove_all_tags').click(function () {
                        var tags = $('#demo3').tagEditor('getTags')[0].tags;
                        for (i = 0; i < tags.length; i++) {
                            $('#demo3').tagEditor('removeTag', tags[i]);
                        }
                    });


                });
            });
        </script>
    </body>

</html>