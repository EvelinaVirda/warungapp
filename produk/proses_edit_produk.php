<?php
	include '../koneksi.php';

	$id = $_GET ['id_prdk'];
	
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];

	$sql = mysqli_query($connect, "update master_prdk set nama = '".$nama."', harga= '".$harga."' where id_prdk = '".$id."'");

	header("location:produk.php");

?>