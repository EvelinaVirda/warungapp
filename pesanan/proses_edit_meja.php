<?php
	include "../koneksi.php";

	$id_pesanan = $_GET['id_pesanan'];
	$nama = $_POST['nama'];
	$meja = $_POST['meja'];
	
	$s = mysqli_query($connect, "UPDATE pesanan SET nama = '".$nama."', meja = '".$meja."' WHERE id_pesanan = '".$id_pesanan."'");

	header("location:buat_pesanan.php");

?>