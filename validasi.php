<?php 
    // Login Cek
  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);  
  include "koneksi.php";
  session_start();
  if(empty ($_SESSION['id_customer']))
  {
    include "index.php";
  }
  else {     
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
                                                    <a href="features-labels.html">Paket</a>
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
                    <div class="row margin-vert-30">
                        <p>terima kasih telah melengkapi form pengisian yang telah kami sediakan :)
                        berikut ini adalah hasil dari pengisian anda :</p>
                         <?php
                            error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
                            $id_customer = $_GET['id_customer'];
                            $cari = "SELECT c.KTP, c.nama, c.alamat, c.no_hp, t.nama_tujuan, p.jumlah_orang, p.jenis_trans, t.biaya FROM customer c, pemesanan p, tujuan t WHERE c.id_customer=p.id_customer AND t.id_tujuan=p.id_tujuan AND c.id_customer=$id_customer ";
                            $hasil = mysql_query($cari);
                            while ($data = mysql_fetch_array($hasil)){
                        ?>
                             <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">ID KTP </label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[KTP]";?></span>
                                </div>            
                              </div>
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">Nama Lengkap </label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[nama]";?></span>
                                </div>            
                              </div>
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">Alamat </label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[alamat]";?></span>
                                </div>            
                              </div>
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">No. Handphone </label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[no_hp]";?></span>
                                </div>            
                              </div>
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">Tujuan Destinasi</label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[nama_tujuan]";?></span>
                                </div>            
                              </div>
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">Jenis Transportasi </label>  
                                <div class="col-md-2">
                                    <span class="help-block"><?php echo "$data[jenis_trans]";?></span>
                                </div>            
                              </div>
                             
                              <div class="form-group">
                                <label class="col-md-6 control-label" for="nama">Biaya total anda </label>  
                                <div class="col-md-2">
                                    <span class="help-block">Rp <?php echo "$data[biaya]";?></span>
                                </div>            
                              </div>
                        
                              <!-- Button (Double) -->
                              <div class="form-group">
                                <label class="col-md-5 control-label" for="submit"></label>
                                <div class="col-md-6">
                                <form action="" method="post">
                                    <input name="submit" type="submit" class="btn btn-primary" value="Update">
                                    <input name="down" type="submit" class="btn btn-primary" value="Down">
                                </form>
                                <?php
                                error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
                                    $submit=$_POST['submit'];
                                    $down=$_POST['down'];
                                    if ($submit) {
                                        session_start();
                                            $_SESSION['id_customer']=$id_customer;
                                        ?>

                                            <script language script="JavaScript">
                                            document.location='update.php?id_customer=<?php echo "$id_customer";?>';
                                            </script>   
                                        <?php
                                    }elseif ($down) {
                                        ?>
                                            <script language script="JavaScript">
                                            document.location='session_halaman.php';
                                            </script>   
                                        <?php
                                        
                                    }
                                ?>
                                </div>
                              </div>   
                        <?php
                             }
                        ?>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         
            <!-- === BEGIN FOOTER === -->
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

<?php
}
?>