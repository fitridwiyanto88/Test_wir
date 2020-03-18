Input= nama: Fitri Dwiyanto.
 email : fitridwiyanto88@gmail.com
<html>
<body>
<form method="POST" action="?action=edit">
<input type="text" name="nama"><br>
<input type="text" name="email"><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if ($_POST)
{
echo '<pre>';
print_r($_GET);
print_r($_POST);
}
?>
</body>
</html>
Ouputnya:
// $_GET
Array
(
 [action] => edit
)
// $_POST
Array
(
 [nama] => Fitri Dwiyanto
 [email] => fitridwiyanto88@gmail.com
 [submit] => submit
)
Lebih aman dari pada metode GET karena data yang dikirim tidak terlihat,
serta parameter yang dikirim tidak disimpan pada history browser/log
browser.