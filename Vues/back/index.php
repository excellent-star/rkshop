<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tableau de bord</title>
       

        <?php include('main_styles.php');?>


    </head>

    <body>
        <div id="wrapper">
            <!--navbar top-->


            <?php include('top_navbar.php');?>
           



            <!-- Sidebar -->


            <?php include('sidebar.php');?>
            
            <!-- ./sidebar-wrapper -->

            <!-- Page content -->
            <div id="page-content-wrapper">
                <div class="page-content">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="header-title">
                            <h1> Dashboard</h1>
                            <small> Dashboard features</small>
                            <ul class="link hidden-xs">
                                <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                                <li><a href="index.html">Dashboard</a></li>
                            </ul>
                        </div>
                    </section>
                    <!-- page section -->
                    
                    <div class="container-fluid">
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
                            <!-- ./counter Number -->
                            <!-- chart -->
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-bar-chart fa-lg"></i>
                                        <h2>Bar Chart</h2>
                                    </div>
                                    <div class="card-content">
                                        <canvas id="lineChart" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- ./chart -->
                            <!-- Calender -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-calendar-check-o fa-lg"></i>
                                        <h2>Calender</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- monthly calender -->
                                        <div class="monthly_calender">
                                            <div class="monthly" id="m_calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Calender -->
                            <!-- Table content -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-table fa-lg"></i>
                                        <h2>Table Content</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Table content -->
                                        <table class="responsive-table highlight bordered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Name</th>
                                                    <th data-field="name">Item Name</th>
                                                    <th data-field="price">Item Price</th>
                                                    <th data-field="Status">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Alvin</td>
                                                    <td>Eclair</td>
                                                    <td>$0.87</td>
                                                    <td><span class="label teal pull-right">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Alan</td>
                                                    <td>Jellybean</td>
                                                    <td>$3.76</td>
                                                    <td><span class="label label-danger pull-right">Banned</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Jonathan</td>
                                                    <td>Lollipop</td>
                                                    <td>$7.00</td>
                                                    <td><span class="label label-warning pull-right">Inactive</span></td>
                                                <tr>
                                                    <td>Alan</td>
                                                    <td>Jellybean</td>
                                                    <td>$3.76</td>
                                                    <td><span class="label label-primary pull-right">Active</span>
                                                </tr>
                                                <tr>
                                                    <td>Jonathan</td>
                                                    <td>Lollipop</td>
                                                    <td>$7.00</td>
                                                    <td><span class="label label-success pull-right">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>karim</td>
                                                    <td>benjema</td>
                                                    <td>$9.96</td>
                                                    <td><span class="label orange pull-right">pending</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Table content -->
                            <!-- Google Map -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-map fa-lg"></i>
                                        <h2>Google Map</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Google map -->
                                        <div class="embed-container">
                                            <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288' height='340' style='border:0'></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Google Map -->
                            <!-- Chat -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <h2>Chat</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Chat -->
                                        <ul class="chat_list">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/assets_backend/dist/img/avatar4.png" alt="male">
                                                    <span class="label label-default purple"><i class="fa fa-clock-o"></i> 10:00 pm</span>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Hello!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/assets_backend/dist/img/avatar5.png" alt="Female">
                                                    <span class="label label-default purple"><i class="fa fa-clock-o"></i> 9:00 pm</span>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Marco Lopes</i>
                                                        <p>Hi, How are you?What about our next meeting?</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/assets_backend/dist/img/avatar2.png" alt="male">
                                                    <span class="label label-default purple"><i class="fa fa-clock-o"></i> 5:00 pm</span>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Yeah everything is fine</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/assets_backend/dist/img/avatar2.png" alt="male">
                                                    <span class="label label-default purple"><i class="fa fa-clock-o"></i> 5:00 pm</span>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>Yeah everything is fine</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="input-group">
                                            <input type="text" class="form-control emojionearea" placeholder="Your Message. . . ">
                                            <span class="input-group-btn">
                                                <a class="waves-effect waves-light btn"><i class="material-icons">send</i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Chat -->
                            <!-- Activities -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-list fa-lg"></i>
                                        <h2>Running Activities</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Activities -->
                                        <ul class="activity-list list-unstyled">
                                            <li class="activity-purple">
                                                <span class="label label-default purple"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                                <p class="text-darken-1">You followed Olivia Williamson</p>
                                            </li>
                                            <li class="activity-danger">
                                                <span class="label label-default red"><i class="fa fa-clock-o"></i> 9 days ago</span>
                                                <p class="text-darken-1">You followed Olivia Williamson</p>
                                            </li>
                                            <li class="activity-warning">
                                                <span class="label label-default orange"><i class="fa fa-clock-o"></i> 6 days ago</span>
                                                <p class="text-darken-1">You followed Olivia Williamson</p>
                                            <li class="activity-primary">
                                                <span class="label label-default teal"><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                <p class="text-darken-1">You followed Olivia Williamson</p>
                                            </li>
                                            <li>
                                                <span class="label label-default indigo"><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                <p>You deleted homepage.psd</p>
                                            </li>
                                            <li>
                                                <span class="label label-default yellow"><i class="fa fa-clock-o"></i> 5 days ago</span>
                                                <p>please check security..</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Activities -->
                            <!-- Inbox -->
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-list fa-lg"></i>
                                        <h2>Messages</h2>
                                    </div>
                                    <div class="card-content">
                                        <!-- Messages -->
                                        <div class="message_inner">
                                            <div class="message_widgets">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Mr.Alrazy</strong>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar2.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Sala Uddin</strong>
                                                        <p class="inbox-item-text">Hey! How are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 10 days ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar3.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Mozammel Hoque</strong>
                                                        <p class="inbox-item-text">Hey! How are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 4 days ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar4.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                        <p class="inbox-item-text">Hey! How are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 9 days ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Amir Khan</strong>
                                                        <p class="inbox-item-text">Hey! How are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Salman Khan</strong>
                                                        <p class="inbox-item-text">Hey! How are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/assets_backend/dist/img/avatar5.png" class="img-circle" alt=""></div>
                                                        <strong class="inbox-item-author">Alrazy Khan</strong>
                                                        <p class="inbox-item-text">Hey! where are You?...</p>
                                                        <span class="label"><i class="fa fa-clock-o"></i> 1 day ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Messages -->
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



      <?php include('preloader.php'); ?>


        <!-- End Preloader -->




        <!-- Start Core Plugins
             =====================================================================-->
       <?php include('main_scripts.php');?>
        <!-- End Core Plugins










             =====================================================================-->
        <!-- Start Page Lavel Plugins
             =====================================================================-->
        <!-- Sparkline js -->
        <script src="assets/assets_backend/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/assets_backend/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/assets_backend/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/assets_backend/plugins/monthly/monthly.js" type="text/javascript"></script>

        <!-- End Page Lavel Plugins
             =====================================================================-->
        <!-- Start Theme label Script
             =====================================================================-->
        <!-- main js-->
        <script src="assets/assets_backend/dist/js/main.js" type="text/javascript"></script>
        <!-- End Theme label Script
             =====================================================================-->
        <script>
            $(document).ready(function () {
                "use strict";
                // Message
                function slscroll() {
                    $('.chat_list , .activity-list , .message_inner').slimScroll({
                        size: '3px',
                        height: '320px',
                        allowPageScroll: true,
                        railVisible: true
                    });
                }
                slscroll();
                function chatscroll() {
                    $('.chat_list').slimScroll({
                        size: '3px',
                        height: '290px'
                    });
                }
                chatscroll();

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });

                //panel refresh
                $.fn.refreshMe = function (opts) {
                    var $this = this,
                            defaults = {
                                ms: 1500,
                                started: function () {},
                                completed: function () {}
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

                //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [{
                                label: "Total income",
                                borderColor: "#73879C",
                                borderWidth: "1",
                                backgroundColor: "#73879C",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            }, {
                                label: "Total Expense",
                                borderColor: "rgba(26, 187, 156, 0.64)",
                                borderWidth: "1",
                                backgroundColor: "rgba(26, 187, 156, 0.64)",
                                pointHighlightStroke: "rgba(26, 187, 156, 0.64)",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });

            });
        </script>
    </body>
</html>