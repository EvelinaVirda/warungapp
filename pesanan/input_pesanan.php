<?php

include '../koneksi.php';

	$nama = $_POST['nama'];

	$meja = $_POST['meja']; 

	$query = mysqli_query($connect, "INSERT INTO pesanan values (NULL,'".$nama."','".$meja."')");

	$s = mysqli_query($connect, "SELECT * FROM pesanan order by id_pesanan desc limit 1");
	$r = mysqli_fetch_array($s);

	header("location:pilih_menu.php?id_pesanan='".$r['id_pesanan']."'");
?>