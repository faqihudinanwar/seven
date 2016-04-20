<?php
	session_start();
	//menghapus session
	if(session_destroy()){
		header("location:index.php");//kembali ke halaman login
	}
?>