<?php 
require 'fungsi.php';
$produk=query("SELECT *FROM  produk");
// ambil data (fetch) berdasarkan tipe array:
// 1.my sqli_fetch_row/ mengembalikan array numerik
// 2."			"_assoc/mengembalikan array nama
// 3." 			"_array/mengembalikan array numerik dan asosiatif
// 4."			"_object/ tidak mengembalikan array numerik dan asosiatif
  // contoh array object mysqli_fetch_object($result->produk);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
	<h1>daftar produk</h1>
	<a href="tambah.php">tambah produk</a>
	<form>
		<table border="1" cellpadding="10" cellspacing="0">
		<tr>
		<th>no</th>
		<th>aksi</th>
		<th>nama produk</th>
		<th>keterangan</th>
		<th>harga</th>
		<th>jumlah</th>
	</tr>
	<?php $i=1?>
	<?php foreach ($produk as $row ):?>
		<tr>
			<td><?=$i; ?></td>
			<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
			</td>
			<td><?=$row["nama_produk"]  ?></td>
			<td><?=$row["keterangan"] ?></td>
			<td><?=$row["harga"] ?></td>
			<td><?=$row["jumlah"] ?></td>
		</tr>
	</form>
	<?php $i++; ?>
<?php endforeach; ?>

</body>
</html>

		