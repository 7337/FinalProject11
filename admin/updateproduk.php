<?php
require_once ("../koneksi.php");
$query1 = mysql_query("SELECT * FROM barang where br_id='".$_GET['br_id']."' ");
while ($record = mysql_fetch_array($query1)) {
?>

<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h1 class="panel-title"><i class="fa fa-user"></i> Update Data Produk </h1> 
              </div>
              <div class="panel-body">
    <form action="" method="post">
    <table class="table table-condensed">
  <tr>
    <td><label>Id Produk</label></td>
    <td><input name="br_id" type="text" value="<?php echo $record['br_id']?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td><label>Nama Produk</label></td>
    <td><input name="br_nm" type="text" value="<?php echo $record['br_nm']?>"></td>
  </tr>
  <tr>
    <td><label>Item</label></td>
    <td><input name="br_item" type="text" value="<?php echo $record['br_item']?>"></td>
  </tr>
  <tr>
    <td><label>Harga</label></td>
    <td><input name="br_hrg" type="text"  value="<?php echo $record['br_hrg']?>"></td>
  </tr>
  <tr>
    <td><label>Stok</label></td>
    <td><input name="br_stok" type="text"  value="<?php echo $record['br_stok']?>"></td>
  </tr>
  <tr>
    <td><label>Satuan</label></td>
    <td><input name="br_satuan" type="text"  value="<?php echo $record['br_satuan']?>"></td>
  </tr>
  <tr>
    <td><label>Gambar</label></td>
    <td><input name="br_gbr" type="text"  value="<?php echo $record['br_gbr']?>"></td>
  </tr>
  <tr>
    <td><label>Keterangan</label></td>
    <td><input name="ket" type="text"  value="<?php echo $record['ket']?>"></td>
  </tr>
   <tr>
   
    <td colspan="2"><input class="btn btn-lg btn-success" name="update" type="submit" value="Update" id="update"></td>
  </tr>
</table>
<?php } ?>
</form>
</div>
</div>
</div>


</html>
<?php
if(isset($_POST['update'])){
$query="UPDATE `barang` SET `br_nm` =  '".$_POST['br_nm']."', `br_item` =  '".$_POST['br_item']."', `br_hrg` ='".$_POST['br_hrg']."', `br_stok` ='".$_POST['br_stok']."',
`br_satuan` ='".$_POST['br_satuan']."', `br_gbr` ='".$_POST['br_gbr']."', `ket` ='".$_POST['ket']."'WHERE  `barang`.`br_id` ='".$_POST['br_id']."' ;";

//eksekusi query
$hasil=mysql_query($query) or die (mysql_error());
?>

<script>
alert("data sukses Diupdate");
window.location='?vr=dtprdk';</script>
<?php
}
?>