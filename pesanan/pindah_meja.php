<?php  
	include 'header.php';
	include '../koneksi.php';

	$id_pesanan = $_GET['id_pesanan'];
	$query = mysqli_query($connect, "SELECT * FROM pesanan where id_pesanan = '".$id_pesanan."'");
	$rslt = mysqli_fetch_array($query)

?>
<div class="content">
	<div class="produk">
		<div class="col-md-12">
			<form action="proses_edit_meja.php?id_pesanan=<?php echo $id_pesanan ?>" method="POST">
				<input class="form-control" type="text" name="nama" value="<?php echo $rslt['nama']; ?>"><br>
				<input class="form-control" type="text" name="meja" value="<?php echo $rslt['meja']; ?>"><br>
				<!--<input type="file" name="gambar">-->
				<input type="submit" class="btn btn-primary" name="submit" value="submit">
			</form>
		</div>
	</div>
</div>

<?php
	include 'footer.php'
?>