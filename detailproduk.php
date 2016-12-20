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
			
			<script type="text/javascript">
				$(document).ready(function(){
					$('body').pageScroller({
				navigation: '#mainnav'
					});
					
				});
			</script>
	
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

				<h2><i class="ico-stats ico-white"></i>Produk Detail Produk</h2>

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">              

      		<!-- start: Row -->
            
      		<div class="row">
                    <?php
include 'koneksi.php';                    
$query = mysql_query("SELECT * FROM barang WHERE br_id='$_GET[kd]'");
$data  = mysql_fetch_array($query);
?>
        		<!--<div class="span4">-->
          			<!--<div class="icons-box">-->
                    <div class="hero-unit" style="margin-left: 20px;">
                    <table>
                    <tr>
                        <td rowspan="7"><img src="<?php echo $data['br_gbr']; ?>" /></td>
                        </tr>
                        <tr>
                        <td colspan="4"><div class="title"><h3><?php echo $data['br_nm']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td size="200"><h3>Harga</h3></td>
                        <td><h3>:</h3></td>
						<td><div><h3>Rp.<?php echo number_format($data['br_hrg'],2,",",".");?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Stock</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['br_stok']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Satuan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['br_satuan']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Keterangan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['ket']; ?></h3></div></td>
                        </tr>
					<!--	<p>
						
						</p> -->
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
						<td><div class="clear"> <a href="index.php?add=<?php echo $data['br_id'];?>" class="btn btn-lg btn-primary">Beli &raquo;</a></div></td>
						<td><div style="text-align:left; font-size:11px;"><a href="detail.php" class="btn btn-lg btn-danger">&raquo; Lihat Detail Keranjang &laquo;</a></div></td>
                        </tr>
					<a href="index.php?add='.$row['produk_id'].'"></td>
     
                    </table>
                    </div>
                    <!--</div> -->
        		<!--</div> -->
<!---->
      		</div>
			<!-- end: Row -->
					
					
				</div>	
				
					
				</div>
				
			</div>
			<!--end: Row-->
	
		</div>
		<!--end: Container-->
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