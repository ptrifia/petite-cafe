<?php
#PAPAR HEADER
include 'header.php';
include 'security.php';
#PANGGIL FUNGSI
include'fungsi.php';
#JIKA BAKUL ADA ISI
if (!isset($_SESSION['cart'])){
$_SESSION['cart'] = [];
}
?>
<!--SUSUNAN-->
<div class="row">
<!--PANGGIL MENU-->
<div id="menu">
<?php include 'menu.php'; ?>
</div>
<!--RUANGAN PELANGGAN-->
<div id="isi">
<?php
if($_SESSION['level']=="PENGGUNA"){
?>
<h3>SELAMAT DATANG <?php echo strtoupper($_SESSION['nama']);?>
<br>
<hr>
Bakul : <a href="bakul.php"><?php echo count($_SESSION['cart']);
echo " jenis ".$barang;?></a>
<hr>
<div class="wrapper">
<?php
include 'produk_pilih.php';
}else{
#RUANGAN UNTUK ADMIN
echo "<h3>Selamat Datang Pentadbir Sistem </h3>";
echo "<div class='wrapper'>";
include 'list_produk.php';
}
?>
</div>
</div>
</div>
<?php include ('footer.php'); ?>