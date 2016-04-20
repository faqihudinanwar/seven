<?php
	$db_host = "ap-cdbr-azure-southeast-b.cloudapp.net";
	$db_user = "b4770ae63db856";
	$db_pass = "ba4b7dd8";
	$db_name = "acsm_40b888bcf534a3f";

	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if(mysqli_connect_error()){
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
	}
?>
