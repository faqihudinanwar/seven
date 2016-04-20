<?php 
	ob_start();
	require_once("koneksi.php"); 
	if (!isset($_SESSION)) {
        session_start();
    }		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>7Clothing | Online Distro most complete and reliable in Semarang</title> 
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Semarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="7Clothing"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
	<!--start: Container -->
	<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
					<a class="brand" href="#"><img src="img/logo2.png" alt="Logo"></a>
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span10">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href="index.php">Home</a></li>
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<table>
												<div class="categories">
												<tr>
													<td>
														<div class="man">
															<h3><a href="man.php">Man</a></h3>
																<ul>
																<?php
																	$sql2 = mysqli_query($koneksi, "SELECT * FROM sub_kategori WHERE id_kategori='P01'");
																	
																	while($result = mysqli_fetch_array($sql2)){
																		echo '<a href="man.php?id_sub='.$result['idsub_kategori'].'">'.$result['nama_sub'].'<br></a>';
																	}
																?>
															</ul>
														</div>
													</td>
													<td>
														<div class="woman">
															<h3><a href="woman.php">Woman</a></h3>
															<ul>
																<?php
																	$sql2 = mysqli_query($koneksi, "SELECT * FROM sub_kategori WHERE id_kategori='P02'");
																	
																	while($result = mysqli_fetch_array($sql2)){
																		echo '<a href="woman.php?id_sub='.$result['idsub_kategori'].'">'.$result['nama_sub'].'<br></a>';
																	}
																?>
															</ul>
														</div>
													</td>
													<td>
														<div class="kid">
																<h3><a href="kids.php">Kids</a></h3>
																<ul>
																	<?php
																		$sql2 = mysqli_query($koneksi, "SELECT * FROM sub_kategori WHERE id_kategori='P03'");
																		
																		while($result = mysqli_fetch_array($sql2)){
																			echo '<a href="kids.php?id_sub='.$result['idsub_kategori'].'">'.$result['nama_sub'].'<br></a>';
																		}
																	?>
																</ul>
														</div>
													</td>
												</tr>
												</div>
											</table>
			                			</ul>
			              			</li>
                                    <?php if(isset($_SESSION['login'])){echo '<li><a href="detail.php">Shopping Box</a></li>'; }?>
									<?php if(isset($_SESSION['login'])){echo '<li><a href="check_status.php">Check Status</a></li>'; }?>
									<li><a href="logout.php">Log Out</a></li>
									<li>
										<div>
											<table>
												<tr>
													<?php
														if(isset($_SESSION['login'])){
															$id = $_SESSION['id_user'];
															$query = mysqli_query($koneksi, "SELECT nm_usr FROM pelanggan WHERE id_usr='$id'");
															$result = mysqli_fetch_array($query);
															echo '<td><img src ="gambar/men.png" width="48px" align="center"/></td>';
														} 														
														if (isset($result['nm_usr'])){echo '<td>'.$result['nm_usr'].'</td>';}
													?> 
												</tr>
											</table>
										</div>
									</li>
			                	</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">
				<h2><i class="ico-usd ico-white"></i>Payment Confirmation</h2>
			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">

			<!-- start: Table -->
            <div class="table-responsive">
				
				<div class="hero-unit">Please fill in the form below completely and correctly fit your idendity!</div>
				<form id="formku" action="" method="post">
					<?php
						$query = mysqli_query($koneksi, "SELECT id_transaksi, id_user FROM status_transaksi WHERE status ='transfer pending'");	
						$result = mysqli_fetch_array($query);
						$id = $result['id_transaksi'];
						$id_user = $result['id_user'];

						$query2 = mysqli_query($koneksi, "SELECT nm_usr FROM pelanggan WHERE id_usr ='$id_user'");	
						$result2 = mysqli_fetch_array($query2);
						$nama 	= $result2['nm_usr'];	
							
						$error_bank = $error_rek = "";
						$nama_bank = $rekening = $biaya = ""; 
						if($koneksi->connect_errno){
							die ("could not connect to the database : <br/>". $koneksi->connect_error);
						}
							
						if (isset($_POST["finish"])){
							$nama_bank		= $_POST["nama_bank"];							
							$rekening		= $_POST["no_rekening"];
							$tgl_transfer	= gmdate("y-m-d h:m:s", time()+60*60*7);	
							$biaya     		= abs((int)$_GET['biaya']);
							$nama_pengirim  = $result['nm_usr'];
							
							$nama_bank = test_input($_POST['nama_bank']);
							if($nama_bank == ''){
								$error_bank = "Bank is required";
								$valid_bank = FALSE;
								}else {
									$valid_bank = TRUE;
								}
							
									
							$rekening = test_input($_POST['no_rekening']);
							if ($rekening == ''){
								$error_rek = "Rekening is required";
								$valid_rek = FALSE;
							}elseif (!preg_match("/^[0-9]*$/",$rekening)) {
								$error_rek = "Only number allowed";
								$valid_rek = FALSE;
							}else{
								$valid_rek = TRUE;
							}
								
							if ($valid_bank && $valid_rek){
								$nama_bank	= $koneksi->real_escape_string($nama_bank);
								$rekening	= $koneksi->real_escape_string($rekening);
								$query2 = mysqli_query($koneksi, "SELECT nm_usr FROM pelanggan WHERE id_usr ='$id_user'");	
								$result2 = mysqli_fetch_array($query2);
								$nama 	= $result2['nm_usr'];
								
								$query = "INSERT INTO konfirmasi_pembayaran (id_transaksi, nama_pengirim, nama_bank, no_rekening, jumlah_transfer, tgl_transfer) VALUES ('$id', '$nama','$nama_bank','$rekening','$biaya','$tgl_transfer')";
								
								$query1 = "UPDATE status_transaksi SET status=' waiting for confirmation' WHERE id_transaksi='$id'";
								$result = $koneksi->query($query);
								$result1 = $koneksi->query($query1);
								if ((!$result)&&(!$result1)) {
									die("could not query the database: <br />".$koneksi->error);
								}else{
									$koneksi->close();
									header("Location: selesai.php");
									return;
								}
							}
						}
						function test_input($data) {
							$data = trim($data);
							$data = stripslashes($data);
							$data = htmlspecialchars($data);
							return $data;	
						}				
					?>
						<table class="table table-condensed">
						<tr>
							<td width=180px;><label for="nm_usr">Name</label></td>
							<td><input name="nm_usr" type="text" class="required" maxlength="25" id="nm_usr" size="200" value="<?php if (isset($result2['nm_usr'])){echo $result2['nm_usr'];}?>" readonly/></td>
						</tr>
						<tr>
							<td><label for="jumlah_transfer">Transfer Amount</label></td>
							<td><input name="jumlah_transfer" type="text" class="required number" minlength="12" id="jumlah_transfer" value="<?php echo abs((int)$_GET['biaya']);?>" readonly/></td>
						</tr>
						<tr>
							<td><label for="no_rekening">Account Number</label></td>
							<td><input name="no_rekening" type="text" class="required number" minlength="12" id="no_rekening" /></td>
						</tr>
						<tr>
							<td><label for="nama_bank">Bank</label></td>
							<td><select id="nama_bank" name="nama_bank" class="required">
								<option></option>
								<option value="Mandiri">Mandiri</option>
								<option value="BNI">BNI</option>
								<option value="CIMB">CIMB</option>
								<option value="BCA">BCA</option>
								<option value="Bank Jabar">Bank Jateng</option>
								<option value="Danamon">Danamon</option>
								<option value="BRI">BRI</option>
								<option value="Permata">Permata</option>
								</select>
							</td>
						</tr>
						<tr><td></td>
							<td><input type="submit" value="Pay" name="finish"  class="btn btn-sm btn-primary" style="width: 110px"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary" style="width: 75px">Cancel</a></td>
						</tr>
					</table>
				</form>
            </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
		<div class="container">
			
			<!-- start: Row -->
				<div class="span3" style="padding-left : 50px">
					<h3 align="center">Address</h3>
					Gondang Barat Street 4 No 16 Tembalang Semarang<br />
				</div>
				<!-- end: Photo Stream -->

				<div class="span3" style="padding-left : 400px">
				
					<!-- start: Follow Us -->
					<h3 align="center">Follow Us!</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="http://twitter.com"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="http://twitter.com"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="http://facebook.com"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="http://facebook.com"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->

	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
<!-- end: Java Script -->

</body>
</html>