<?php
#PANGGIL FUNGSI
$produk = semuaProduk($con);
while($row = mysqli_fetch_assoc($produk)){
?>
<div class="product-card">
<img src="gambar/<?php echo $row['gambar']; ?>"
class="product-image">
<h4><?php echo $row['namaProduk']; ?></h4>
<p><?php echo $row['detail']; ?></p>
<p>HARGA RM<?php echo $row['harga']; ?></p>
<form action="masuk_bakul.php" method="post">
<input type="hidden" name="idProduk"
value="<?php echo $row['idProduk']; ?>">
<input type="number" name="ktt" value="1" min="1" size="2">
<button type="submit">Pilih</button>
</form>
</div>
<?php } ?>