<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Tambah Produk </h3>
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                  
    <form action="" method="post">
    <table class="table table-condensed">
	<tr>
    <td><label>Nama Produk </label></td>
    <td><input name="br_nm" type="text"></td>
  </tr>
    <tr>
    <td><label>Item</label></td>
    <td><input name="br_item" type="text"></td>
  </tr>
  <tr>
    <td><label>Harga<label></td>
    <td><input name="br_hrg" type="text"> </td>
  </tr>
   <tr>
    <td><label>Stok<label></td>
    <td><input name="br_stok" type="text"></td>
  </tr>
   <tr>
    <td><label>Satuan<label></td>
    <td><input name="br_satuan" type="text" ></td>
  </tr>
   <tr>
    <td><label>Gambar<label></td>
    <td><input name="br_gbr" type="text"> </td>
  </tr>
   <tr>
    <td><label>Keterangan<label></td>
    <td><input name="ket" type="text" ></td>
  </tr>
   <tr>
    <td colspan="2"><input class="btn btn-lg btn-success" name="submit" type="submit" value="Insert"></td>
  </tr>
    </table>
    </form>
                   </div>
                
				
              </div> 
            </div>
          </div> 
		
	<?php
if(isset($_POST['submit'])){

$query="insert into barang (br_id, br_nm, br_item, br_hrg, br_stok, br_satuan, br_gbr, ket) values ('','".$_POST['br_nm']."','".$_POST['br_item']."','".$_POST['br_hrg']."','".$_POST['br_stok']."','".$_POST['br_satuan']."','".$_POST['br_gbr']."','".$_POST['ket']."')";

//eksekusi query
$hasil=mysql_query($query) or die (mysql_error());
?>

<script>
alert("data sukses ditambahkan");
window.location='?vr=dtprdk';</script>
<?php
}
?>
