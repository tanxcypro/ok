<?php 

require 'fungsi.php';

// ambil data di url
$id=$_GET["id"];


// query data sesuai id
$produk=query("SELECT * FROM produk WHERE id=$id")[0];



// mengecek tombol
if (isset($_POST["submit"])) {
	 
	if (ubah($_POST)>0) {
		echo "
		<script>
		alert('data berhasil diubah');
		document.location.href='index.php';
		</script>	
		";
	}else{
		echo "
		<script>
		alert('data gagal diubah');
		document.location.href='index.php';
		</script>	
		";
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah daftar produk</title>
</head>
<body>
	<h1>ubah daftar produk</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?=$produk["id"];?>">

		<ul>
			<li>
				<!-- required berfungsi membuat form jadi not null -->
				<label for="nama">nama produk:</label>
				<input type="text" name="nama" id="nama" required
				value="<?=$produk["nama_produk"];?>">
			</li>
			<li>
				<label for="keterangan">keterangan:</label>
				<input type="text" name="keterangan" id="keterangan" value="<?=$produk["keterangan"];?>">
			</li>
			<li>
				<label for="harga">harga:</label>
				<input type="text" name="harga" id="harga" value="<?=$produk["harga"];?>">
			</li>
			
			<li>
				<label for="jumlah">jumlah:</label>
				<input type="text" name="jumlah" id="jumlah"value="<?=$produk["jumlah"];?>">
			</li>
			<li>
				<button type="submit" name="submit">ubah</button>
			</li>
		</ul>
		
	</form>

</body>
</html>