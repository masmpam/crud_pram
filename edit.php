<?php

require 'config.php';

if(!isset($_GET['id'])){
	header('Location: index.php');
}
$id = (int) $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM mahasiswa where id = '$id';");

$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-5">
					<div class="card-body">
						<h2>Edit Data Mahasiswa</h2>
						<a href="index.php" class="btn btn-success mb-3">Kembali</a>
						<form method="POST" action="update.php">
							<input type="hidden" name="id" value="<?= $data['id']; ?>">
							<div class="form-group">
								<label>NIM</label>
								<input required type="text" class="form-control" name="nim" value="<?= $data['nim'];?>">
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input required type="text" class="form-control" name="nama" value="<?= $data['nama'];?>">
							</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input required type="text" class="form-control" name="tempat_lahir" value="<?= $data['tempat_lahir'];?>">
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input required type="date" class="form-control" name="tanggal_lahir" value="<?= $data['tanggal_lahir'];?>">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>