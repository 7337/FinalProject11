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
							<li><a class="" href="index.php">HOME</a></li>
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

				<h2><i class="ico-usd ico-white"></i>Checkout Keranjang</h2>

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
                 <div class="title"><h3>Form Checkout</h3></div>
                 <div class="hero-unit">Harap isi form dibawah ini dengan lengkap dan benar sesuai idenditas anda!</div>
                <div class="hero-unit">Total Belanja Anda Rp. <?php echo abs((int)$_GET['total']); ?>,-</div> 
    <form id="formku" action="selesai.php" method="post">
    <table class="table table-condensed">
    <input type="hidden" name="total" value="<?php echo abs((int)$_GET['total']); ?>">
    <tr>
        <td><label for="nm_usr">Nama</label></td>
        <td><input name="nm_usr" type="text" class="required" minlength="6" id="nm_usr" /></td>
      </tr>
      <tr>
        <td><label for="log_usr">Username</label></td>
        <td><input name="log_usr" type="text" class="required" minlength="6" id="log_usr" /></td>
      </tr>
      <tr>
        <td><label for="pas_usr">Password</label></td>
        <td><input name="pas_usr" type="password" class="required" minlength="6" id="pas_usr" /></td>
      </tr>
      <tr>
        <td><label for="email_usr">Email</label></td>
        <td><input name="email_usr" type="text" class="email required" id="email_usr" /></td>
      </tr>
      <tr>
        <td><label for="almt_usr">Alamat</label></td>
        <td><input name="almt_usr" type="text" class="required" id="almt_usr" /></td>
      </tr>
      <tr>
        <td><label for="kp_usr">Kode Pos</label></td>
        <td><input name="kp_usr" type="text" class="required number" minlength="5" maxlength="5" id="kp_usr" /></td>
      </tr>
      <tr>
        <td><label for="kota_usr">Kota</label></td>
        <td><input name="kota_usr" type="text" class="required" minlength="6" id="kota_usr" /></td>
      </tr>
      <tr>
        <td><label for="tlp">No telepon</label></td>
        <td><input name="tlp" type="text" class="required number" minlength="12" id="tlp" /></td>
      </tr>
      <tr>
        <td><label for="rek">No Rekening</label></td>
        <td><input name="rek" type="text" class="required number" minlength="12" id="rek" /></td>
      </tr>
      <tr>
        <td><label for="nmrek">Nama Rekening</label></td>
        <td><input name="nmrek" type="text" class="required" minlength="6" id="nmrek" /></td>
      </tr>
      <tr>
        <td><label for="bank">Bank</label></td>
        <td><select name="bank" class="required">
        <option></option>
        <option value="Mandiri">Mandiri</option>
        <option value="BNI">BNI</option>
        <option value="CIMB">CIMB</option>
        <option value="BCA">BCA</option>
        <option value="Bank Jabar">Bank Jabar</option>
        <option value="Danamon">Danamon</option>
        <option value="BRI">BRI</option>
        <option value="Permata">Permata</option>
        </select>
        </td>
      </tr>
      <tr>
      <td></td>
        <td><input type="submit" value="Simpan Data" name="finish"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

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