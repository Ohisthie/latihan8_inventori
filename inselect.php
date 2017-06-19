<html>
<body>
<table border="1">
<tr bgcolor="#CC0099">
	<td>Kode</td>
	<td>Nama</td>
	<td>Kategori</td>
	<td>Jumlah</td>
	<td>Pokok</td>
	<td>Jual</td>
</tr>
<?php
include_once("inkoneksi.php");
$selectview=mysql_query("select Kode,nama,kategori,Jumlah,Pokok,Jual from barang order by kode,nama asc");
while($data=mysql_fetch_array($selectview))
{ echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	<td>$data[4]</td>
	<td>$data[5]</td>
</tr>";
}
?>
</table>
</body>
</html>
