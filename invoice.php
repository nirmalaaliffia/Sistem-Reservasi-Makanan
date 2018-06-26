<?php
				include_once("koneksi.php"); //agar connect ke database?>

<!DOCTYPE html>
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
	<script type="text/javascript" src="js/bridge.js"></script>
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
					<div class="logo">
						<a href="index.html">
							<img src="images/icons/logo.jpg" alt="IMG-LOGO" data-logofixed="images/icons/logo.jpg">
						</a>
					</div>

				

				</div>
			</div>
		</div>
	</header>

    
	<!-- INTRO BEST SELLER FOOD -->
	<section class="section-intro">
			<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro01.jpg);">
				<span class="tit2 p-l-15 p-r-15">
					PEMBAYARAN ANDA
				</span>
	
				<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
					INVOICE PEMBAYARAN
				</h3>
			</div>
	</section>

<div class="content-intro bg-white p-t-77 p-b-133">
				<div class="container">
					<div class="row">
                    <table border="2px" align="center" margin="auto">          
                            <tr>
                                    <th width="150px">Hapus Pesanan</a> </th>
                                    <th width="300px">Nama Barang</th>
                                    <th width="200px">Jumlah Barang</th>
                                    <th width="200px">Harga Satuan</th>
                                    <th width="200px">Jumlah</th>
                            </tr>
                            
                        <!--- ISI PHP YG DIPESAN-->
                           <!--- ISI PHP YG DIPESAN-->
                           <?php
                        $sql='SELECT * FROM menu_makanan as m INNER JOIN daftar_pesanan as d ON m.id_menu=d.id_makanan AND id_user='.$_GET['userId'] ;
                        $result = mysqli_query($connect, $sql);
                        while($menu_makanan = mysqli_fetch_object($result)){
                        ?>	
                      

                            <tr>
                                 <td><a href="invoice.php" onclick="return confirm('Are you sure?')">Hapus Pesanan</a>  </td>
                                <td> <?php echo $menu_makanan->nama_makanan; ?></td>
                                <td> <?php echo $menu_makanan->jumlah_pesanan; ?></td>
                                <td> <?php echo $menu_makanan->harga_makanan; ?></td>
                                <td> <?php echo $menu_makanan->harga_pesanan; ?></td>
                            </tr>
                                <?php 
                        }
                        ?>
                            
                            <tr>
                            <td colspan="4">Total Amount</td>                   
                                <td> </td>
                            </tr>

                            </table>
                           
                            <div style="margin-top:50px;" class="col-md-6">
								
                                <button style="float:left;margin-right:50px;"type="submit" class="btn3 flex-c-m size13 txt10 trans-1-4" name="lannjut">Lanjutkan Belanja                             
                                </button>

								<!-- SISTEM BACK LANJUTKAN -->
                         
                                <button type="submit" class="btn3 flex-c-m size13 txt8 trans-0-4"  value="Daftar" name="simpan"><a href="index.php" onclick="return confirm('Are you sure?')" >Selesai Pesan</a> 
                                
                                </button>                              
                                    
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
