<?php
    $link="../files/";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>SportsEra</title>


        <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo $link?>bower_components/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo $link?>assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/icon/feather/css/feather.css">

        <link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/icon/themify-icons/themify-icons.css">

        <link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/icon/icofont/css/icofont.css">

        <link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/icon/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/css/style.css"><link rel="stylesheet" type="text/css" href="<?php echo $link?>assets/css/pages.css">
    </head>
    <body themebg-pattern="theme1">
        <section class="login-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="md-float-material form-material">
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center txt-primary">Sign In</h3>
                                        </div>
                                    </div>
                                    
                                    <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                    <div class="form-group form-primary">
                                        <input type="text" name="user-name" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
            </div>
        </section>

        <script type="text/javascript" src="<?php echo $link?>bower_components/jquery/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $link?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo $link?>bower_components/popper.js/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo $link?>bower_components/bootstrap/js/bootstrap.min.js"></script>

        <script src="<?php echo $link?>assets/pages/waves/js/waves.min.js"></script>

        <script type="text/javascript" src="<?php echo $link?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

        <script type="text/javascript" src="<?php echo $link?>bower_components/modernizr/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo $link?>bower_components/modernizr/js/css-scrollbars.js"></script>
        <script type="text/javascript" src="<?php echo $link?>assets/js/common-pages.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
