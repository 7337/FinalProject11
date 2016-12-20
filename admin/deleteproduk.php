<?php


if($_GET['br_id'] != "");
{
	$id_usia = $_GET['br_id'];

mysql_query("DELETE FROM barang where br_id='".$_GET['br_id']."'");

echo"<script>alert('Data berhasil dihapus')</script>";
echo "<meta http-equiv='refresh'content='0;url=?vr=dtprdk'>";

}
?>