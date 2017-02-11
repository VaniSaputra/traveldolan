<?php 
  // Login Cek
  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);  
  include "koneksi.php";
  session_start();// bagian login tidak kembali
   
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
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        
                        <div class="col-md-12">
                            <h2 class="margin-bottom-30" align="center">Tata Cara Pemesan</h2>
            
                            <!-- Tab v2 -->
                            <div class="tabs alternative">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#sample-2a" data-toggle="tab">
                                        <ul class="list-unstyled">
                                            <li>Pilih destinasi  <i class="fa fa-chevron-right color-gray-lighter"></i></li>
                                        </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sample-2b" data-toggle="tab">
                                            <ul class="list-unstyled">
                                                <li>Order Destinasi <i class="fa fa-chevron-right color-gray-lighter"></i></li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sample-2c" data-toggle="tab">
                                            <ul class="list-unstyled">
                                                <li>Isi Datadiri <i class="fa fa-chevron-right color-gray-lighter"></i></li>
                                            </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sample-2d" data-toggle="tab">Cek Datadiri</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="sample-2a">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h3 class="no-margin no-padding">Pilih gambar destinasi tujuan anda</h3>
                                                <p>klik gambar pada lokasi yang akan di tuju,
                                                maka akan keluar informasi tentang wisata yang sudah dipilih tersebut</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2b">
                                        <div class="row">
                                            <div class="col-md-7">
                                                 <h3 class="no-margin no-padding">Pesan destinasi tempat tujuan anda</h3>
                                                <p>jika anda tertarik dengan tempat wisata tersebut, anda bisa memesan nya dengan cara klik tombol 'order'
                                                setelah itu anda harus mengisi data diri anda dengan benar.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2c">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h3 class="no-margin no-padding">Mengisi datadiri pemesan</h3>
                                                <p>setelah itu anda harus mengisi data diri anda dengan benar.
                                                    periksa kembali data anda sebelum ke langkah selanjutnya
                                                    setelah data yang diisi sudah benar, klik 'ok' untuk melanjutkan kelangkah berikutnya</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2d">
                                       <div class="row">
                                            <div class="col-md-7">
                                                <h3 class="no-margin no-padding">Cek lagi datadiri anda</h3>
                                                <p>selanjutnya akan muncul tampilan data anda,<br> cek data anda apakah data anda sudah sesuai, jika sudah klik 'down' </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab v2 -->
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