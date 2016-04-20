<?php
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
	<meta name="author" content="Hakko Bio Richard"/>
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
									<?php if(!isset($_SESSION['login'])){echo '
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign In</a>
												<ul class="dropdown-menu" style="padding: 20px 10px 5px 10px; width:220px; height:150px">
													<li>
														<form action="login.php" method="POST" autocomplete>
																<input type="email" class="form-control" name="username" placeholder="Username" required autofocus>
																<input type="password" class="form-control" name="password" placeholder="Password" required>
															<div class="checkbox">
																<td><input type="checkbox" style="text-align:right"> Remember Me <td>
															</div>
															<table>
																<tr>
																	<td><button type="submit" class="btn btn-primary" name="submit">Log In</button></td>
																	<td> &nbsp <label><a href="daftar.php"> Sign Up! <a></label></td>
																</tr>
															</table>
														</form>
													</li>
												</ul>
										</li>'; }?>
									<?php if(isset($_SESSION['login'])){echo '<li><a href="logout.php">Log Out</a></li>'; }?>
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
				<h2><i class="ico-stats ico-white"></i>Womens</h2>
			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
      		<div class="row">
				<?php
					if(isset($_GET['id_sub'])){
						$id = $_GET['id_sub'];
						$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE idsub_kategori='$id' ORDER BY br_id DESC");
						if(mysqli_num_rows($sql) == 0){
							echo "Tidak ada produk!";
						}else{
							while($data = mysqli_fetch_assoc($sql)){
								echo 
								'<div class="span4">
									<div class="icons-box">
										<div class="title"><h3>'.$data['br_nm'].'</h3></div>
										<img src="'.$data['gambar'].'" />
										<div><h3>Rp.'.number_format($data['harga'],2,",",".").'</h3></div>
										<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd='.$data['br_id'].'" class="btn btn-lg btn-danger">Add &raquo;</a></div>
									</div>
								</div>';
							}
						}
					}else{//end if isset $_GET
				
				?>
					<?php
						$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_kategori='P02' ORDER BY br_id DESC");
						if(mysqli_num_rows($sql) == 0){
							echo "Tidak ada produk!";
						}else{
							while($data = mysqli_fetch_assoc($sql)){
					?>
								<div class="span4">
									<div class="icons-box">
										<div class="title"><h3><?php echo $data['br_nm']; ?></h3></div>
										<img src="<?php echo $data['gambar']; ?>" />
										<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
										<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['br_id'];?>" class="btn btn-lg btn-danger">Add &raquo;</a></div>
									</div>
								</div>
					<?php   
							}
						}	
					}
				?>
      		</div>					
		</div>				
	</div>	

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
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
<!-- end: Java Script -->

</body>
</html>	