<html>
<body>
<?php
include_once("inkoneksi.php");
$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1001','HP','Elektronik',40,4000000,4500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1002','Komputer','Elektronik',50,5000000,6000000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1003','Laptop','Elektronik',50,7000000,8500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1004','Radio','Elektronik',50,1000000,1500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1005','Kipas Angin','Elektronik',100,4000000,5000000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1006','Lampu','Elektronik',500,1000000,1500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1007','TV','Elektronik',59,11000000,11500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1008','Mixer','Elektronik',590,1000000,1500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1009','Oven','Elektronik',348,2000000,2500000)");

$insert=mysql_query("INSERT INTO barang(kode,nama,kategori,jumlah,pokok,jual)
VALUES('1010','DVD','Elektronik',220,4000000,4500000)");

if($insert)
{echo"Berhasil menyisipkan data pada tabel barang";}
else
{echo"Gagal penyisipan data";}
?>
</body>
</html>
