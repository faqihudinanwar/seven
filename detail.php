<?php
	include('login.php');
	if(!isset($_SESSION['login_user'])){
		header("location:home.php");
	}
?>

<?php require_once("koneksi.php");
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
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
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
				<h2><i class="ico-usd ico-white"></i>Shopping Box</h2>
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
            <div class="title"><h3>Shopping Box Detail</h3></div>
			<table class="table table-hover table-condensed">
			<tr>
				<th><center>No</center></th>
				<th><center>Item Code</center></th>
				<th><center>Item Name</center></th>
				<th><center>Total Item</center></th>
				<th><center>Unit Price</center></th>
				<th><center>Total Price</center></th>
				<th><center>Option</center></th>
			</tr>
				<?php
					//MENAMPILKAN DETAIL KERANJANG BELANJA//			
					$total = 0;
					//mysql_select_db($database_conn, $conn);
					if (isset($_SESSION['items'])) {
						foreach ($_SESSION['items'] as $key => $val) {
							$query = mysqli_query($koneksi, "select * from barang where br_id = '$key'");
							$data = mysqli_fetch_array($query);
							$jumlah_harga = $data['harga'] * $val;
							$total += $jumlah_harga;
							$no = 1;
				?>
			<tr>
				<td><center><?php echo $no++; ?></center></td>
				<td><center><?php echo $data['br_id']; ?></center></td>
				<td><center><?php echo $data['br_nm']; ?></center></td>							
				<td><center><?php echo number_format($val); ?></center></td>
				<td><center><?php echo number_format($data['harga']); ?></center></td>
				<td><center><?php echo number_format($jumlah_harga); ?></center></td>
				<td><center><a href="cart.php?act=plus&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-success">Add</a> <a href="cart.php?act=min&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-warning">Subtract</a> <a href="cart.php?act=del&amp;barang_id=<?php echo $key; ?>&amp;ref=detail.php" class="btn btn-xs btn-danger">Delete</a></center></td>
			</tr>	
				<?php		
					}
				}?>  
				<?php
					if($total == 0){
						echo '<tr><td colspan="5" align="center">Your shopping cart is empty !</td></tr></table>';
						echo '<p><div align="right">
									<a href="index.php" class="btn btn-info btn-lg">&laquo; Continue Shopping</a>
								</div></p>';
					} else {
						echo '
							<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
							<p><div align="right">
								<a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
								<a href="checkout.php?total='.$total.'&item='.$val.'" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a>
							</div></p>';
					}
				?>
			</table>
		
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