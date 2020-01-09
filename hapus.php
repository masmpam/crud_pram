<?php
include_once("koneksi.php");

$nis = $_GET['nis'];

$result = mysqli_query($mysqli, "DELETE FROM wali WHERE nis=$nis");

header("location:index.php");
?>