<?php
include 'header.php';
#DAPATKAN URL
$bil = $_GET['id'];
#PANGGIL MAKLUMAT PELANGGAN & PESANAN
$pelanggan = mysqli_query($con,
"SELECT * FROM pesanan AS t1
INNER JOIN pelanggan AS t2
ON t1.nomHp=t2.nomHp
WHERE t1.bil='$bil'");
$data1=mysqli_fetch_array ($pelanggan);
$status1=$data1['status'];
$status2=$_SESSION['level'];
?>
<!-- PANGGIL MENU -->
<div id="menu">
<?php include 'menu.php'; ?>
</div>
<!-- CETAKAN -->
<div id="printarea">
<!-- PAPAR DI RUANGAN ISI -->
<div class="row">
<div id="isi">
<h3>MAKLUMAT BELIAN PELANGGAN</h3>
<!-- PAPAR MAKLUMAT BELIAN -->
<?php
$sno =1;
$total = 0;
echo "NAMA PELANGGAN : ".$data1['nama']."(".$data1['nomHp'].")";
echo "<hr>";
#PANGGIL MAKLUMAT BELIAN PRODUK IKUT PESANAN
$result = mysqli_query($con,
"SELECT * FROM pesanan AS t1
INNER JOIN belian AS t2
ON t1.bil=t2.bil
INNER JOIN produk AS t3
ON t2.idProduk=t3.idProduk
WHERE t1.bil='$bil'");
$semak=mysqli_num_rows($result);
?>
<table>
<thead>
<tr>
<th>Bil</th>
<th>Item</th>
<th>Ktt</th>
<th>Harga/unit</th>
<th>Jumlah</th>
</tr>
</thead>
<tbody>
<?php
while($data2 = mysqli_fetch_assoc($result)){
$subtotal = $data2['harga'] * $data2['kuantiti'];
$total += $subtotal;
?>
<tr>
<td><?php echo $sno; ?></td>
<td><?php echo $data2['namaProduk']; ?></td>
<td><?php echo $data2['kuantiti']; ?></td>
<td><?php echo $data2['harga']; ?></td>
<td>RM<?php $jum1 = $subtotal; echo number_format($jum1, 2); ?>
</td>
</tr>
<?php
$sno++;
}
?>
</tbody>
</table>
<hr>
<p>Jumlah Perlu Dibayar: RM<?php echo number_format($total,2);
?></p>

<hr>
<?php
if ($status1=="PENDING" && $status2=="ADMIN"){
?>
<a href="pesanan_terima.php?id=<?php echo $bil;?>">
<button>Terima Pesanan</button></a>
<a href="hapus_pesanan.php?id=<?php echo $bil;?>">
<button>Tolak Pesanan</button><a/>
<?php
}elseif ($status1=="DIPROSES" && $status2=="ADMIN"){
?>
<a href="pesanan_siap.php?id=<?php echo $bil;?>">
<button>Pesanan Siap</button></a>
<?php
}elseif ($status1=="SIAP" && $status2=="ADMIN"){
?>
<a href="terima_bayaran.php?id=<?php echo $bil;?>">
<button>Terima Bayaran</button></a>
<?php
}else{
?>
<button onclick='javascript:window.print()'>CETAK</button>
<?php
}
mysqli_close($con);
?>
</div>
</div>
</div>
<?php include ('footer.php'); ?>