<?php
session_start();
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['username']) || empty($_POST['password'])){
		$_error = "Sorry, Incorrect Username and Password";
	}
	else{
		//definisi variable
		$username=$_POST['username'];
		$password=$_POST['password'];
		//membuat koneksi ke database
		$koneksi=mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net", "b4770ae63db856", "ba4b7dd8");
		//mencegah SQL injection
		$username=stripslashes($username);
		$password=stripslashes($password);
		$username=mysql_real_escape_string($username);
		$password=mysql_real_escape_string($password);
		//pilih database
		$db = mysql_select_db("acsm_40b888bcf534a3f", $koneksi);
		//cek database
		$query=mysql_query("SELECT * FROM pelanggan 
							WHERE email_usr='$username'
							AND pas_usr='$password'"
							, $koneksi);
		$rows=mysql_num_rows($query);
		$result = mysql_fetch_array($query);
		if($rows == 1){
			$_SESSION['login_user']=$username; //session
			$_SESSION['login']="yes";
			$_SESSION['id_user']=$result['id_usr'];
				header("location:home.php");				
		}
		else{
			echo 'alert("Sorry, Incorrect Username and Password")';
				header("location:index.php");
		}
	mysql_close($koneksi);
	}
}
?>
