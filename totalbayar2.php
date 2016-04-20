<?php require_once("cart.php"); ?>

<?php 
	ob_start();
	require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } 
?>

<?php 
	$query1 = mysqli_query($koneksi, "SELECT id_transaksi FROM status_transaksi WHERE status ='transfer pending'");	
	$result1 = mysqli_fetch_array($query1);
	$id = $result1['id_transaksi'];

	$query2 = mysqli_query($koneksi, "SELECT total_harga FROM transaksi WHERE id_transaksi ='$id'");	
	$result2 = mysqli_fetch_array($query2);
	$biaya	= $result2['total_harga'];

	if (!$result2){
		die("could not query the database: <br />".$koneksi->error);
	}else{
		$koneksi->close();
		header("Location: konfirmasipembayaran2.php?biaya=$biaya");
		return;
	}
?>
				