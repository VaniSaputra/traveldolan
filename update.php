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
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <!-- form -->
                        <?php
                            error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
                            $id_customer = $_GET['id_customer'];
                            $cari = "SELECT c.id_customer, c.KTP, c.nama, c.jk,c.no_hp,c.alamat,c.email,p.jumlah_orang,p.jenis_trans,p.tgl_pemesanan,p.jam_berangkat FROM customer c, pemesanan p WHERE c.id_customer=p.id_customer AND c.id_customer=$id_customer ";
                            $hasil = mysql_query($cari);
                            while ($data = mysql_fetch_array($hasil)){
                        ?>
                            <form class="signup-page" method="POST" action="">
                                <div class="signup-header">
                                    <h2>Periksa lagi data diri anda</h2>
                                    <p>Already a member? Click
                                        <a href="#">HERE</a>to login to your account.</p>
                                </div>
                                <label>ID KTP</label>
                                <input name="ktp" class="form-control margin-bottom-20" type="text" value="<?php echo "$data[KTP]";?>" >
                                <label>nama</label>
                                <input name="nama" class="form-control margin-bottom-20" type="text" value="<?php echo "$data[nama]";?>">
                               <label>jenis kelamin</label>
                                 <div class="form-group">
                                        <select name="jk" class="form-control" id="sel1" required="" >
                                            <option>&nbsp;</option>
                                            <option value="laki-laki">laki-laki</option>
                                            <option value="perempuan">perempuan</option>
                                        </select>
                                    </div>
                                <label>No. Handphone</label>
                                <input name="no_hp" class="form-control margin-bottom-20" type="text" value="<?php echo "$data[no_hp]";?>">
                                <label>alamat</label>
                                <textarea name="alamat" class="form-control margin-bottom-20" type="text"><?php echo "$data[alamat]";?></textarea>
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                 <input name="email" class="form-control margin-bottom-20" type="text" value="<?php echo "$data[email]";?>">
                                <hr>
                                <h3 class="no-margin no-padding">Spesiikasi Pemesanan</h3>
        
                                <div class="signup-header">
                                <label>Jumlah Orang</label>
                                <input name="jumlah_orang" class="form-control margin-bottom-20" type="text" required="" value="<?php echo "$data[jumlah_orang]";?>">
                                <label>Jenis transportasi</label>
                                    <div class="form-group">
                                        <select name="jenis_trans" class="form-control" id="sel1" required="">
                                            <option value="mobil">Mobil</option>
                                            <option value="bus">Bus</option>
                                            <option value="kereta">kereta</option>
                                            <option value="pesaawat"> pesawat</option>
                                        </select>
                                    </div>
                                <label>Tanggal Pemesanan</label>
                                <input name="tgl_pemesanan" class="form-control margin-bottom-20" type="date" placeholder="2016-01-01" required="" value="<?php echo "$data[tgl_pemesanan]";?>" >
                                <label>jam keberangkatan</label>
                                <input name="jam_berangkat" class="form-control margin-bottom-20" type="text" placeholder="24:00" required="" value="<?php echo "$data[jam_berangkat]";?>">
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 text-right">
                                       <input type="submit" name="submit" value="update" class="btn btn-primary btn-block">
                                    </div>
                                </div>
                            </form>
                            <?php
                             }
                             $KTP1 = $_GET['KTP'];
                             error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );

                                    $KTP=$_POST['ktp'];
                                    $nama=$_POST['nama'];
                                    $jk=$_POST['jk'];
                                    $no_hp=$_POST['no_hp'];
                                    $alamat=$_POST['alamat'];
                                    $email=$_POST['email'];

                                    $jumlah_orang=$_POST['jumlah_orang'];
                                    $jenis_trans=$_POST['jenis_trans'];
                                    $tgl_pemesanan=$_POST['tgl_pemesanan'];
                                    $jam_berangkat=$_POST['jam_berangkat'];

                                    $submit=$_POST['submit'];

                                    $update="UPDATE `customer` SET `KTP`='$KTP',`nama`='$nama',`jk`='$jk',`alamat`='$alamat',`no_hp`='$no_hp',`email`='$email' WHERE id_customer=$id_customer";
                                    $update2="UPDATE `pemesanan` SET `jumlah_orang`='$jumlah_orang',`jenis_trans`='$jenis_trans',`tgl_pemesanan`='$tgl_pemesanan',`jam_berangkat`='$jam_berangkat' WHERE id_customer=$id_customer";

                                     if($submit){
                                        mysql_query($update);
                                        mysql_query($update2);
                                        session_start();
                                        $_SESSION['id_customer']=$id_customer;
                                        ?>
                                            <script language script="JavaScript">
                                            alert('Data Berhasil diupdate');
                                            document.location='validasi.php?id_customer=<?php echo "$id_customer";?>';
                                            </script>   
                                        <?php
                                    }
                        ?>

                        </div>
                        <!-- End Register Box -->
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