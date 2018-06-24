		<?php
				require_once("koneksi.php"); //agar connect ke database	?>
				<?
					    function getgambar(){
							$sql='SELECT * FROM menu_makanan WHERE 1';
							$query = mysqli_query($GLOBALS['conn'], $sql);
							if (!$query) {
								die ('SQL Error: ' . mysqli_error($conn));
						  }

						  $data_array = array();
						  while($data = mysqli_fetch_assoc($query)){
							  $data_array[] = $data;
						  }
						 return json_encode($data_array);  
						} 
 				   	
					?>  
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
						<div class="col-md-4 p-t-30">
							<!-- Block1 -->
							<div class="blo1">
								<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
									<a href="#"><img src="images/menubest01.png" alt="IMG-INTRO"></a>
								</div>
	
								<div class="wrap-text-blo1 p-t-35">
									<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
										Pokat Kocok Chocolate
									</h4></a>
	
									<p class="m-b-20">
											Pokat Kocok @arjeskitchen siap jadi teman makan siangmu gaesss ... Penasaran kan sama rasanya ???
									</p>
									
									<h4 style="text-align:center">
										 <a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
										 <a class="btn btn-primary" href="#">Rp 20.000,-</a></h4>

								</div>
							</div>
						</div>
	
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
                    <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block2 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block1 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block3 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block4 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
							</p>
                            <h4 style="text-align:center">
											<a class="btn" href="#">Add to cart<i class="fa fa-shopping-cart"></i></a> 
											<a class="btn btn-primary" href="#">Rp 30.000,-</a></h4>
              
                           </div>    
						</div>
					</div>

                          <div class="col-md-4 p-t-30">
					<!-- Block5 -->
					<div class="blo1">
						<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
							<a href="blog-detail.html"><img src="images/blog-01.jpg" alt="IMG-INTRO"></a>
						</div>
						<div class="wrap-text-blo1 p-t-35">
							<a href="blog-detail.html"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
								Best Places for Wine
							</h4></a>

							<p class="m-b-20">
								Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.
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
