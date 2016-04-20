<?php require_once("cart.php"); ?>

<?php 
	ob_start();
	require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } 
?>

<?php 
	if(isset($_SESSION['login'])){
		$id = $_SESSION['id_user'];
		$query = mysqli_query($koneksi, "SELECT nm_usr FROM pelanggan WHERE id_usr='$id'");
		$result = mysqli_fetch_array($query);
	}
	$query = mysqli_query($koneksi, "SELECT MAX(id_transaksi), tgl_transaksi, total_harga FROM transaksi WHERE id_usr ='$id'");
	$result = mysqli_fetch_array($query);
	$tgl	= $result['tgl_transaksi'];
	$id_transaksi = $result['MAX(id_transaksi)'];
	$biaya	= abs((int)$_GET['total']);
	$query1 = "INSERT INTO status_transaksi (id_transaksi, id_user, status, tgl_update) VALUE ($id_transaksi, '$id', 'transfer pending', '$tgl')";
	$result1 = $koneksi->query($query1);
	if ((!$result) && ($result1)){
		die("could not query the database: <br />".$koneksi->error);
	}else{
		$koneksi->close();
		header("Location: konfirmasipembayaran.php?biaya=$biaya");
		return;
	}
?>
				