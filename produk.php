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
			
			
	
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				

			</div>
			<!-- end: Container  -->

		</div>	

	</div>
	<!-- end: Page Title -->
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container"> 
        <div class="title"><h1>PRODUK KAMI</h1></div>
                       
      		<!-- start: Row -->
            
      		<div class="row">
			<div class="title"><h1>PRODUK KAMI</h1></div>
	<?php
                    $sql = mysql_query("SELECT * FROM barang ORDER BY br_id DESC");
	if(mysql_num_rows($sql) == 0){
		echo "Tidak ada produk!";
	}else{
		while($record = mysql_fetch_assoc($sql)){
                    ?>
        		<div class="col-md-4 col-xs-6">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $record['br_nm']; ?></h3></div>
                        <img src="<?php echo $record['br_gbr']; ?>" />
						<div><h3>Rp.<?php echo number_format($record['br_hrg'],2,",",".");?></h3></div>
					<!--	<p>
						
						</p> -->
						<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd=<?php echo $record['br_id'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="produk.php?add=<?php echo $record['br_id'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>

                    </div>
        		</div>
                <?php   
              }
              }
              
              ?>
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