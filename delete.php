<?php 
include "koneksi.php"; 

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$id_customer = $_GET['id_customer'];
$cari="SELECT p.id_pesan,c.id_customer FROM pemesanan p, customer c where c.id_customer=$id_customer AND p.id_pesan=$id_customer";
$hasil = mysql_query($cari);
while ($data = mysql_fetch_array($hasil)){
    $id_pesan=$data[id_pesan];
    $query=mysql_query("DELETE FROM `customer` WHERE id_customer='$id_customer' ");
    $query=mysql_query("DELETE FROM `pemesanan` WHERE id_customer='$id_pesan' ");
    if($query){ 
          ?>
                    <script type="text/javascript">
                    alert('data dihapus');
                    document.location = 'order_list.php';
                    </script>   
          <?php  
    }else{ 
    ?>
        <script language script="JavaScript">
        alert('Data Gagal dihapus');
        </script>   
     <?php
    }
} 
?>