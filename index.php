<html>
<head>
	<title>ANGGOTA OSIS</title>
	
</head>
<body>
	<div class="judul">		
		           <h1>ANGGOTA OSIS</h1>
				   <h2>SMK N 1 BLORA</h2>
		           <h3>Masa Bakti Tahun 2019/2020</h3>
	</div>
</body>

<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM wali ORDER BY nis asc");
?>
<html>
<head>
	<title>Homepage</title>
</head>

<body>
<a href="tambah.php">Add New User</a><br/><br/>

	<table border=1>
	
	<tr>
		<th>NIS</th> <th>Nama Siswa</th> <th>Jabatan</th> <th>Jenis Kelamin</th> <th>Alamat</th> 
		</tr>
		<?php
		while($wali = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$wali['nis']."</td>";
			echo "<td>".$wali['nama_siswa']."</td>";
			echo "<td>".$wali['jabatan']."</td>";
			echo "<td>".$wali['jenis_kelamin']."</td>";
			echo "<td>".$wali['alamat']."</td>";
			
			echo "<td><a href='ubah.php?nis=$wali[nis]'>Ubah</a> |
			<a href='hapus.php?nis=$wali[nis]'>Hapus</a></td></tr>";
			}
			?>
	</table>
</body>
</html>
	
			