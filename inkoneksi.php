<?php
$host='localhost';
$username='root';
$password='';
$koneksi=mysql_connect($host,$username,$password);
if($koneksi)
{echo"Inventoristi, Koneksi Server Anda Berhasil <br><br>";}
else
{echo"Inventoristi, Anda Gagal Koneksi Ke Server <br><br>";}
$database='Inventoristi';
$mydb=mysql_select_db($database,$koneksi);
if ($mydb)
{echo"Inventoristi, Anda berhasil memilih database <br><br>";}
else
{echo"Inventoristi, Anda Tidak Dapat memilih database <br><br>";}
?>
</b>
</body>
</html>
