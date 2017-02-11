<?php 
  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);  
  include "koneksi.php";
  session_start();
?>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Travel Dolan Kuy</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <style>
          <?php 
            if ($_SESSION['username'] == "admin")
            {
                echo "
                  .pr-admin
                  {
                    visibility: hidden
                  }
                   ";
            }elseif ($_SESSION['username'] != "admin") {
                echo "
                  .pr-user
                  {
                    visibility: hidden
                  }
                 ";
            }
           ?>
        </style>
    </head>
    <body>
        <div id="body-bg">
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php" title="">
                                <img src="assets/img/logo.png" width="200" height="80" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home selected">Beranda</a>
                                    </li>
                                    <li>
                                        <span class="fa-book">Galeri</span>
                                        <ul>
												<li>
                                                    <a href="mandiri.php">Mandiri</a>
                                                </li>
												<li>
                                                    <a href="paket.php">Paket</a>
                                                </li>
                                        </ul>
                                    </li>
                                   <li>
                                            <a href="cara_pesan.php" class="fa-gears">Cara Pesan</a>
                                    </li> 
									<li>
									       <a href="hubungi_kami.php" class="fa-phone">Hubungi kami</a>
									</li>
                                    <li>
                                        <a href="order_List.php" class="fa-book pr-user"> Order List</a>
                                    </li>
                                    <li>
                                        <a href="#"" class="fa-book" style="visibility: hidden;"> file type hidden</a>
                                    </li>
                                    <li>
                                        <a href="login.php" class="pr-admin">Login</a>
                                    </li>
                                    <li class="dropdown pr-user">
                                        <a href="#" class="dropdown-toggle pr-user" data-toggle="dropdown"><span class="label label-success">[ <?php echo ucwords($_SESSION['username']); ?> ]</span> <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">        
                                            <li><a href="logout.php" ></span> Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                                <li data-target="#carousel-example" data-slide-to="3"></li>
                                <li data-target="#carousel-example" data-slide-to="4"></li>
                                <li data-target="#carousel-example" data-slide-to="5"></li>
                                <li data-target="#carousel-example" data-slide-to="6"></li>
                                <li data-target="#carousel-example" data-slide-to="7"></li>
                                <li data-target="#carousel-example" data-slide-to="8"></li>
                                <li data-target="#carousel-example" data-slide-to="9"></li>
                                <li data-target="#carousel-example" data-slide-to="10"></li>
                                <li data-target="#carousel-example" data-slide-to="11"></li>
                                <li data-target="#carousel-example" data-slide-to="12"></li>
                                <li data-target="#carousel-example" data-slide-to="13"></li>
                                <li data-target="#carousel-example" data-slide-to="14"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/slideshow/1.png">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi barong.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi borobudur.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi gebang.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi ijo.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi kalasan.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi kedulan.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi mendut.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi pawon.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi plaosan.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi prambanan.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi ratuboko.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi sambi sari.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi sari.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/candi sewu.jpg">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
            </div>

<!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2 class="margin-bottom-10" align="center">Selamat Datang di Travel Dolan Kuy</h2>
                            <hr class="margin-top-3 0">
                            <!-- Intro / Why Us? -->
                            <div class="row">
                                <div class="col-md-8 animate fadeInLeft">
                                    <p>Hallo gaes..
                                        <br>
                                         Buat kalian yang suka travelling khususnya di sekitar area Jogjakarta, yang bingung mau kemana dan bingung dengan transportasi yang bagus, nyaman, terpercaya??
                                        <br>
                                        kami menyediakan web ini untuk memudahkan kalian yang ingin jalan-jalan di area Jogjakarta
                                    </p>
                                </div>
                                <div class="col-md-4 animate fadeIn">
                                    <h3 class="margin-bottom-10">Kenapa Kami?</h3>
                                    <ul class="list-unstyled list-services">
                                        <li>
                                            <i class="fa fa-chevron-right color-gray-lighter"></i>Biaya Murah</li>
                                        <li>
                                            <i class="fa fa-chevron-right color-gray-lighter"></i>Pemesanan Mudah</li>
                                        <li>
                                            <i class="fa fa-chevron-right color-gray-lighter"></i>Up to Date</li>
                                        <li>
                                            <i class="fa fa-chevron-right color-gray-lighter"></i>Garansi Kenyamanan</li>
                                        <li>
                                            <i class="fa fa-chevron-right color-gray-lighter"></i>Pelayanan Cepat</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Top Panels -->
                            <hr class="margin-top-3 0">

                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->

            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                      
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright">
                            <p align="center"> Copyright &copy; 2016
							Travel Dolan Kuy | All Right Reserved</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->

