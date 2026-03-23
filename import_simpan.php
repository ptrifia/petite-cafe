<?php
require 'database.php';
#TERIMA FAIL CSV POST
if(isset($_POST["import"])){
if(!empty($_FILES['file']['name'])){
$filename=$_FILES["file"]["tmp_name"];
$file = fopen($filename, "r");
while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
{
$HP = $getData[0];
$NAMA = $getData[1];
#PASSWORD 4 DIGIT DARI KIRI
$PW=(substr($HP,0,4));
#MASUKKAN DALAM TABLE
mysqli_query($con,"INSERT INTO pelanggan 
values ('".$HP."','".$PW."','".$NAMA."','PENGGUNA')") ;
echo "<script>alert ('Import fail CSV berjaya');
window.location='pelanggan.php'</script>";
}
fclose($file);
}else{
echo"<script>alert('Import fail CSV gagal');
window.location='import_pelanggan.php'</script>";
}
}
?>

