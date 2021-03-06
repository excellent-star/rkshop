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
        <!-- Material Icons CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- materialize css -->
        <link href="assets/plugins/materialize/css/materialize.min.css" rel="stylesheet">
        <!-- Animation Css -->
        <link href="assets/plugins/animate/animate.css" rel="stylesheet" />
        <!-- custom CSS -->
        <link href="assets/dist/css/stylematerial.css" rel="stylesheet">
    </head>

    <body class="sign-section">
        <div class="container sign-cont animated zoomIn">
            <div class="row sign-row">
                <div class="sign-title">
                    <h2 class="teal-text"><i class="fa fa-user-plus"></i> Create A New Account</h2>
                </div>
                <form class="col s12" id="reg-form">
                    <div class="row sign-row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate" required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input type="password" class="validate" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s12">
                            <input type="password" class="validate" required>
                            <label>Confirm Password</label>
                        </div>
                    </div>
                    <div class="row sign-row">
                        <div class="input-field col s6">
                            <div class="sign-confirm">
                                <input type="checkbox" id="sign-confirm" />
                                <label for="sign-confirm">confirm</label>
                            </div>
                        </div>
                        <div class="input-field col s6">
                            <button class="btn btn-large btn-register waves-effect waves-light teal" type="submit" name="action">Join Now
                                <i class="material-icons right">cloud_done</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <a title="Login" class="sign-btn btn-floating btn-large waves-effect waves-light teal">
                <i class="material-icons">perm_identity</i></a>
        </div>

        <!-- Start Core Plugins
             =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- materialize  -->
        <script src="assets/plugins/materialize/js/materialize.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
             =====================================================================-->
    </body>
</html>