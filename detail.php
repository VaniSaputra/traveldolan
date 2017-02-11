<?php 
    // Login Cek
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
            <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
            $id_tujuan = $_GET['id'];
            $cari = "SELECT * FROM `tujuan` WHERE id_tujuan='$id_tujuan'";
            $hasil = mysql_query($cari);
            while ($data = mysql_fetch_array($hasil)){
            ?>
           
            <!-- === END CONTENT === -->
             <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                            <h2><?php echo "$data[nama_tujuan]";?></h2>
                            <div class="row">
                                <div class="col-md-6 animate fadeIn">
                                    <img src="assets/img/galeri/<?php echo "$data[file]";?>" alt="about-me" class="margin-top-10">
                                    <ul class="list-inline about-me-icons margin-vert-20">
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-dribbble"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-lg fa-border fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6 margin-bottom-10 animate fadeInRight">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Nama</th>
                                                <td>:</td>
                                                <td><?php echo "$data[nama_tujuan]";?></td>
                                            </tr>
                                            <tr>
                                                <th>alamat</th>
                                                <td>:</td>
                                                <td><?php echo "$data[alamat_tujuan]";?></td>
                                            </tr>
                                            <tr>
                                                <th>Biaya masuk</th>
                                                <td>:</td>
                                                <td><?php echo "$data[biaya]";?></td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td>:</td>
                                                <td><?php echo "$data[deskripsi]";?></td>
                                            </tr>
                                        </tbody>
                                      </table>
                                </div>
                            </div>

                             <!-- Tab v2 -->
                            <div class="tabs alternative">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#sample-2a" data-toggle="tab">
                                        <ul class="list-unstyled">
                                            <li>Keterangan Pemesanan <i class="fa fa-chevron-right color-gray-lighter"></i></li>
                                        </ul>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#sample-2b" data-toggle="tab">
                                            <ul class="list-unstyled">
                                                <li>Estimasi Biaya <i class="fa fa-chevron-right color-gray-lighter"></i></li>
                                            </ul>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="sample-2a">
                                        <div class="row">
                                            <div class="col-md-7">
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="sample-2b">
                                        <div class="row">
                                            <div class="col-md-7">
                                                 <h3 class="no-margin no-padding">Etimasi biaya pesanan anda</h3>
                                                <p>jumlah orang x jenis travel x <?php echo "$data[biaya]";?></p>
                                                <p>keterangan</p>
                                                <p>
                                                    bis = Rp 200.000 <br>
                                                    Mobil = Rp 400.000 <br>
                                                    Kereta = Rp 100.000 <br>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- End Tab v2 -->
                            
                            <center>
                                <form method="POST" action="">
                                    <input type="submit" name="submit" value="pesan" class="btn btn-primary btn-block"> 
                                </form>
                            </center>
                            <?php
                                error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
                                $submit=$_POST['submit'];
                                if ($submit) {
                                    $sql = "SELECT * FROM `tujuan` WHERE id_tujuan=$data[id_tujuan]";
                                    $query= mysql_query($sql);
                                    $result = mysql_fetch_array($query);
                                     if($result !=""){
                                        session_start();
                                        $_SESSION['id_tujuan']=$result['id_tujuan'];
                                            ?>
                                                    <script language script="JavaScript">
                                                        document.location='pesan.php?id_tujuan=<?php echo "$data[id_tujuan]";?>';
                                                    </script>
                                                    <meta http-equiv="refresh" content="0;url=index.php" />
                                             <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            <!-- === END CONTENT === -->

            <!-- === FOOTER ===-->
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
