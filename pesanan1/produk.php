<?php 
include 'header.php';  
include 'fungsi.php';
#PANGGIL FUNGSI 
$produk = semuaProduk($con);
?>  
<!--PANGGIL MENU-->
<div id="menu">
<?php include 'menu.php'; ?>
</div>
<!--PAPAR DIRUANGAN ISI-->
<div class="row">
<div id="isi">
<h3>MAKLUMAT MENU - <?php echo $barang;?></h3>
<a href= "produk_baru.php"><button>+ Menu Baru</button></a>
<table>       
<thead>   
<tr>
<th>Bil</th>
<th>Gambar</th>
<th>Item</th>
<th>Harga</th>
<th>Detail</th>
<th>Tindakan</th> 
</tr>       
</thead>  
<tbody> 
<?php 
$sno=1;
while($data1 = mysqli_fetch_assoc($produk)){   
?>      
<tr>   
<td><?php echo $sno; ?></td>
<td><img src="gambar\<?php echo $data1['gambar']; ?>"
class="product-image"></td>      
<td><?php echo $data1 ['namaProduk']; ?></td>
<td><?php echo number_format($data1['harga'],2); ?></td>    
<td><?php echo $data1['detail']; ?></td>     
<td>       
<a href="produk_edit.php?id=<?php echo $data1['idProduk']; ?>">
<button>EDIT</button></a>
<a href="produk_hapus.php?id=<?php echo $data1['idProduk'];?>">
<button>HAPUS</button></a>
</td>
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