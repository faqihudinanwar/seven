<?php 
	require_once("koneksi.php");
	 if (!isset($_SESSION)) {
        session_start();
    } 
	$error_name = $error_email = $error_pas = $error_alamat = $error_prov = $error_kab = $error_pos = "";
	$nm_usr = $email_usr = $pas_usr = $almt_usr = $prov = $kd_pos = ""; 
	
	if($koneksi->connect_errno){
		die ("could not connect to the database : <br/>". $koneksi->connect_error);
	}
	
	if (isset($_POST["submit"])){
		$nm_usr		= $_POST["nm_usr"];
		$email_usr	= $_POST["email_usr"];
		$pas_usr	= $_POST["pas_usr"];
		$almt_usr	= $_POST["almt_usr"];
		$kd_pos     = $_POST["kd_pos"];
	
		$nm_usr = test_input($_POST['nm_usr']);
		if ($nm_usr == ''){
			$error_name = "Name is required";
			$valid_name = FALSE;
		}elseif (!preg_match("/^[a-zA-Z ,.():\/]*$/",$nm_usr)) {
		   $error_name = "Only letters, white space, and symbols ,.():\ allowed";
		   $valid_name = FALSE;
		}else{
			$valid_name = TRUE;
		}

		$email_usr = test_input($_POST['email_usr']);
		if($email_usr == ''){
			$error_email = "Email is required";
			$valid_email = FALSE;
		}elseif (!filter_var($email_usr, FILTER_VALIDATE_EMAIL)){
			$error_email = "Invalid email";
			$valid_email = FALSE;
		}else {
			$valid_email = TRUE;
		}
		
		$pas_usr = test_input($_POST['pas_usr']);
		if($pas_usr == ''){
			$error_pas = "Password is required";
			$valid_pas = FALSE;
		}else {
			$valid_pas = TRUE;
		}
	
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
		
		if ($valid_name && $valid_email && $valid_pas && $valid_alamat && $valid_prov && $valid_pos){
			$nm_usr   	= $koneksi->real_escape_string($nm_usr);
			$email_usr	= $koneksi->real_escape_string($email_usr);
			$pas_usr	= $koneksi->real_escape_string($pas_usr);
			$almt_usr 	= $koneksi->real_escape_string($almt_usr);
			$id_prov	= $koneksi->real_escape_string($prov);
			$id_kab 	= $_POST['kabupaten'];
			$kd_pos     = $koneksi->real_escape_string($kd_pos);
			
			$query = "INSERT INTO pelanggan (nm_usr, email_usr, pas_usr, almt_usr, id_prov, id_kab, kd_pos) VALUES ('$nm_usr', '$email_usr', '$pas_usr', '$almt_usr','$id_prov','$id_kab','$kd_pos')";
			$result = $koneksi->query($query);
			if (!$result){
				die("could not query the database: <br />".$koneksi->error);
			}else{
				$koneksi->close();
				header("location:daftar.php");	
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
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>7Clothing | Distro Online telengkap dan terpercaya di Semarang</title> 
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
	<style>
		.error {color: #FF0000;}
	</style>
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
			
		function checkPass(){
			//Store the password field objects into variables ...
			var pass1 = document.getElementById('pas_usr');
			var pass2 = document.getElementById('pas_usr2');
			//Store the Confimation Message Object ...
			var message = document.getElementById('confirmMessage');
			//Set the colors we will be using ...
			var goodColor = "#66cc66";
			var badColor = "#ff6666";
			//Compare the values in the password field 
			//and the confirmation field
			if(pass1.value == pass2.value){
				//The passwords match. 
				//Set the color to the good color and inform
				//the user that they have entered the correct password 
				pass2.style.backgroundColor = goodColor;
				message.style.color = goodColor;
				message.innerHTML = "Password Match!"
			}else{
				//The passwords do not match.
				//Set the color to the bad color and
				//notify the user.
				pass2.style.backgroundColor = badColor;
				message.style.color = badColor;
				message.innerHTML = "Password Do Not Match!"
			}
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

				<h2><i class="ico-stats ico-white"></i>Member Register</h2>
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
			<div class="title"><h3>Form Pendaftaran</h3></div>
			<form id="formku" method="post" class="form-login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table class="table table-condensed">
				<div id="loading" style="text-align: center"></div><br>
				<div class="form-group">
				<tr>
					<td width=180px;><label for="nm_usr">Name</label></td>
					<td width=180px;>
						<input type="text" id="nm_usr" name="nm_usr" class="form-control" class="required" minlength="6" size="200" autofocus value="<?php echo $nm_usr;?>">
					</td>
					<td valign="top"><span class="error">* <?php echo $error_name;?></span></td>
				</tr>
				<tr>
					<td><label for="email_usr">Email</label></td>
					<td>
						<input type="text" id="email_usr" name="email_usr" class="form-control" class="email required" value="<?php echo $email_usr;?>">
					</td>
					<td valign="top"><span class="error">* <?php echo $error_email;?></span></td>
				</tr>
				<tr>
					<td><label for="pas_usr">Password</label></td>
					<td width=180px;>
						<input type="password" id="pas_usr" name="pas_usr" class="form-control" class="required" minlength="6" value="<?php echo $pas_usr;?>">
					</td>
					<td valign="top"><span class="error">* <?php echo $error_pas;?></span></td>
				</tr>
				<tr>
					<td><label for="pas_usr2">Confirm Password</label></td>
					<td>
						<input type="password" id="pas_usr2" name="pas_usr2" class="form-control" class="required" minlength="6" onkeyup="checkPass(); return false;">
					<td><span id="confirmMessage" class="confirmMessage"></span></td>
					</td>
				</tr>
				<tr>
					<td><label for="almt_usr">Address</label></td>
					<td>
						<input name="almt_usr" type="text" class="required" id="almt_usr" value="<?php echo $almt_usr;?>">
					</td>
					<td valign="top"><span class="error">* <?php echo $error_alamat;?></span></td>
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
					<td valign="top"><span class="error">* <?php echo $error_prov;?></span></td>
				</tr>
				<tr>
					<td><label for="kabupaten">District</label></td>
					<td valign="top">
						<select name="kabupaten" id="kabupaten"><select>
					</td>
					<td valign="top"><span class="error">* <?php echo $error_kab;?></span></td>
				</tr>
				<tr>
					<td><label for="kd_pos">Postal Code</label></td>
					<td>
						<input name="kd_pos" type="text" class="required number" minlength="5" maxlength="5" id="kd_pos" value="<?php echo $kd_pos;?>">
					</td>
					<td valign="top"><span class="error">* <?php echo $error_pos;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Sign Up" class="btn btn-sm btn-primary" style="width: 220px" />
					</td>
				</tr>
				</div><br> 
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
<?php
	$koneksi->close();
?>
