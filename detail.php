<?php require_once("koneksi.php"); ?>
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

				<h2><i class="ico-usd ico-white"></i>Keranjang</h2>

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
            <div class="title"><h3>Detail Keranjang Belanja</h3></div>
<table class="table table-hover table-condensed">
<tr>
					<th>No.</th>
					<th>Nama Barang</th>
					<th>Jumlah</th>
					<th>Harga Satuan</th>
					<th>Sub Total</th>
					<th>Opsi</th>
				</tr>
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
				$no = 1;
				foreach($_SESSION as $name => $value){
					if($value > 0){
						if(substr($name, 0, 5) == 'cart_'){
							$id = substr($name, 5, (strlen($name)-5));
							$get = mysql_query('SELECT * FROM barang WHERE br_id='.mysql_real_escape_string((int)$id));
							
							while($get_row = mysql_fetch_assoc($get)){
								$sub = $get_row['br_hrg'] * $value;
								echo '
								<tr>
									<td align="center">'.$no.'</td>
									<td align="center">'.$get_row['br_nm'].'</td>
									<td align="center">'.$value.'</td>
									<td align="right">Rp. '.$get_row['br_hrg'].'</td>
									<td align="right">Rp. '.$sub.'</td>
									<td align="center">
										<a href="detail.php?remove='.$id.'" class="btn btn-xs btn-warning">Hapus</a> 
										<a href="detail.php?add='.$id.'" class="btn btn-xs btn-primary">Tambah</a> 
										<a href="detail.php?delete='.$id.'" class="btn btn-xs btn-danger" onclick="return confirm(\'Anda Yakin?\');">Batal</a><br>
									
									</td>
								</tr>							
								';
								$no++;
							}
							$total += $sub;
						}
					}
				}
				if($total == 0){
					echo '<tr><td colspan="5" align="center">Keranjang belanja masih kosong!</td></tr>';
					echo '<p><div align="right">
						<a href="produk.php" class="btn btn-success btn-lg"> Lanjutkan Belanja </a> </div></p>';
				} else {
					echo '<tr style="background-color: #DDD;"><td colspan="4" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.$total.'</b></td></td></td><td></td></tr>
						<p><div align="right">
						<a href="produk.php" class="btn btn-danger btn-lg"> Lanjutkan Belanja</a>
						<a href="checkout.php?total='.$total.'" class="btn btn-success btn-lg"> Checkout &raquo;</a>
						</div></p>';
				}
				?>
			
				<?php
				//PROSES TAMBAH JUMLAH PRODUK//
				if(isset($_GET['add'])){
					$qt = mysql_query('SELECT br_id, br_stok FROM barang WHERE br_id='.mysql_real_escape_string((int)$_GET['add']));
					while($qt_row = mysql_fetch_assoc($qt)){
						if($qt_row['br_stok'] != $_SESSION['cart_'.$_GET['add']]){
							$_SESSION['cart_'.$_GET['add']]+='1';
							header("Location: produk.php");
						} else {
							echo '<script language="javascript">alert("Stok barang tidak mencukupi"); document.location="produk.php";</script>';
						}
					}
				}
				
				//PROSES HAPUS 1 ITEM PRODUK//
				if(isset($_GET['remove'])){
					$_SESSION['cart_'.$_GET['remove']]--;
					header("Location: detail.php");
				}
				
				//PROSES HAPUS SEMUA ITEM PRODUK//
				if(isset($_GET['delete'])){
					$_SESSION['cart_'.$_GET['delete']]='0';
					header("Location: detail.php");
				}
				?>

</table>
			
				
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