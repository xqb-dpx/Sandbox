<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Spark - Store</title>
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
require 'panel-header.php';
?>

<!-- Start Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-5 col-5">
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Pricing Table Area -->
<section id="pricing" class="pricing-table section">
    <div class="container">
        <div class="row">
            <?php
            for ($i = 0; $i < 6; $i++) {
                ?>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Single Table -->
                    <div class="single-table middle">
                        <span class="popular">Most Popular</span>
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Silver</h4>
                            <div class="price">
                                <h2 class="amount"><span class="currency">$</span>15<span class="duration">/month</span>
                                </h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Call: 1 Hour</li>
                                <li>Message: 50 per Month</li>
                                <li>Call Song</li>
                                <li class="disable">Voicemail</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn btn-alt">Add to Carts<i
                                        class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Single Table-->
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<!--/ End Pricing Table Area -->

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
</body>

</html>