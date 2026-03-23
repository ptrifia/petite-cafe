<?php
session_start();
include 'database.php';
if($_SERVER['REQUEST_METHOD'] ==='POST'){
$nomHp = $_POST['nomHp'];
$status ='PENDING';
# TAMBAH REKOD KE TABLE PESANAN
$sqlPesanan = "INSERT INTO pesanan (tarikh, status, nomHp)
VALUES(?,?,?)";
$stmtPesanan = mysqli_prepare($con, $sqlPesanan);
mysqli_stmt_bind_param($stmtPesanan, "sss", $tarikh, $status,
$nomHp);
mysqli_stmt_execute($stmtPesanan);
$bil = mysqli_insert_id($con);
mysqli_stmt_close($stmtPesanan);
#TAMBAH REKOD KE TABLE BELIAN
$sqlBelian ="INSERT INTO belian (kuantiti, idProduk, bil)
VALUES(?,?,?)";
$stmtBelian = mysqli_prepare($con, $sqlBelian);
foreach($_SESSION['cart'] as $idProduk =>$quantity){
mysqli_stmt_bind_param($stmtBelian, "iii", $quantity, $idProduk,
$bil);
mysqli_stmt_execute($stmtBelian);
}
#TUTUP DATABASE
mysqli_stmt_close($stmtBelian);
#KOSONGKAN DALAM BAKUL BILA DAH BELI
$_SESSION['cart'] = [];
}
echo"<script>alert('PESANAN BERJAYA, TERIMA KASIH');
window.location='dashboard.php'</script>";
exit();
?>