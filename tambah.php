<!DOCTYPE html>
<html>
<head>
	<title>Add Users</title>
</head>
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	
	<form action="tambah.php" method="post" name="form1">
		<table width="25%" bprder="0">
		<tr>
			<td>NIS</td>
			<td><input type="text" name="nis" placeholder="Masukkan NIS"></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><input type="text" name="nama_siswa" placeholder="Masukkan Nama Siswa"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><input type="text" name="jabatan" placeholder="Masukkan Jabatan"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Tambah"></td>
		</tr>
	</table>
</form>

<?php

	if(isset($_POST['Submit'])) {
		$nis = $_POST['nis'];
		$nama_siswa = $_POST['nama_siswa'];
		$jabatan = $_POST['jabatan'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];

	include_once("koneksi.php");

	$result = mysqli_query($mysqli, "INSERT INTO wali(nis,nama_siswa,jabatan,jenis_kelamin,alamat)
	VALUES('$nis','$nama_siswa','$jabatan','$jenis_kelamin','$alamat')");

	echo "User added successfully. <a href='index.php'>View Users</a>";
	}
?>
</body>
</html>
			
			