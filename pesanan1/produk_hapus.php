<?php
#SAMBUNG KE DB
require 'database.php';
#DAPATKAN URL
$idDe1 = $_GET['id'];
#HAPUSKAN REKOD + GAMBAR
$res=mysqli_query($con,"SELECT*FROM produk WHERE 
idProduk =' $idDe1'");
$row=mysqli_fetch_array($res);
$loc="gambar/".$row['gambar'];
unlink($lock);
mysqli_query($con,"DELETE FROM produk WHERE idProduk='$idDe1'");
#PAPAR MESEJ
echo "<script>alert('Menu berjaya dihapuskan');
window.location='produk.php'</script>";
?>