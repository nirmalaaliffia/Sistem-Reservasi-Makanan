<?php
				include("koneksi.php"); //agar connect ke database?>

<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">



		
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<ul class="main_menu">
							<li>
									<div class="logo">
											<a href="index.html">
												<img src="images/icons/logo.jpg" alt="IMG-LOGO" data-logofixed="images/icons/logo.jpg">
											</a>										
										</div>
							</li>
							<li>							
								<h2 >Arjes's Kitchen</h2>		
							</li>

						</ul>
					

				</div>
			</div>
		</div>
	</header>


	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/slidemenu01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Arjes's Kitchen
						</h2>
						
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/slidemenu02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Arjes's Kitchen
						</h2>
			
					</div>
				</div>

				

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>


	<!-- Menu detail -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
			<div class="container">
				<div class="row">
					<div class="col-md-6 p-t-45 p-b-30">
						<div class="wrap-text-welcome t-center">
							<span class="tit2 t-center">
								Arjes's Kitchen Restaurant
							</span>
	
							<h3 class="tit3 t-center m-b-35 m-t-5">
								Welcome
							</h3>
	
							<p class="t-center m-b-22 size3 m-l-r-auto">
								Untuk memilih pesanan TAKE AWAY silahkan klik di bawah ini ...
							</p>
	
							<a href="menutakeaway.php" class="txt4">
								PESAN MAKANAN TAKE AWAY
								<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
							</a>
						</div>
					</div>
	
					<div class="col-md-6 p-b-30">
						<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
							<img src="images/slide2.jpg" alt="IMG-OUR">
						</div>
					</div>
				</div>
			</div>
		</section>


		
	<!-- INTRO BEST SELLER FOOD -->
	<section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro01.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					BEST SELLER FOOD
				</h3>
			</div>
	
			<?php
$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="best_seller"';
$result = mysqli_query($connect, $sql);
while($menu_makanan = mysqli_fetch_object($result)){
?>	
			<div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="images/<?php echo $menu_makanan->gambar_makanan; ?>" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									<?php echo $menu_makanan->nama_makanan; ?>
									</h4></a>
	
									<p class="m-b-20">
											Pokat Kocok @arjeskitchen siap jadi teman makan siangmu gaesss ... Penasaran kan sama rasanya ???
									</p>
									
									<h4 style="text-align:center">
										 <a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
										 <a class="btn btn-primary" href="cart.php?id_menu= <?php echo $menu_makanan->id_menu; ?> &action=add">Rp 20.000,-</a></h4>

								</div>
							</div>
						</div>

						<?php 
} 
?>
	
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="images/menubest02.png" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
											Sizzling Rice Katsu Curry
									</h4></a>
	
									<p class="m-b-20">
											Yang bingung mau makan malam apa, <br>
											nih cobain menu barunya @arjeskitchen gaess ... <br>
											Banyak pilihan Sizzling Rice yang bisa kamu cobain 
									</p>
	
									<h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 25.000,-</a></h4>
								</div>
							</div>
						</div>
	
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="images/menubest03.png" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
											Nasi Geprek Blackpepper with Mozzarella
									</h4></a>
	
									<p class="m-b-20">
											Siang gini enaknya makan apa ya? <br>
											Nih cobain menu GEPREK SIRAM nya @arjeskitchen <br>
											 yang pedasnya bikin keringetan 😂 . <br>
											Yang ga suka pedas bisa request tanpa cabai 
									</p>
	
									<h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
								</div>
							</div>
						</div>
	
					</div>
				</div>
			</div>
		</section>

		
		
	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
			<div class="container">
				<div class="title-section-ourmenu t-center m-b-22">
					<span class="tit2 t-center">
						Discover
					</span>
	
					<h3 class="tit5 t-center m-t-2">
						Our Menu
					</h3>
				</div>
	
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-sm-6">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/bg-breakfast.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size4">
										Breakfast
									</a>
								</div>
							</div>
	
							<div class="col-sm-6">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/bg-lunch.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size5">
										Lunch
									</a>
								</div>
							</div>
	
							<div class="col-12">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/bg-dinner.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size6">
										Dinner
									</a>
								</div>
							</div>
						</div>
					</div>
	
					<div class="col-md-4">
						<div class="row">
							<div class="col-12">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/dbg-drink.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size7">
										Drink
									</a>
								</div>
							</div>
	
							<div class="col-12">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/bg-happyhour.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size8">
										Happy Hour
									</a>
								</div>
							</div>
	
							<div class="col-12">
								<!-- Item our menu -->
								<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
									<img src="images/bg-dessert.jpg" alt="IMG-MENU">
	
									<!-- Button2 -->
									<a href="#" class="btn2 flex-c-m txt5 ab-c-m size9">
										Dessert
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
	
			</div>
		</section>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
