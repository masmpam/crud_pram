<?php
include_once("koneksi.php");

if(isset($_POST['update']))
{
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jabatan = $_POST['jabatan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
		
	$result = mysqli_query($mysqli, "UPDATE wali SET nama_siswa='$nama_siswa',jabatan='$jabatan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' WHERE nis=$nis");
	
	header("location: index.php");
}
?>
<?php

$nis = $_GET['nis'];
$result = mysqli_query($mysqli, "SELECT * FROM wali WHERE nis=$nis");
while($wali = mysqli_fetch_array($result))
{
	$nis = $wali['nis'];
	$nama_siswa = $wali['nama_siswa'];
	$jabatan = $wali['jabatan'];
	$jenis_kelamin = $wali['jenis_kelamin'];
	$alamat = $wali['alamat'];
}
?>

<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_marvind" method="post" action="ubah.php">
		<table border="0">
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis" value=<?php echo $nis;?>></td>
			</tr>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama_siswa" value=<?php echo $nama_siswa;?>></td>
			</tr>
			<tr>
				<td>Wali Siswa</td>
				<td><input type="text" name="jabatan" value=<?php echo $jabatan;?>></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat" value=<?php echo $Alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="nis" value=<?php echo $_GET['nis'];?>></td>
				<td><input type="submit" name="update" value="ubah"></td>
			</tr>
		</table>
	</form>
</body>
</html>
			