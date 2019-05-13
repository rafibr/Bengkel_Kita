<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Bengkel Kita</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> Nomor HP</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> TI FT Unlam</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Banjarmasin</a></li>
					</ul>
					<ul class="header-links pull-right">
						
						<li>

						<?php
					if(isset($_SESSION["active"])==true){
						echo '<a href="#"><i class="fa fa-user-o"></i>';
						echo $_SESSION["active"];
						echo "&nbsp";
						echo "&nbsp";
						echo "&nbsp";
						echo "&nbsp";
						echo '<a href = "proseslogout.php">Logout</a>';
					}else{
						echo '<a href="login.html"><i class="fa fa-user-o"></i>';
						echo "Login User";
						echo "&nbsp";
						echo "&nbsp";
						echo "&nbsp";
						echo "&nbsp";
						echo '<a href="loginbengkel.html"><i class="fa fa-user-o"></i>';
						echo "Login Bengkel";
					}?>
						</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="" alt="" height= 50px;
									width= 50px;>
								</a>
							</div>
						</div>
						<!-- /LOGO -->


								<!-- /Cart -->

								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->



		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Profil Bengkel</h2>
							<div class="section-nav">
							
							</div>
						</div>
					</div>
					<!-- /section title -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5">
						<div id="product-main-img">		
								<img src="./img/bengkel1.jpg" alt="">
							
						</div>
					</div>

					<div class="col-md-5">
							<div class="product-details">
								<h2 class="product-name">Nama Bengkel</h2>			
								<p>ABC BENGKEL</p>
								<h2 class="product-name">Alamat Bengkel</h2>			
								<p>Jl. Pahlawan</p>
								<h2 class="product-name">Nomor Hp</h2>			
								<p>08 0 lalu</p>
								</br>
								<p class="product-name">Daftar Antrian : ___</p>
								</br>
								<button> <a href="#"></a> Buka Toko</button>
								</br>
								<a href="daftarantrian.php">Lihat Daftar Antrian Bengkel</a>
							</div>
						</div>	

						

				</div>
			</div>
		</div>

		
					<!-- /Product main img -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



		<!-- FOOTER -->
		<footer id="footer" >
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Bengkel Bengkelan</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Banjarmasin</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>Nomor HP</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>TI FT ULM</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>

								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="profilbengkel.html">My Account</a></li>
									<li><a href="daftarantrian.html">Daftar Antrian</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with TI FT ULM</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
