<!DOCTYPE html>
<html>
<head>
	<title>WarAPP</title>
	<meta charset="utf-8">
	<meta name="viewport" content ="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../bootstrap/js/jquery.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>

<div class="container-wrapper">

	<div class="tab-container">
		<a href="../index.php">Kembali</a>

		<input type="radio" name="tab-menu" class="tab-menu-radio" id="tab-menu1" checked />
		<label for="tab-menu1" class="tab-menu"><a href="buat_pesanan.php"><img src="../assets/pesanan.png" width="10%"></a> Buat Pesanan </label>
		
<?php  

	include '../koneksi.php';

	$id_pesanan = $_GET['id_pesanan'];

	$s = mysqli_query($connect, "SELECT * FROM master_prdk");

?>
	
	<div class="tab-content">
			<div class="tab tab-1">
				<center>
				<div class="form-group">
					<form action="input_pesanan_next.php" method="POST">
						<input type="text" name="id_pesanan" value=<?php echo $id_pesanan ?>>
						<div class="form-group">
							    <label for="exampleFormControlSelect1">Pilih Menu</label>
							    <select name= "menu" class="form-control" id="exampleFormControlSelect1">
						<?php
						 while ($result = mysqli_fetch_array($s)) {
						 	?>
							      <option><?php echo $result['nama']; ?></option>
						 	<?php
						 }
						?></select>
						  	</div>
						
						<input type="number" class="form-control" id="exampleInputEmail1" name="qty" placeholder="Kuantitas"> 
						<br>
						<input type="submit" name="submit" value="Next" class="btn btn-primary">
					</form>
				</div>
				</center>
			</div>
		</div>

	
<?php
	include 'footer.php'
?>