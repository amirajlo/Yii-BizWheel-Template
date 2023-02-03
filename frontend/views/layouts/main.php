<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='pavilan'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>


    <!-- Favicon -->
    <link rel="icon" type="image/favicon.png" href="img/favicon.png">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bizwheel Plugins CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <link rel="stylesheet" href="css/owl-carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Bizwheel Stylesheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="#" id="elena_custom">
    <?php $this->head() ?>
</head>
<body id="bg" style="">
<?php $this->beginBody() ?>
<div id="page" class="site">

    <!-- Preloader -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
    <!--/ End Preloader -->

    <!-- Bizwheel Options -->
    <div class="elena-options">
        <div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
        <div class="single-option">
            <h4>طرح بندی را انتخاب کنید</h4>
            <div class="select-layout">
                <a class="full-width" value="full-width">تمام صفحه</a>
                <a class="boxed" value="boxed">جعبه دار</a>
            </div>
        </div>
        <div class="single-option">
            <h4>طرح پس زمینه</h4>
            <ul class="bg-pattern">
                <li class="bg-one"><a href="#"><img src="img/bg-1.png" alt="#"></a></li>
                <li class="bg-two"><a href="#"><img src="img/bg-2.png" alt="#"></a></li>
                <li class="bg-three"><a href="#"><img src="img/bg-3.png" alt="#"></a></li>
                <li class="bg-four"><a href="#"><img src="img/bg-4.png" alt="#"></a></li>
                <li class="bg-five"><a href="#"><img src="img/bg-5.png" alt="#"></a></li>
                <li class="bg-six"><a href="#"><img src="img/bg-6.png" alt="#"></a></li>
                <li class="bg-seven"><a href="#"><img src="img/bg-7.png" alt="#"></a></li>
                <li class="bg-eight"><a href="#"><img src="img/bg-8.png" alt="#"></a></li>
            </ul>
        </div>
        <div class="single-option">
            <h4>انتخاب رنگ</h4>
            <span class="skin1"></span>
            <span class="skin2"></span>
            <span class="skin3"></span>
            <span class="skin4"></span>
        </div>
    </div>
    <!--/ End Bizwheel Options -->

    <!-- Header -->
    <header class="header">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- Top Contact -->
                        <div class="top-contact">
                            <div class="single-contact"><i class="fa fa-phone"></i> تلفن : 03532270057</div>
                            <div class="single-contact"><i class="fa fa-envelope-open"></i>ایمیل : setinco@gmail.com </div>
                            <div class="single-contact"><i class="fa fa-clock-o"></i>شروع : 8 تا 9 شب</div>
                        </div>
                        <!-- End Top Contact -->
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="topbar-right">
                            <!-- Social Icons -->
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                            <!-- Right Bar -->
                            <div class="right-bar">
                                <!-- Search Bar -->
                                <ul class="right-nav">
                                    <li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
                                    <li class="bar"><a class="fa fa-bars"></a></li>
                                </ul>
                                <!--/ End Search Bar -->
                                <!-- Search Form -->
                                <div class="search-top">
                                    <form action="#" class="search-form" method="get">
                                        <input type="text" name="s" value="" placeholder="جستجو کنید"/>
                                        <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                            <!--/ End Right Bar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Topbar -->
        <!-- Middle Header -->
        <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="middle-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-12">
                                    <!-- Logo -->
                                    <div class="logo">
                                        <!-- Image Logo -->
                                        <div class="img-logo">
                                            <a href="index.html">
                                                <img src="img/logo.png" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-nav"></div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-12">
                                    <div class="menu-area">
                                        <!-- Main Menu -->
                                        <nav class="navbar navbar-expand-lg">
                                            <div class="navbar-collapse">
                                                <div class="nav-inner">
                                                    <div class="menu-home-menu-container">
                                                        <!-- Naviagiton -->
                                                        <ul id="nav" class="nav main-menu menu navbar-nav">
                                                            <li class="icon-active"><a href="#">خانه</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="index.html">صفحه اصلی 1</a></li>
                                                                    <li><a href="index2.html">صفحه اصلی 2</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">خدمات ما</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="services.html">همه خدمات</a></li>
                                                                    <li><a href="service-business.html">استراتژی کسب و کار</a></li>
                                                                    <li><a href="service-develop.html">توسعه وب</a></li>
                                                                    <li><a href="service-market.html">تحقیقات بازار</a></li>
                                                                    <li><a href="service-advertise.html">نمونه تبلیغات</a></li>
                                                                    <li><a href="service-design.html">طراحی روند</a></li>
                                                                    <li><a href="service-marketing.html">بازاریابی دیجیتال</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">نمونه کارها</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="portfolio.html">نمونه کارها</a></li>
                                                                    <li><a href="portfolio-single.html">جزئیات نمونه کار</a></li>
                                                                    <li><a href="portfolio-single-slider.html">نمونه کشویی نمونه کارها</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">وبلاگ</a>
                                                                <ul class="sub-menu">
                                                                    <li class="icon-active"><a href="#">طرح وبلاگ</a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="blog-standard.html">وبلاگ استاندارد</a></li>
                                                                            <li><a href="blog-standard-sidebar.html">وبلاگ استاندارد کشوی</a></li>
                                                                            <li><a href="blog-grid.html">طرح شبکه بلاگ</a></li>
                                                                            <li><a href="blog-grid-sidebar.html">طرح شبکه بلاگ کشوی</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="icon-active"><a href="#">جزئیات وبلاگ</a>
                                                                        <ul class="sub-menu">
                                                                            <li><a href="blog-single.html">جزئیات وبلاگ</a></li>
                                                                            <li><a href="blog-single-left.html">نوار کناری سمت چپ</a></li>
                                                                            <li><a href="blog-single-right.html">نوار کناری سمت راست</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="icon-active"><a href="#">صفحات</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="about.html">درباره ما</a></li>
                                                                    <li><a href="team.html">تیم ما</a></li>
                                                                    <li><a href="pricing.html">برنامه قیمت گذاری</a></li>
                                                                    <li><a href="faqs.html">سوالات</a></li>
                                                                    <li><a href="404.html">404</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="contact.html">تماس با ما</a></li>
                                                        </ul>
                                                        <!--/ End Naviagiton -->
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                        <!--/ End Main Menu -->
                                        <div class="right-button">
                                            <a href="contact.html" class="bizwheel-btn">دریافت قیمت</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Middle Header -->
        <!-- Sidebar Popup -->
        <div class="sidebar-popup">
            <div class="cross">
                <a class="btn"><i class="fa fa-close"></i></a>
            </div>
            <div class="single-content">
                <h4>درباره ما</h4>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                <ul class="address-widget-list">
                    <li class="footer-mobile-number"><i class="fa fa-phone"></i>03532270057</li>
                    <li class="footer-mobile-number"><i class="fa fa-envelope"></i>setinco@gmail.com</li>
                    <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>ساختمان خانه اوتارا</li>
                </ul>
                <div class="side-button">
                    <a href="portfolio.html" class="bizwheel-btn theme-2 effect">نمایش نمونه کارها</a>
                </div>
            </div>
            <div class="single-content">
                <h4>پیوندهای مهم</h4>
                <ul class="links">
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">خدمات ما</a></li>
                    <li><a href="#">نمونه کارها</a></li>
                    <li><a href="#">برنامه قیمت گذاری</a></li>
                    <li><a href="#">وبلاگ و اخبار</a></li>
                    <li><a href="#">تماس با ما</a></li>
                </ul>
            </div>
        </div>
        <!--/ Sidebar Popup -->
    </header>
    <!--/ End Header -->
    <!-- Breadcrumb -->
    <div class="breadcrumbs overlay" style="background-image:url('img/breadcrumb.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <!-- Bread Menu -->
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">خانه</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                            </ul>
                        </div>
                        <!-- Bread Title -->
                        <div class="bread-title"><h2>آدرس ما</h2></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Breadcrumb -->
    <?= $content ?>

    <!-- Footer -->
    <footer class="footer" style="background-image:url('img/map.png')">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Footer About -->
                        <div class="single-widget footer-about widget">
                            <div class="logo">
                                <div class="img-logo">
                                    <a class="logo" href="index.html">
                                        <img class="img-responsive" src="img/logo2.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="footer-widget-about-description">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            </div>
                            <div class="social">
                                <!-- Social Icons -->
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="button"><a href="#" class="bizwheel-btn">درباره ما</a></div>
                        </div>
                        <!--/ End Footer About -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Footer Links -->
                        <div class="single-widget f-link widget">
                            <h3 class="widget-title">شرکت</h3>
                            <ul>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">خدمات ما</a></li>
                                <li><a href="#">نمونه کارها</a></li>
                                <li><a href="#">برنامه قیمت گذاری</a></li>
                                <li><a href="#">تماس با ما</a></li>
                            </ul>
                        </div>
                        <!--/ End Footer Links -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Footer News -->
                        <div class="single-widget footer-news widget">
                            <h3 class="widget-title">صفحه وبلاگ</h3>
                            <!-- Single News -->
                            <div class="single-f-news">
                                <div class="post-thumb"><a href="#"><img src="img/blog/blog-3.jpg" alt="#"></a></div>
                                <div class="content">
                                    <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                    <h4 class="title"><a href="blog-sngle.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h4>
                                </div>
                            </div>
                            <!--/ End Single News -->
                            <!-- Single News -->
                            <div class="single-f-news">
                                <div class="post-thumb"><a href="#"><img src="img/blog/blog-4.jpg" alt="#"></a></div>
                                <div class="content">
                                    <p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>15 شهریور 1399</time></p>
                                    <h4 class="title"><a href="blog-sngle.html">ما بهترین خدمات مشاوره و خلاقیت را به شما ارائه می دهیم</a></h4>
                                </div>
                            </div>
                            <!--/ End Single News -->
                        </div>
                        <!--/ End Footer News -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Footer Contact -->
                        <div class="single-widget footer_contact widget">
                            <h3 class="widget-title">مخاطب</h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            <ul class="address-widget-list">
                                <li class="footer-mobile-number"><i class="fa fa-phone"></i>03532270057</li>
                                <li class="footer-mobile-number"><i class="fa fa-envelope"></i>setinco@gmail.com</li>
                                <li class="footer-mobile-number"><i class="fa fa-map-marker"></i>ساختمان خانه اوتارا</li>
                            </ul>
                        </div>
                        <!--/ End Footer Contact -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                        <!-- Footer Newsletter -->
                        <div class="footer-newsletter">
                            <form action="#" method="post" class="newsletter-area">
                                <input type="email" placeholder="آدرس ایمیل شما">
                                <button type="submit">ثبت نام</button>
                            </form>
                        </div>
                        <!--/ End Footer Newsletter -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-content">
                            <!-- Copyright Text -->
                            <p>© طراحی و توسعه توسط <a target="_blank" href="#">گروه ستین</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/  End Footer -->

<div?

<!-- Jquery JS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Modernizr JS -->
<script src="js/modernizr.min.js"></script>
<!-- ScrollUp JS -->
<script src="js/scrollup.js"></script>
<!-- FacnyBox JS -->
<script src="js/jquery-fancybox.min.js"></script>
<!-- Cube Portfolio JS -->
<script src="js/cubeportfolio.min.js"></script>
<!-- Slick Nav JS -->
<script src="js/slicknav.min.js"></script>
<!-- Way Points JS -->
<script src="js/waypoints.min.js"></script>
<!-- CounterUp JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Slick Nav JS -->
<script src="js/slicknav.min.js"></script>
<!-- Slick Slider JS -->
<script src="js/owl-carousel.min.js"></script>
<!-- Easing JS -->
<script src="js/easing.js"></script>
<!-- Theme Option JS -->
<script src="js/theme-option.js"></script>
<!-- Magnipic Popup JS -->
<script src="js/magnific-popup.min.js"></script>
<!-- Active JS -->
<script src="js/active.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
