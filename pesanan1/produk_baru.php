<?php include 'header.php';?>
<!--PANGGIL MENU-->
<div id="menu">
<?php include 'menu.php';?>
</div>
<!--PAPAR DIRUANGAN ISI-->
<div class="row">
<div id ="isi">
<h3>MAKLUMAT MENU - <?php echo $barang;?> BARU</h3>
<a href="produk.php"><button>Senarai Menu</button></a>
<form method= "POST" action="produk_simpan.php"
enctype="multipart/form-data">
Nama Menu<p>Huruf Besar</p>
<input type="text" name="namaProduk" size="50%"required
autofocus></br>
Harga<p>Nilai dalam RM</p>
<input type="text" name="harga" placeholder="00.00" size="10"
required></br>
Detail<p>Taip penerangan mengenai menu</p>
<textarea name="detail" rows="5" cols="50%"></textarea></br>
Gambar<p>Muat naik gambar(*Nama fail gambar mesti kurang dari 10 
aksara)</p>
<input type="file" name="gambar" accept=".jpg,.jpeg,.png"
required>
<hr>
Tindakan<p>Tekan Simpan</p>
<button name="simpan" type="submit">SIMPAN</button>
</form>
<button type="reset">RESET</button>
<hr>
</div>
</div>

