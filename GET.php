Input= nama: Fitri Dwiyanto.
 email : fitridwiyanto88@gmail.com
<html>
<body>
<form method="GET" action="">
<input type="text" name="nama"><br>
<input type="text" name="email"><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if ($_GET)
{
echo 'Nama: ' . $_GET['nama'];
echo '<br>';
echo 'Email: ' . $_GET['email'];
}
?>
</body>
Output :
ketika kita refresh browser maka akan kita dapatkan hasil:
Nama: Fitri Dwiyanto
Email: fitridwiyanto@gmail.com
Simpel, dan data mudah diedit, misal untuk menuju halaman 5 dari suatu website, kita
tinggal mengganti urlnya.