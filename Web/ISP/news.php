<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Spark - Home</title>
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

<body class="font-ubuntu">
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
require('header.php');
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

<!-- Start Blog Section Area -->
<section class="blog-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            for ($i = 0; $i < 3; $i++) {
                ?>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a>
                                <img src="assets/images/bread-bg/banner-bg.svg" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date"><i class="lni lni-timer"></i><?= time() ?></a>
                                <a class="author"><i class="lni lni-user"></i><?= 'Jhon Doe' ?></a>
                            </div>
                            <h4>
                                <a>Title</a>
                            </h4>
                            <p>Description.</p>
                            <div class="button">
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- End Blog Section Area -->
<?php
require 'footer.php';
?>

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top" style="border-radius: 100%;">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ========================= JS here ========================= -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>