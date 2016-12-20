<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.html');	
} else {
	include "../koneksi.php";
$sw=(isset($_REQUEST['vr'])) ? $_REQUEST['vr'] :"";
?>

<html lang="en">
  <head>
    <title>Selamat Datang Administratror</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    
   </head>
  
  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?vr=dtadmn"><i class="fa fa-dashboard"></i>&nbsp Data Admin</a></li>
            <li><a href="?vr=tmbhadmn"><i class="fa fa-bar-chart-o"></i>&nbsp Tambah Admin</a></li>
            <li><a href="?vr=dtprdk"><i class="fa fa-table"></i>&nbsp Data Produk</a></li>
			<li><a href="?vr=tmbhprdk"><i class="fa fa-table"></i>&nbsp Tambah Produk</a></li>
			
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Selamat datang
              <?php
              echo $_SESSION['username'];
               ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
         
                <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="fa fa-power-off"></i> Keluar EVLS</a></li>
              </ul>
            </li>
          </ul>
        </div> 
      </nav>
      <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.html"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><b>HALAMAN ADMINISTRATOR EVLS SHOP</b></h1>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             Selamat Datang Di Halaman Admin EVLS SHOP
          </div>
        </div>
         
		 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
<div class="col-xs-12 col-sm-9"> 
<?php
			require_once'content.php';
		?>
</div>

        
        
        <!--/span-->

        
      </div><!--/row-->
	  </div>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>