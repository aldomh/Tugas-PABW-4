<!DOCTYPE html>
<html>
<head>
<title>Form Submit PHP</title>
<style type="text/css">
 h2 {
 color: black;
 border-bottom: 2px solid black;
 }

</style>
</head>
<body style="background-color: grey">
<h2>BIODATA SIMPLE</h2>
<?php
$email = $_POST["email"];
$nama = $_POST["full_name"];
$kelamin = $_POST["kelamin"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["Jurusan"];
$hobi = $_POST["hobi"];

$namafile = $_FILES['gambar']['name'];
$tmpfile = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmpfile, "./fileupload.jpg");

echo "<table border='0'>";
echo    "<tr><td>Email </td><td>$email</td></tr>";
echo    "<tr><td><br></td></tr>";
echo    "<tr><td>Foto </td><td><img src='fileupload.jpg' width='100' /></td></tr>";   
echo    "<tr><td>Nama Lengkap</td><td>$nama</td></tr>";
echo    "<tr><td>Jenis Kelamin </td><td>$kelamin</td></tr>";
echo    "<tr><td>Alamat </td><td>$alamat</td></tr>";
echo    "<tr><td>Jurusan </td><td>$jurusan</td></tr>";
echo    "<tr><td>Hobi </td><td>$hobi</td></tr>";
echo    "<tr><td></td>";
?>
<br>
<form action="tugas4.html">
<td><input type="submit" name="updteBtn" value="Perbarui"></td></tr>
</form>
</body>
</html>