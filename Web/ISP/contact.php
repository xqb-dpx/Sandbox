<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Spark - Contact Us</title>
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
    You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience and
    security.
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

<!-- Start Contact Area -->
<div class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="contact-widget-wrapper">
                    <div class="main-title">
                        <h2>Contact Us</h2>
                        <p>You can contact us with below ways.</p>
                        <br>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Call us</h3>
                        <p>+98-123456789</p>
                        <p>Weekdays 8:00 to 12:00 Tehran (GMT+3:30)</p>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Email us</h3>
                        <a href="mailto:b.daarr@outlook.com">b.daarr@outlook.com</a>
                    </div>
                    <div class="contact-widget-block">
                        <h3 class="title">Address</h3>
                        <p>Iran, Tehran</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <h3 class="form-title">Leave a message here</h3>
                    <form class="form" method="post" action="success.php">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Name*" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email*" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="subject" type="text" placeholder="Subject*" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone*" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                        <textarea placeholder="Message*" name="message" id="message-area"
                                                  class="form-control" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="button">
                                    <button type="submit" class="btn ">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Google-map Area -->
<div class="map-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe src="map.html" width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Google-map Area -->

<?php
require ('footer.php');
?>

<!-- ========================= JS here ========================= -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>