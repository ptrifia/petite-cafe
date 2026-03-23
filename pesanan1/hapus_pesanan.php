<?php
#SAMBUNG KE DB
require'database.php';
#DAPATKAN URL
$bil=$_GET['id'];
mysqli_query($con,"DELETE FROM pesanan WHERE
bil='$bil'");
#PAPAR MESEJ
echo "<script>alert('Pesanan berjaya dihapuskan');
window.location='dashboard.php'</script>";
?>