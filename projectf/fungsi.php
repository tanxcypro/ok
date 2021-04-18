<?php 
$conn=mysqli_connect("localhost","root","","fazztrack") ;

function query($query){
	global $conn;
	$result= mysqli_query($conn,$query);
	$rows=[];
	while($row=mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}return $rows;
}
function tambah($data){
	global $conn;
	// htmlspesialchars pengaman elemen html
	
	$nama=htmlspecialchars($data["nama"]);
	$keterangan=htmlspecialchars($data["keterangan"]);
	$harga=htmlspecialchars($data["harga"]);
	$jumlah=htmlspecialchars($data["jumlah"]);
	
	$query="INSERT INTO produk 
	VALUES('','$nama','$keterangan','$harga','$jumlah')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}function hapus($id){

	global $conn;
	mysqli_query($conn,"DELETE FROM produk WHERE id=$id");
	return mysqli_affected_rows($conn);
}function ubah($data){
	global $conn;
	// htmlspesialchars pengaman elemen html
	$id=$data["id"];
	$nama= htmlspecialchars($data["nama"]);
	$keterangan= htmlspecialchars($data["keterangan"]);
	$harga= htmlspecialchars($data["harga"]);
	$jumlah= htmlspecialchars($data["jumlah"]);
	

	$query="UPDATE produk SET

	nama_produk='$nama',
	keterangan='$keterangan',
	harga='$harga',
	jumlah='$jumlah'
	

	WHERE id=$id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

 ?>