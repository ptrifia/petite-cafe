<?php
include 'database.php';
#DAPATKAN URL
$bil=$_GET['id'];
#PROSES KEMASKINI
$simpan=mysqli_query($con,"UPDATE pesanan
SET status = 'BAYAR'
WHERE bil='$bil'");
#MESEJ BERJAYA
echo "<script>alert('Bayaran diterima');
window.location='senarai_pesanan.php'</script>";
?>
