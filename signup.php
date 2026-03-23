<?php include 'header.php'; ?>
<html>
<!-- PANGGIL ISI -->
<div id="isi">
<h2>PENDAFTARAN PELANGGAN BARU </h2>
<form method="POST" action="signup_simpan.php">
<font color='red'>*Pastikan maklumat anda betul sebelum
membuat pendaftaran.</font>
<p>Nombor HP<br>
<input type="text" name="nomhp" placeholder="Nombor HP
tanpa tanda -" minLength='10' maxLength='11'
size="30" onkeypress='return event.charCode >= 48 &&
event.charCode <= 57' required autofocus><br>
<font style='font-size:10px', color='red'>*Password adalah
4 digit di depan nombor HP anda yang dijana secara automatik.
</font></p>
<p>Nama<br>
<input type="text" name="nama" placeholder="Nama Anda"
size="60" required></p>
<br>
<div>
<button name="hantar" type="submit">DAFTAR</button>
<button type="reset">RESET</button>
<?php include ('footer.php'); ?>
</div>
</form>
</div>
</html>
