<?php  
	include 'header.php';
	include '../koneksi.php';

	$id_pesanan = $_GET['id_pesanan'];

	$sql = mysqli_query($connect, 
		"SELECT pesanan.*, list_pesanan.* FROM pesanan 
		inner join list_pesanan  
		on pesanan.id_pesanan = list_pesanan.id_pesanan 
		where list_pesanan.id_pesanan = '".$id_pesanan."'");
?>
	
	<div class="tab-content">

			<div class="tab tab-1">
				<center>
				<div class="form-group">
					<form action="input_pesanan.php" method="POST">
						<input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Guest">
						<br>
						<input type="number" class="form-control" id="exampleInputEmail1" name="meja" placeholder="Masukan meja"> 
						<br>
						<input type="submit" name="submit" value="Next" class="btn btn-primary">
					</form>
				</div>
				</center>
			</div>
</div>
<div class="tab-content">
			<div class="tab tab-list-pesanan">
				<center>
				<table class="table table-dark">
						<thead>
						<tr>
							<th>nama</th>
							<th>meja</th>
							<th>menu</th>
							<th>qty</th>
							<th>action</th>
						</tr>
						</thead>
					<?php 
					while ($rslt = mysqli_fetch_assoc($sql)) {
						?>
						<tbody>
						<tr>
							<td><?php echo $rslt['nama']; ?></td>
							<td><?php echo $rslt['meja']; ?></td>
							<td><?php echo $rslt['menu']; ?></td>
							<td><?php echo $rslt['qty']; ?></td>
							<td><?php echo '<a href="edit_pesanan.php?id_pesanan='.$rslt["id_list_pesanan"].'">Edit </a>'?></td>
							<!--<td><?php echo '<a href="tambah_pesanan.php?id_pesanan='.$rslt["id_pesanan"].'">Tambah pesanan</a>'?></td>-->
							<td><?php echo '<a href="hapus_pesanan.php?id_pesanan='.$rslt["id_list_pesanan"].'">Hapus </a>'?></td>
						</tr>
						</tbody>
							<?php
						}
					?>
					</table>
				</center>
			</div>
		</div>

	
<?php
	include 'footer.php'
?>