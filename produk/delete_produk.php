<?php
	include '../koneksi.php';

	$id_prdk = $_GET['id_prdk'];

	$query = mysqli_query($connect, "DELETE FROM master_prdk where id_prdk = '".$id_prdk."'");

	header("location:produk.php");
?>