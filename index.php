<?php
	include('login.php');
	if(isset($_SESSION['login_user'])){
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
	<meta name="description" content="Onlie, Semarang, information, technology"/>
	<meta name="keywords" content="Mens, Womens, Kids" />
	<meta name="author" content="Informatika"/>
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
				<div class="span9">
					
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
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Mens Category</h2>
				<p>We have a large collection of T-shirts, Jackets, Shirts, Polo Shirts trendy models, casual comfortable to wear every day is also updated with the development of fashion</p>
				<div class="da-img"><img src="img/parallax-slider/jaket.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Womens Category</h2>
				<p>We have a large collection of cardigans, dresses, T-shirts, jackets are sweet, trendy suitable for use in everyday situations are also updated with the development of fashion </p>
				<div class="da-img"><img src="img/parallax-slider/kaos.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Kids Category</h2>
				<p>We have a large collection of Hoodie, Jacket, Sleepsuit, Jumper is comfortable to wear baby suitable for use in everyday situations are also updated with the development of fashion</p>
				<div class="da-img"><img src="img/parallax-slider/kids.png" alt="image03" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
	
      		<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
      		<div class="hero-unit">
				<h3> About Us </h3>
        		<p>
					7 Clothing shopping online clothes reliable, fashionable, complete with the best quality and affordable prices in Semarang
				</p>
            </div>                    
      		<div class="title">
				<div class="hero-unit">
					<i style="padding: 90px;"><a href="man.php"><img src ="img/mens1.png" width="120px"/></a></i>
					<i style="padding: 90px;"><a href="woman.php"><img src ="img/womens1.png" width="120px"/></a></i>
					<i style="padding: 90px;"><a href="kids.php"><img src ="img/kids1.png" width="120px"/></a></i>
				</div>
			</div>
      		<div class="row">
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">
					<!-- start: Icon Box Start -->
					<div class="span6" style="font-size : 16px">
						<div class="icons-box-vert">
							<i><img src ="img/ceklis.jpg" width="120px" style="position: absolute"/></i>
							<!--<i class="ico-ok ico-color circle-color big"></i>-->
							<div class="icons-box-vert-info">
								<h3>Easy Shopping</h3>
								<p>7 Clothing provide customer convenience in shopping for clothes online with the best quality and affordable prices simply by ordering our product through your favorite gadget, shopping in 7Clothing be practical and easy.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span6" style="font-size : 16px">
						<div class="icons-box-vert">
							<i><img src ="img/trolley.png" width="120px" style="position: absolute"/></i>
							<!--<i class="ico-cup  ico-white circle-color-full big-color"></i>-->
							<div class="icons-box-vert-info">
								<h3>How To Shopping</h3>
								<p> 1. Login first. If not, register yourself </p>
								<p> 2. Choose your favorite products conform Category menu .Click "Buy" to purchase products </p>
								<p> 3. Select menu Shopping. Recheck the products you ordered. When you are finished click "continue shopping" </p>
								<p> 4. Select Shipping Method. Products can be shipped to the address Anda.Isi Information Delivery and Billing Information are complete and click "check out" </p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
		</div>
		<!--end: Container-->
	
	</div>
	<!-- end: Wrapper  -->			
	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Photo Stream -->
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
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>