<?php


if($_GET['user_id'] != "");
{
	$id_usia = $_GET['user_id'];

mysql_query("DELETE FROM admin where user_id='".$_GET['user_id']."'");

echo"<script>alert('Data berhasil dihapus')</script>";
echo "<meta http-equiv='refresh'content='0;url=?vr=dtadmn'>";

}
?>