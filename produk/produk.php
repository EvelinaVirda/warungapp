<?php  
	include 'header.php';
	include '../koneksi.php';
?>
	
	<div class="tab-content">

			<div class="tab tab-1">
				<div class="produk">
					<center>
						<div class="form-group">
							<form action="proses_input_produk.php" method="POST">
								<input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="nama produk">
								<br>
								<input type="text" class="form-control" id="exampleInputEmail1" name="harga" placeholder="harga produk"> 
								<br>
								<!--<input type="file" name="gambar">-->
								<input type="submit" name="submit" value="input produk" class="btn btn-primary">
							</form>
						</div>
					<table class="table table-dark">
						<thead>
						<tr>
							<th>nama</th>
							<th>harga</th>
							<th>action</th>
						</tr>
						</thead>
					<?php 
						$sql = mysqli_query($connect,"SELECT * FROM master_prdk");

						while ($rslt = mysqli_fetch_array($sql)) {
							?>
							<tbody>
							<tr>
								<td><?php echo $rslt['nama']; ?></td>
								<td><?php echo $rslt['harga']; ?></td>
								<td><?php echo '<a href="delete_produk.php?id_prdk='.$rslt["id_prdk"].'">Delete</a> '?></td>
								<td><?php echo '<a href="edit_produk.php?id_prdk='.$rslt["id_prdk"].'">Edit</a> '?></td>
							</tr>
							</tbody>
							<?php
						}
					?>
					</table>
					</center>
				</div>
				
			</div>
		</div>

	
<?php
	include 'footer.php'
?>