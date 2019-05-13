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
						<li><a href="#"><i class="fa fa-envelope-o"></i> ti@unlam.ac.id </a></li>
						<li><a href="https://www.google.com/maps?ll=-3.296213,114.586948&z=14&t=m&hl=en-US&gl=ID&mapclient=embed&cid=16858777250148245398"><i class="fa fa-map-marker"></i> Banjarmasin</a></li>
					</ul>
					<ul class="header-links pull-right">
						
						<li>
					<?php
					if(isset($_SESSION["active"])==true){
						echo '<a href="profile.html"><i class="fa fa-user-o"></i>';
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

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Semua</option>
										<option value="1">BJM Timur</option>
										<option value="2">BJM Selatan</option>
										<option value="3">BJM Utara</option>
										<option value="4">BJM Tengah</option>
										<option value="5">BJM Barat</option>
									</select>
									<input class="input" placeholder="Cari di sini">
									<button class="search-btn">Cari</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-bell"></i>
										<span>Notifikasi</span>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/bengkel1.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">Saatnya ganti oli</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/bengkel1.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">Saatnya servis</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										
										
											<h3><a href="#">Liat  <i class="fa fa-arrow-circle-right"></i></a></h3>
										
									</div>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Status Antrian</span>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/bengkel1.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">Jumlah Antrian : </span>1</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/bengkel1.jpg" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">Jumlah Antrian :</span>3</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										
											<h3><a href="#">Liat  <i class="fa fa-arrow-circle-right"></i></a></h3>
										
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
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

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="store.php">Semua</a></li>
						<li><a href="store1.php">Banjarmasin tengah</a></li>
						<li><a href="store2.php">Banjarmasin timur</a></li>
						<li><a href="store3.php">Banjarmasin selatan</a></li>
						<li><a href="store4.php">Banjarmasin barat</a></li>
						<li><a href="store5.php">Banjarmasin utara</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/bengkel1.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Sedang<br>Promo</h3>
								<a href="#" class="cta-btn">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/bengkel1.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Favorit<br>Bengkel</h3>
								<a href="#" class="cta-btn">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/bengkel1.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Bengkel<br>Baru</h3>
								<a href="#" class="cta-btn">Lihat Sekarang <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Daftar bengkel</h3>
							<div class="section-nav">
							
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										
<?php
	
	include ("database.php");
	$sql = "SELECT * FROM bengkel";
	$statement = $pdo_conn->prepare("$sql");
	$statement->execute();
	$user = $statement->fetchAll();
	
	$no = 1;
	$sisa = 0;
	foreach($user as $bengkel){

		?>
		
				<!-- product -->
				<div class="product">
											<div class="product-img">
												<img src="./img/bengkel1.jpg" alt="">
												
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#"><?php echo $bengkel["NAMA_BENGKEL"]; ?></a></h3>
												
												<div class="product-btns">
			
													<button class="quick-view"><a href="product.php?id=<?php echo $bengkel['ID_BENGKEL']?>"><i class="fa fa-eye"><span class="tooltipp">Lihat Bengkel</i></a></button>
												</div>
											</div>
											<div class="add-to-cart">
													<button class="add-to-cart-btn"><a href="checkout.php"><i class="fa fa-shopping-cart"> Antri</i></a></button>
											</div>
										</div>
										<!-- /product -->

	<?php	
}
?>

										

										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
									
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
		<footer id="footer">
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

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Banjarmasin Timur</a></li>
									<li><a href="#">Banjarmasin Utara</a></li>
									<li><a href="#">Banjarmasin Selatan</a></li>
									<li><a href="#">Banjarmasin Barat</a></li>
									<li><a href="#">Banjarmasin Tengah</a></li>
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
									<li><a href="#">My Account</a></li>
									<li><a href="statusantrian.html">Status Antrian</a></li>
									<li><a href="#">Notifikasi</a></li>
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
