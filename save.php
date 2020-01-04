<?php

require 'config.php';

if(isset($_POST['nim'])){

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];

	$query = "INSERT INTO mahasiswa(nim,nama,tempat_lahir,tanggal_lahir) values('$nim','$nama','$tempat_lahir','$tanggal_lahir');";
	$exe = mysqli_query($koneksi,$query);

	if(!$exe){
		echo mysqli_error($koneksi);
	}

}

header('Location:index.php');