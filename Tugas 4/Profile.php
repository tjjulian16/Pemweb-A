<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
    <link rel="icon" href="Assets/logo.png" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<section id="navigation-bar">
				<nav class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle nav-sideButton" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							</button>
							<a href="index_after_login.html"><img src="Assets/logo.png" class="nav-logo"></a>
						</div>
						<div class="collapse navbar-collapse nav-content" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Fakultas<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="kategori_produk.html"><img src="Assets/logo_ub.png" alt="" class="img-fakultas"> FILKOM</a></li>
										<li><a href="#"><img src="Assets/logo_ub.png" alt="" class="img-fakultas"> FTP</a></li>
										<li><a href="#"><img src="Assets/logo_ub.png" alt="" class="img-fakultas"> FT</a></li>
										<li><a href="#"><img src="Assets/logo_ub.png" alt="" class="img-fakultas"> FK</a></li>
									</ul>
								</li>
								<li class="nav-menu"><a href="About_us.html">Tentang Kami</a></li>
							</ul>
							<form class="navbar-form navbar-left">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<div class="input-group-btn">
												<a href="pencarian_produk.html" class="btn btn-default" type="submit">
													<i class="glyphicon glyphicon-search"></i>
												</a>
											</div>
										</div>
								</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hai,
										<?php
										$username = $_REQUEST['username'];
										echo $username;
										?>
				<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="Cart.html"><span class="fa fa-shopping-cart"></span> Keranjang</a></li>
										<li><a href="index.html"><span class="fa fa-sign-out "></span> Keluar</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				</section>

				<section id="Profile">
					<?php
    				$tmp  = $_FILES['upload']['tmp_name'];
    				move_uploaded_file($tmp, "Assets/profile_picture.jpg");
					?>
					<div class="row" style="margin: 2%;">
						<p style="font-size: 25px; margin: 1% 0 0 2%">Selamat Datang <span style="color: #12A8BB;">
							<?php
							$nama = $_REQUEST['nama'];
							echo $nama;
							?>
						</span></p>
					<div class="col-md-11" style="border:1px solid #12A8BB; margin: 1% 2% 1% 2%;">
		<div class="row">
		<img src="Assets/profile_picture.jpg" style="width: 20%;border-radius: 25%; padding: 2%; float: left;">
		<div class="col-md-6" style="padding-left: 5%;">
			<h2 style="color: #12A8BB;">
				<?php
				$univ = $_REQUEST['college'];
				echo $univ;
				?>
			</h2>
			<h3 > 
				<?php
				$email = $_REQUEST['email'];
				echo $email;
				?></h3>
			<h3> <?php
				$notel = $_REQUEST['notel-user'];
				echo $notel;
				?></h3>
			<h4>Jenis Kelamin: 
				<?php
				$kelamin = $_REQUEST['optradio'];
				echo $kelamin;
				?></h4>
			
		</div>
		<div class="col-md-2">
			<a href="#"><button type="button" class="btn btn-lg btn-profile" style="padding: 5% 8%;">Cari Perlengkapan Kuliah mu!</button></a>
			<a href="#"><button type="button" class="btn btn-lg btn-profile" style="padding: 5% 18%;">Mulai Berjualan Sekarang!</button></a>

	</div>
</div>
<div class="row">
	<div class="col-md-2" style="float: left;  margin-left: 3%;">
		<p style="font-family: 'Dancing Script', cursive;">
			<?php
				$desc = $_REQUEST['desc'];
				echo $desc;
				?></p>
		<p style="font-family: 'Dancing Script', cursive;">
			<?php
				$jenis_user = $_REQUEST['Jenis_User'];
				echo "'".$jenis_user."'";
				?>
		</p>		
	</div>
	</div>
</div>
</div>
</section>
<section id="contact-us">
		<div class="container">
			<div class="row">
				<h2>Kontak Kami</h2>
				<form action="" class="col-lg-8 col md-8 col-sm-12 col-xs-12">
				<h3>Berikan Komentar Anda</h3>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Nomor Telepon:</label>
					<input type="text" class="form-control" id="pwd">
				</div>
				<div class="form-group">
					<label for="pwd">Komentar:</label>
					<textarea class="form-control" id="comment"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Kirim</button>
			</form>
			<div class="col-lg-4 col md-4 col-sm-12 col-xs-12 contact-getin-touch">
				<h3>Temukan Kami</h3>
				<h5><span class="fa fa-home startup-address"></span> Jln. D.I. Panjaitan, Lowokwaru, Malang</h5>
				<h5><span class="fa fa-phone-square startup-phone"></span> +62 822-4247-7726</h5>
				
				<div class="contact-social-media">
					<h3>Media Sosial Kami</h3>
					<span class="fa fa-facebook-official socmed-icon"></span><span class="fa fa-twitter-square socmed-icon"></span><span class="fa fa-instagram socmed-icon"></span>
				</div>
				
			</div>
			</div> 
	</div>
	</section>
</body>
</html>