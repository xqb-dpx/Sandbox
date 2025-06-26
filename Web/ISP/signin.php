<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Spark - Login</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg"/>

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/tiny-slider.css"/>
    <link rel="stylesheet" href="assets/css/glightbox.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/fonts.css"/>

</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /End Preloader -->

<?php
require 'header.php';
?>

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-12">
            </div>
            <div class="col-lg-7 col-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                    <img class="main-image" src="assets/images/bread-bg/banner-bg.svg" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start Account Sign In Area -->
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <form id="onload" class="card login-form inner-content" method="post">
                    <div class="card-body">
                        <div class="title">
                            <h3>Sign-in</h3>
                            <p>Fill below information to sign-in.</p>
                        </div>
                        <div class="input-head">
                            <div class="form-group input-group">
                                <label><i class="lni lni-envelope"></i></label>
                                <input class="form-control" type="email" id="reg-email"
                                       placeholder="Enter your email" required autofocus>
                            </div>
                            <div class="form-group input-group">
                                <label><i class="lni lni-lock-alt"></i></label>
                                <input class="form-control" type="password" id="reg-pass"
                                       placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-comments-alt"></i></label>
                                    <input style="background-color: #ebdb8d" class="form-control" type="submit" value="<?='Retry - 00:00'?>"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group input-group">
                                    <label><i class="lni lni-alarmclock"></i></label>
                                    <input class="form-control" type="time" required
                                           autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <input class="btn" type="submit" value="Login"/>
                        </div>
                        <div class="or"><span><a href="signup.php">Register</a></span><span><a
                                        href="reset-password.php">Forgot Password?</a></span></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Account Sign In Area -->

<!-- ========================= JS here ========================= -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/animation.js"></script>
</body>

</html>