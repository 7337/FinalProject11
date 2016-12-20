        <div class="col-lg-16">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Data Produk </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">  
<table class="table table-bordered table-hover table-striped tablesorter" style="width:60px">
        <tr>
          <th><CENTER style="">ID Produk</th>
          <th><CENTER style="">Nama Produk</th>
          <th><CENTER style="">Item</th>
          <th><CENTER style="">Harga</th>
          <th><CENTER style="">Stok</th>
		  <th><CENTER style="">Satuan</th>
		  <th><CENTER style="">Gambar</th>
		  <th><CENTER style="">Keterangan</th>
		  <th><CENTER style="">Aksi</th>
		  
    </tr> 
 
   
        <?php
          $query = mysql_query("SELECT * FROM barang");
          while ($record = mysql_fetch_array($query)) {
          ?>      
        <tr>

            <td> <CENTER style=""><?php echo $record['br_id']; ?></td>
            <td> <?php echo $record['br_nm']; ?></td>
            <td> <?php echo $record['br_item']; ?></td>
			<td> <?php echo $record['br_hrg']; ?></td>
            <td> <?php echo $record['br_stok']; ?></td>
            <td> <?php echo $record['br_satuan']; ?></td>
			<td> <?php echo $record['br_gbr']; ?></td>
            <td> <?php echo $record['ket']; ?></td>


            <td> <CENTER style="">
            <a href="?vr=updtprdk&br_id=<?php echo $record['br_id']?>" class="btn btn-sm btn-success"> <i class="fa fa-edit"> </i>Update</a>
            <a href="?vr=dltprdk&br_id=<?php echo $record['br_id']?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-wrench"></i>Delete</a>      
            </td>
        </tr>
		
   <?php } ?>
    </table>
	               <div class="text-right">
                  <a href="?vr=tmbhprdk" class="btn btn-sm btn-warning">Tambah Produk <i class="fa fa-plus"></i></a>
              
                </div>
	</div>
	</div>
	</div>
	</div>

