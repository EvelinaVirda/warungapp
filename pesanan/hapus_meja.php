<?php
	include '../koneksi.php';

	$id_pesanan = $_GET['id_pesanan'];

	$query = mysqli_query($connect, "DELETE FROM pesanan where id_pesanan = '".$id_pesanan."'");

	header("location:buat_pesanan.php");
?>