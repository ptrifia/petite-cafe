<?php include 'header.php';?>
<!-- PANGGIL MENU -->
<div id="menu">
<?php include 'menu.php'; ?>
</div>
<!-- PAPAR DIRUANGAN ISI -->
<div class="row">
<div id="isi">
<a href="import_pelanggan.php"><button>+ Import Pelanggan
</button></a>
<h3>MAKLUMAT PELANGGAN</h3>
<table>
<thead>
<tr>
<th>Bil</th>
<th>Nama</th>
<th>Nom HP</th>
<th>Bil. Pesanan</th>
</tr>
</thead>
<tbody>
<?php
$sno=1;
$sql = "SELECT t1.nama , t1.nomHp, COUNT(t2.nomHp)
AS kira FROM pelanggan AS t1
INNER JOIN pesanan AS t2
ON t1.nomHp=t2.nomHp
WHERE t1.aras!='ADMIN'
GROUP BY t2.nomHp
ORDER BY t1.nama ASC ";
$result = mysqli_query($con,$sql);
while($data1 = mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $sno; ?></td>
<td><?php echo $data1['nama']; ?></td>
<td><?php echo $data1['nomHp']; ?></td>
<td><?php echo $data1['kira']; ?></td>
</tr>
<?php
$sno++;
}
mysqli_close($con);
?>
</tbody>
</table>
</div>
</div>
<?php include ('footer.php'); ?>