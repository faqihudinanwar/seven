<?php
	ob_start();
	include('login.php');
	if(!isset($_SESSION['login_user'])){
		header("location:home.php");
	}
?>

<?php
	require_once("cart.php");
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
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script>
		function showUser(str) { 
			var inner = "kabupaten"; 
			  if (str=="") {
				document.getElementById(inner).innerHTML="";
				return;
			  }  
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				  document.getElementById(inner).innerHTML=xmlhttp.responseText;
				}
			  }
			  xmlhttp.open("GET","get_kabupaten.php?q="+str,true);
			  xmlhttp.send();
			}
	</script>
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
				<?php 
					if(isset($_SESSION['login'])){
						echo '<div class="span10">';
					}else{
						echo '<div class="span9">';
					}
				?>
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
				<h2><i class="ico-usd ico-white"></i>Checkout Shopping Box</h2>
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
				<div class="title"><h3>Form Checkout</h3></div>
				<div class="hero-unit">Please fill in the form below completely and correctly fit your idenditas!</div>
					<br>
					<form id="formku" action="" method="post">
					<?php
						if(isset($_SESSION['login'])){
							$id = $_SESSION['id_user'];
							$query = mysqli_query($koneksi, "SELECT nm_usr FROM pelanggan WHERE id_usr='$id'");
							$result = mysqli_fetch_array($query);
						}
						
						$error_alamat = $error_prov = $error_kab = $error_pos = "";
						$almt_usr = $prov = $kabupaten = $kd_pos = $tgl_update = $harga = $barang = ""; 
						if($koneksi->connect_errno){
							die ("could not connect to the database : <br/>". $koneksi->connect_error);
						}
							
						if (isset($_POST["submit"])){
							$almt_usr	= $_POST["almt_usr"];
							$kd_pos     = $_POST["kd_pos"];
							$tgl_update = gmdate("y-m-d h:m:s", time()+60*60*7);
							$harga      = abs((int)$_GET['total']);
							$barang		= abs((int)$_GET['item']);			
							
							$almt_usr = test_input($_POST['almt_usr']);
							if($almt_usr == ''){
								$error_almat = "Addres is required";
								$valid_alamat = FALSE;
								}else {
									$valid_alamat = TRUE;
								}
							
							$prov = test_input($_POST['provinsi']);
							if($prov == '' || $prov == 'none'){
								$error_prov = "Province is required";
								$valid_prov = FALSE;
							}else {
								$valid_prov = TRUE;
							}
									
							$kd_pos = test_input($_POST['kd_pos']);
							if ($kd_pos == ''){
								$error_pos = "Postal code is required";
								$valid_pos = FALSE;
							}elseif (!preg_match("/^[0-9]*$/",$kd_pos)) {
								$error_pos = "Only number allowed";
								$valid_pos = FALSE;
							}else{
								$valid_pos = TRUE;
							}
								
							if ($valid_alamat && $valid_prov && $valid_pos){
								$almt_usr 	= $koneksi->real_escape_string($almt_usr);
								$id_prov	= $koneksi->real_escape_string($prov);
								$id_kab 	= $_POST['kabupaten'];
								$kd_pos     = $koneksi->real_escape_string($kd_pos);
								
								$query1 = mysqli_query($koneksi, "SELECT tarif FROM tarif_pengiriman WHERE idkab_tujuan ='$id_kab'");
								$result1 = mysqli_fetch_array($query1);
								$biaya		= $result1['tarif'];
								$total		= $harga + $biaya;
								
								$query = "INSERT INTO transaksi (id_usr, tgl_transaksi, alamat_kirim, id_provinsi_kirim, id_kabupaten_kirim, kodepos_kirim, total_item, total_harga, biaya_kirim) VALUES ('$id','$tgl_update','$almt_usr','$id_prov','$id_kab','$kd_pos','$barang', '$total', '$biaya')";
								$result = $koneksi->query($query);
								if (!$result){
									die("could not query the database: <br />".$koneksi->error);
								}else{
									$koneksi->close();
									header("Location: totalbayar.php?total=$total");
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
						<input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
						<tr>
							<td width=180px;><label for="nm_usr">Name</label></td>
							<td><input name="nm_usr" type="text" class="required" maxlength="25" id="nm_usr" size="200" value="<?php if (isset($result['nm_usr'])){echo $result['nm_usr'];}?>" readonly/></td>
						</tr>
						<tr>
							<td><label for="almt_usr">Address</label></td>
							<td><input name="almt_usr" type="text" class="required" id="almt_usr" /></td>
						</tr>
						<tr>
							<td><label for="provinsi">Province</label></td>
							<td valign="top">
								<select name="provinsi" id="provinsi" required onChange="showUser(this.value)">
									<option value="none">Select Province</option>
									<?php
										$query = " SELECT * FROM provinsi";
										$result = $koneksi->query( $query);
										if (!$result){
										   die ("Could not query the database: <br />". $koneksi->error);
										}
										while ($row = $result->fetch_object()){
											echo '<option value='.$row->id_prov.'>'.$row->nm_prov.'</option>';
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><label for="kabupaten">District</label></td>
							<td valign="top">
								<select name="kabupaten" id="kabupaten"><select>
							</td>
						</tr>
						<tr>
							<td><label for="kp_pos">Postal Code</label></td>
							<td><input name="kd_pos" type="text" class="required number" minlength="5" maxlength="5" id="kd_pos" /></td>
						</tr>
						<tr>
							<td></td>
							<td>
								 <input type="submit" value="Save Data" name="submit" class="btn btn-sm btn-primary"/>&nbsp;
							</td>
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
<script src="js/jquery.validate.js"></script>
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