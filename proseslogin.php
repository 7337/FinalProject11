<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysql_query("SELECT COUNT(username) AS jumlah FROM admin 
					WHERE username='$username' AND password='$password'");
$data = mysql_fetch_array($query);

if ($data['jumlah'] >= 1){
	$_SESSION['username']    = $username;

	echo "<script>alert('Selamat datang Administrator'); window.location = 'admin/main.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";	
}
?>