<?php

require 'config.php';

if(isset($_POST['nim'])){

	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];

	$query = "UPDATE mahasiswa SET nim = '$nim' , nama='$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir' where id =  '$id';";
	$exe = mysqli_query($koneksi,$query);

	if(!$exe){
		echo mysqli_error($koneksi);
	}

}

header('Location:index.php');