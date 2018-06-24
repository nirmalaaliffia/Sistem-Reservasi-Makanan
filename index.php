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
<!--===============================================================================================-->
</head>
<body class="animsition">
<?php
session_start();
			require_once("koneksi.php"); //agar connect ke database
			if (@$_POST['simpan']) {
				$nama_customer = @$_POST['nama_customer'];
				$no_meja = @$_POST['no_meja'];

				$sql = "SELECT * FROM user WHERE nama_customer = '$nama_customer'"; //fungsi untuk memanggil isi tabel pada database yang sesuai dengan username yang diinput user
				$query = $connect->query($sql);
				if ($query->num_rows != 0) { //jika username sudah ada di database
					echo "<script>alert('Username Sudah Ada! Silahkan input nama yang lain')</script>";
					?>
						<script type="text/javascript">
							window.location.href="index.php" //halaman akan kembali lagi ke halaman registrasi
						</script>
					<?php
				}
				else { //jika username belum ada di database
					$data = "INSERT INTO user VALUES (NULL, '$nama_customer', '$no_meja')"; //fungsi untuk menyimpan data yang diinputkan oleh user ke database
					$simpan = $connect->query($data);
					if ($simpan) { //jika berhasil mendaftar
						echo "<script>alert('Berhasil Mendaftar!')</script>";
						?>
							<script type="text/javascript">
								window.location.href="menudinein.php" //jika berhasil registrasi maka akan masuk ke halaman login
							</script>
						<?php
					}
					else { //jika gagal mendaftar
						echo "<script>alert('Gagal Mendaftar!')</script>";
						?>
							<script type="text/javascript">
								window.location.href="index.php" //halaman akan kembali lagi ke halaman registrasi
							</script>
						<?php
					}
				}
			}
		?>


	<!-- Booking -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Login Customer
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>

					<form class="wrap-form-booking" action="" method="post">
						<div class="row">
								<!-- Name -->
								<span class="txt9">
									Nama
								</span>
								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="nama_customer" placeholder="Nama anda">
								</div>

								<!--No meja-->
								<span class="txt9">
									No Meja
								</span>
								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="no_meja" placeholder="No Meja Anda">
								</div>
						</div>

							<div class="col-md-6">
								
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4"  value="Daftar" name="simpan">Book Table
								
							</button>
							
							
								
						</div>

					</form>
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
