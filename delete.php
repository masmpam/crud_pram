<?php

require 'config.php';

if(isset($_POST['id'])){

	$id = $_POST['id'];

	$query = "DELETE FROM mahasiswa where id = '$id'";
	$exe = mysqli_query($koneksi,$query);

	if(!$exe){
		echo mysqli_error($koneksi);
	}

}

header('Location:index.php');