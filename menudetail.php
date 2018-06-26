		<?php
				include_once("koneksi.php"); //agar connect ke database?>

			

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

                        <!--- ISI PHP YG DIPESAN-->
                           <!--- ISI PHP YG DIPESAN-->
                           <?php
                        $sql='SELECT pesan FROM note_data AS n, cashier as c WHERE n.tanggal=CURRENT_DATE AND n.idkasir=c.id_kasir' ;
                        $result = mysqli_query($connect, $sql);
                        while($note_data = mysqli_fetch_object($result)){
                        ?>	
							<td><h5 class="tit10 t-center m-b-35 m-t-5">"<?php echo $note_data->pesan; ?> "</h5></td>
                            
                                <?php 
                        }
                        ?>
                   
	
						</div>
					</div>
	
					<div class="col-md-6 p-b-30">
						<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
							<img src="images/slidemenu01.jpg" alt="IMG-OUR">
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
	
			<div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="bestseller"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                      <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

	
					</div>
				</div>
			</div>
		</section>

			<!-- BREAKFAST MENU -->
        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/breakfastdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					BREAKFAST
				</h3>
			</div>            
            </section>
			<section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="breakfast"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

		   </div>
		   </div>
		   </div> 
		   </section>

        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/lunchdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					LUNCH
				</h3>
			</div>
            </section>
<section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="lunch"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

		   </div>
		   </div>
		   </div> 
		   </section>


            
        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/dinnerdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					DINNER
				</h3>
			</div>
            </section>
			<section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="dinner"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

		   </div>
		   </div>
		   </div> 
		   </section>

		
        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/drinkdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					BEVERAGES
				</h3>
			</div>
            </section>

               <section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="bbeverages"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

		   </div>
		   </div>
		   </div> 
		   </section>

            
        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/dessertdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					DESSERT
				</h3>
			</div>
            </section>

               <section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="dessert"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

		   </div>
		   </div>
		   </div> 
		   </section>

            
        <section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/happyhourdetail.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					Discover
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					HAPPY HOUR
				</h3>
			</div>
            </section>

              <section>
            <div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
					<?php
					$sql='SELECT * FROM menu_makanan as m WHERE jenis_makanan="happyhour"';
					$result = mysqli_query($connect, $sql);
					while($menu_makanan = mysqli_fetch_object($result)){
					?>							
							

                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="menu_makanan/<?php echo $menu_makanan->gambar_makanan; ?>"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
							<?php echo $menu_makanan->nama_makanan; ?>
							</h4></a>

							<p class="m-b-20">
							<?php echo $menu_makanan->detail_makanan; ?>
							</p>
							<form action="bridge.php" method="GET">
							<?php 
								echo '<input type="hidden" name="metode" value="'.$_GET['metode'].'">';
								echo '<input type="hidden" name="userId" value="'.$_GET['userId'].'">';
								echo '<input type="hidden" name="idMakanan" value="'.$menu_makanan->id_menu.'">';
								echo '<input type="hidden" name="hargaMakanan" value="'.$menu_makanan->harga_makanan.'">';
								
							?>
							
							<input type="number" name="jumlah_pesanan" placeholder="Jumlah pesanan" value="">  
							<button type="submit" class="btn btn-primary"  value="Daftar">Add to cart Rp <?php echo $menu_makanan->harga_makanan; ?>,-<i class="fa fa-shopping-cart"></i></button>
							   
							</form>

                         
              
                           </div>    
						</div>
					</div>

					<?php
					}
					?>

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
