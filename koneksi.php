<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED );
$host="localhost"; 
$user="root"; 
$password=""; 

$koneksi=mysql_connect($host,$user,$password); 
$db = mysql_select_db("travel"); 
//cek koneksi 
if($koneksi){ 
 // echo "berhasil koneksi"; 
}else{ 
 echo "gagal koneksi"; 
} 

?>