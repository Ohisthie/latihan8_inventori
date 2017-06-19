<html>
<body>
<?php
include_once("inkoneksi.php");
$tabel=mysql_query("CREATE TABLE barang(
kode INT NOT NULL,
nama VARCHAR(30) NOT NULL,
kategori VARCHAR(50) NOT NULL,
jumlah DOUBLE NOT NULL,
pokok DOUBLE NOT NULL,
jual DOUBLE NOT NULL,
PRIMARY KEY(kode))");

if($tabel)
{echo"Inventoristi berhasil membuat tabel barang melalui script php";}
else
{echo"Inventoristi Gagal membuat tabel";}
?>
</body>
</html>
