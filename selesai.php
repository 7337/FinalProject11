<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html>
		<head>
			<title>Everyday Like Sunday</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width-device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css"/>
			<link rel="stylesheet" type="text/css" href="css/style.css"/>
			<link rel="icon" href="logo.png" type="image/png" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
			<script type="text/javascript" src="js/jquery.isotope.js"></script>
			<script type="text/javascript" src="js/jquery.pagescroller.js"></script>
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			
		
	
			<style>
			.carousel-inner > .item > img,
			.carousel-inner > .item > a > img {
			margin: auto;
			}
			</style>
		</head>
		
		<body>
			<div id="mainnav">
				<div class="container-fluid">
			
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="pull-left" style="margin-top:0px">
							<img src="images/logo-header.png" style="img-responsive" width="230" alt="logo EVLS">
						</div>
					</div>
					<div class="col-md-9 col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
					<div class="navbar-collapse in" style="height: auto;">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="index.php">HOME</a></li>
							<li><a href="produk.php">PRODUCT</a></li>
							<li><a href="detail.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
							<li><a href="index.html">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			
				<!-- HOME -->

			<div class="section" id="home">
				<div class="row slideshow">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/evls.jpg" alt="Everyday Like Sunday" style="width:100%">
					</div>

					<div class="item">
						<img src="images/bold.jpg" alt="Everyday Like Sunday" style="width:100%">
					</div>
    
					<div class="item">
						<img src="images/superman.jpg" alt="Everyday Like Sunday" style="width:100%">
					</div>
					
					<div class="item">
						<img src="images/basic.jpg" alt="Everyday Like Sunday" style="width:100%">
					</div>
					
					<div class="item">
						<img src="images/spiderman.jpg" alt="Everyday Like Sunday" style="width:100%">
					</div>

				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
				</div>	
			</div>
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-usd ico-white"></i></h2>

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
                 <div class="title"><h2>Checkout Selesai</h3></div>
                 <div class="hero-unit"><h3>Selamat Anda telah berhasil checkout, silahkan catat info di bawah ini..</h2></div>
                 <div class="hero-unit">
    <?php
			if($_POST['finish']){
				session_destroy();
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank Mandiri cabang Cikarang dengan nomor rekening 123-234-56347-8 atas nama Hakko Bio Richard.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nm_usr'].'<br>';
                echo 'Email : '.$_POST['email_usr'].'<br>';
                echo 'Alamat : '.$_POST['almt_usr'].'<br>';
                echo 'Kode Pos : '.$_POST['kp_usr'].'<br>';
                echo 'Kota : '.$_POST['kota_usr'].'<br>';
                echo 'No Telepon : '.$_POST['tlp'].'<br>';
                echo 'Total Belanja : Rp. '.$_POST['total'].',-</p>';
			}else{
				header("Location: index.php");
			}
			?>
                   </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			



		
<!--FOOTER-->
			
			<div class="container footer" style="width:100%">
				<div class="col-md-12">
					<h1>VISIT US</h1>
				</div>
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="sosialmedia">
					 <a href="http://facebook.com/evlscloth" target="blank"><img src="images/facebook.png" alt="facebook" style="width:30px"></a>
					 <a href="http://twitter.com/evlscloth" target="blank"><img src="images/twitter.png" alt="twitter" style="width:30px"></a>
					 <a href="http://instagram.com/evlscloth" target="blank"><img src="images/instagram.png" alt="instagram" style="width:30px"></a>
					 </div>
				</div>
				<div class="col-md-12">
					<p>&copy; Copyright 2015 Everyday Like Sunday Cloth</p>
				</div>
			</div>



</body>
</html>