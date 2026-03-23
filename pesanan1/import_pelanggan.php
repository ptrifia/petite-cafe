<?php include 'header.php';?>
<!--PANGGIL  MENU-->
<div id="menu">
<?php include 'menu.php';?>
</div>
<!--PAPAR ISI-->
<div class="row">
<div id="isi">
<h2>IMPORT PELANGGAN</h2>

<label>Pilih lokasi fail CSV:</label>
<!--PANGGIL FAIL IMPORT CSV-->
<form action="import_simpan.php" method="post"
enctype="multipart/form-data">
<input type="file" name="file" accept=".csv"><br>
<button type="submit" name="import">IMPORT</button>
</form>
<u>CONTOH:</u><br>
0139899429,AFEEF<br>
01162887117,NUREEN
<p><font style='font-size:20px', color='maroon'>*Cipta fail dalam notepad++ dan save as import.csv
</font></p>

</div>
</div>
<?php include ('footer.php'); ?>