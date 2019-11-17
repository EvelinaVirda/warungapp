<?php  
	include 'header.php';
	include '../koneksi.php';

	$id = $_GET['id_prdk'];
	$query = mysqli_query($connect, "SELECT * FROM master_prdk where id_prdk = '".$id."'");
	$rslt = mysqli_fetch_array($query)

?>
<div class="content">
	<div class="produk">
		<div class="col-md-12">
			<form action="proses_edit_produk.php?id_prdk=<?php echo $id ?>" method="POST">
				<input class="form-control" type="text" name="nama" value="<?php echo $rslt['nama']; ?>"><br>
				<input class="form-control" type="text" name="harga" value="<?php echo $rslt['harga']; ?>"><br>
				<!--<input type="file" name="gambar">-->
				<input type="submit" class="btn btn-primary" name="submit" value="submit">
			</form>
		</div>
	</div>
</div>

<?php
	include 'footer.php'
?>