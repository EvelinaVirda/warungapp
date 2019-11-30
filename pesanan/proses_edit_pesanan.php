<?php
	include '../koneksi.php';

	$id_list_pesanan = $_GET['id_list_pesanan'];

	$qty = $_POST['qty'];

	$menu = $_POST['menu'];

	$s = mysqli_query($connect, "UPDATE list_pesanan SET qty = '".$qty."', menu = '".$menu."' WHERE id_list_pesanan = '".$id_list_pesanan."'");

	$ss = mysqli_query($connect, 
		"SELECT * FROM pesanan inner join list_pesanan 
		on pesanan.id_pesanan = list_pesanan.id_pesanan
		");

	$r = mysqli_fetch_array($result);

	header("location:buat_pesanan.php");
?>