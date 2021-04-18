<?php 
require 'fungsi.php';
// cek tombol submit
if (isset($_POST["submit"])) {
	 
	if(tambah($_POST)>0) {
		echo "
		<script>
		alert('data berhasil ditambah');
		document.location.href='index.php';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('data gagal ditambah');
		document.location.href='index.php';
		</script>	
		";
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah data produk</title>
</head>
<body>
	<h1>tambah data produk</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">nama produk:</label>
				<input type="text" name="nama"id="nama" required>
			</li>
			<li>
				<label for="keterangan">keterangan:</label>
				<input type="text" name="keterangan" id="keterangan">
			</li>
			<li>
				<label for="harga">harga:</label>
				<input type="text" name="harga" id="harga">
			</li>
			<li >
				<label for="jumlah">jumlah</label>
				<input type="text" name="jumlah" id="jumlah">
			</li>
			<li>
				<button type="submit"name="submit">tambah</button>
			</li>
		</ul>
	</form>
</body>
</html>