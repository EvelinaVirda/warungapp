<?php  
	include 'header.php';
	include '../koneksi.php';

	$id_list_pesanan = $_GET['id_pesanan'];
	$query = mysqli_query($connect, "SELECT * FROM list_pesanan where id_list_pesanan = '".$id_list_pesanan."'");
	$rslt = mysqli_fetch_array($query)

?>
<div class="content">
	<div class="produk">
		<div class="col-md-12">
			<form action="proses_edit_pesanan.php?id_list_pesanan=<?php echo $id_list_pesanan ?>" method="POST">
				<input class="form-control" type="text" name="qty" value="<?php echo $rslt['qty']; ?>"><br>
				<!--<input type="file" name="gambar">-->
				<input type="submit" class="btn btn-primary" name="submit" value="submit">
			</form>
		</div>
	</div>
</div>

<?php
	include 'footer.php'
?>