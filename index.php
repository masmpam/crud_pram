<?php

require 'config.php';

$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Crud Mahasiswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-5">
					<div class="card-body">
						<h2>Data Mahasiswa</h2>
						<a href="tambah.php" class="btn btn-primary">Tambah</a>
						<table class="table table-striped table-hover mt-2">
							<thead>
								<tr>
									<td>NIM</td>
									<td>Nama</td>
									<td>Tempat Lahir</td>
									<td>Tanggal Lahir</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								<?php
									while( $row = mysqli_fetch_array($data)){
								?>
								<tr>
									<td><?= $row['nim']; ?></td>
									<td><?= $row['nama']; ?></td>
									<td><?= $row['tempat_lahir']; ?></td>
									<td><?= $row['tanggal_lahir']; ?></td>
									<td>
										<form method="POST" action="delete.php">
											<input type="hidden" name="id" value="<?= $row['id']; ?>">
											<button type="submit" class="btn btn-danger">Hapus</button>
										</form>
									</td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>