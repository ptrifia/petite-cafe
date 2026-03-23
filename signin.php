<h3>LOG MASUK</h3>
<p class="detail">Untuk ruangan pelanggan sedia ada</p>
<form method="post" action= "signin_semak.php">
Nombor HP:<br>
<input type="text"
name="user"placeholder="TAIP DI SINI" saiz="11%"
minLenght="9" maxLenght="11"
onkeypress='return event.charCode>=48&&
event.charCode <= 57'required autofocus/>
<br>
Kata Laluan:<br>
<input type="password"name="pass"
placeholder="******" saiz="11%" minlenght="4" maxlenght="4"
required/>
<br><br>
<button name="hantar" type="sumbit">SIGN IN</button>
<button type="reset">RESET</button>
</form>
<br>
<h3>DAFTAR BARU</h3>
<p class="detail">Sila daftar sebagai pelanggan baru jika masih tidak mempunyai akaun</p>
<a href="signup.php"><button>SIGN UP</button><a>
