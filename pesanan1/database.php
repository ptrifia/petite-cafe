<?php
#SET TIME ZONE WAKTU#
date_default_timezone_set("Asia/Kuala_Lumpur");
$tarikh=date('Y-m-d H:i:s');
#SETTING DATABASE
$host="localhost";
$user="root";
#NAMA DB, UBAH DI SINI
$db="pesanan1";
$password="";
#SAMBUNGAN PANGKALAN DATA 
$con = mysqli_connect($host,$user,$password,$db);
#PAPARAN MSG JIKA SAMBUNGAN GAGAL
if (!$con){
die("Database tidak berhubung!:"
. mysqli_connect_error());
}
#BOLEH UBAH DI SINI
#TETAPAN SISTEM
$namasys="SISTEM PENGURUSAN pesanan1";
$namasys1="SWEETIE CRUMBS";
$motto= "ORDER --> SIAP --> COD sendiri";         
#PRODUK COD YANG DIJUAL
$barang= "COOKIES";
?> 


