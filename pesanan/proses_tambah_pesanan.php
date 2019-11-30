<?php
	include "../koneksi.php";

	$id_pesanan = $_POST['id_pesanan'];
	$menu = $_POST['menu'];
	$qty = $_POST['qty'];

	$query = mysqli_query($connect, "INSERT INTO list_pesanan values (NULL, '".$id_pesanan."', '".$menu."', '".$qty."')");
	header("location:buat_pesanan.php");
?>