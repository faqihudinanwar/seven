<?php
	require_once("koneksi.php");
	$q = $_GET['q'];
	// Assign the query 
	$query = " SELECT * FROM kabupaten WHERE id_prov= '$q'";
		
	// Execute the query   
	$result = mysqli_query($koneksi,$query);
	if (!$result){
		die ("Could not query the database: <br />". mysqli_error($koneksi)); 
	} 
	echo "<select name='kabupaten' required>";
		// Fetch and display the results
		while ($row = $result->fetch_object()){
			echo '<option value="'.$row->id_kab.'">'.$row->nm_kab.'</option>'; 
		}
	echo "</select>"; 
	//close connection
	mysqli_close($koneksi);
?>