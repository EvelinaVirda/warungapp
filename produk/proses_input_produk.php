<?php
 
include '../koneksi.php';
 
$nama = $_POST['nama'];
$harga = $_POST['harga'];
 
$sql = "INSERT into master_prdk values (NULL, '".$nama."', '".$harga."')";
 
$query = mysqli_query($connect, $sql);
 
header('location:produk.php');

?>