<?php  
	include 'header.php';

	include '../koneksi.php';

	$s = mysqli_query($connect, "SELECT * FROM pesanan");
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
							<th>action</th>
						</tr>
						</thead>
					<?php 
						while ($r = mysqli_fetch_array($s)) {
							?>
							<tbody>
							<tr>
								<td><?php echo $r['nama']; ?></td>
								<td><?php echo $r['meja']; ?></td>
								<td><?php echo '<a href="list_pesanan.php?id_pesanan='.$r["id_pesanan"].'">Detail</a>'?></td>
								<td><?php echo '<a href="pindah_meja.php?id_pesanan='.$r["id_pesanan"].'">Pindah meja</a>'?></td>
								<td><?php echo '<a href="hapus_meja.php?id_pesanan='.$r["id_pesanan"].'">hapus</a>'?></td>
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