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
	<meta name="description" content="Distro, Semarang, terlengkap, information, technology, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah, Semarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="informatika 2013"/>
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
			              			<li class="active"><a href="index.php">Home</a></li>
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
									<?php if(isset($_SESSION['login'])){echo '<li><a href="logout.php">Log Out</a></li>'; }?><li>
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
				<h2><i class="ico-stats ico-white"></i>Product Detail</h2>
			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">              
		<div class="title"><h3>Your Shopping Box</h3></div>
            <div class="hero-unit">
                <table class="table table-hover table-condensed">
                    <tr>
						<th><center>No</center></th>
						<th><center>Item</center></th>
						<th><center>Quantity</center></th>
						<th><center>Sub Total</center></th>
					</tr>
                    <?php
						//MENAMPILKAN DETAIL KERANJANG BELANJA//
						$total = 0;
						//mysql_select_db($database_conn, $conn);
						if (isset($_SESSION['items'])) {
							foreach ($_SESSION['items'] as $key => $val) {
								$query = mysqli_query($koneksi, "SELECT br_id, br_nm, harga FROM barang WHERE br_id = '$key'");
								$data = mysqli_fetch_array($query);

								$jumlah_harga = $data['harga'] * $val;
								$total += $jumlah_harga;
								$no = 1;
					?>
								<tr>
								<td><center><?php echo $no ++; ?></center></td>
								<td><center><?php echo $data['br_nm']; ?></center></td>
								<td><center><?php echo number_format($val); ?> Pcs</center></td>
								<td><center>Rp. <?php echo number_format($jumlah_harga); ?></center></td>
								</tr>
								
						<?php
							//mysql_free_result($query);			
							}
							//$total += $sub;
						}?>
                        <?php
					if($total == 0){ ?>
						<td colspan="4" align="center"><?php echo "Shopping Box is Empty!"; ?></td>
					<?php 
					} else { 
					?>					
						<td colspan="4" style="font-size: 18px;"><b><div class="pull-right">Total  : Rp. <?php echo number_format($total); ?>,- </div> </b></td>
					<?php	
						}
					?>
                </table> 
                <p><div align="right">
					<a href="detail.php" class="btn btn-success">&raquo Shopping Box Details&laquo</a>
				</div></p>
            </div>
      		<!-- start: Row -->
            
      		<div class="row">
            <div class="col-sm-6">
                <?php                  
					$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE br_id='$_GET[kd]'");
					$data  = mysqli_fetch_array($query);
				?>
        		<!--<div class="span4">-->
          			<!--<div class="icons-box">-->
                    <div class="hero-unit" style="margin-left: 20px;">
                    <table>
						<tr>
							<td width="200px" rowspan="7"><img src="<?php echo $data['gambar']; ?>" /></td>
                        </tr>
                        <tr>
							<td colspan="4"><div class="title"><h3><?php echo $data['br_nm']; ?></h3></div></td>
                        </tr>
                        <tr>
							<td></td>
							<td><h3>Price</h3></td>
							<td><h3>:</h3></td>
							<td><div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div></td>
                        </tr>
                        <!--<tr>
                        <td></td>
                        --<td><h3>Stock</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php if ($data['br_stok'] >= 1){
	                           echo '<strong style="color: blue;">In Stock</strong>';	
                                } else {
	                           echo '<strong style="color: red;">Out Of Stock</strong>';	
                                }; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Satuan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['br_satuan']; ?></h3></div></td>
                        </tr>-->
                        <tr>
							<td></td>
							<td style= "vertical-align: top;"><h3>Description</h3></td>
							<td style= "vertical-align: top;"><h3>:</h3></td>
							<td><div><h3><?php echo $data['deskripsi']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
						<td><div class="clear"> <a href="cart.php?act=add&amp;barang_id=<?php echo $data['br_id']; ?>&amp;ref=detailproduk.php?kd=<?php echo $data['br_id'];?>" class="btn btn-lg btn-danger">Buy &raquo;</a></div></td>
                        </tr>
     
                    </table>
                    </div>
      		</div>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
                </div>
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
	</div>
	<!-- end: Wrapper  -->			

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