<?php

include '../koneksi.php';

	$id_pesanan = $_POST['id_pesanan'];

	$menu = $_POST['menu'];

	$qty = $_POST['qty']; 

	$query = mysqli_query($connect, "INSERT INTO list_pesanan values (NULL,'".$id_pesanan."','".$menu."','".$qty."')");

	$s = mysqli_query($connect, "SELECT * FROM pesanan order by id_pesanan desc limit 1");
	$r = mysqli_fetch_array($s);

	header("location:pilih_menu.php?id_pesanan='".$r['id_pesanan']."'");
?>