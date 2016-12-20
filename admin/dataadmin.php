        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Data Admin </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">  
<table class="table table-bordered table-hover table-striped tablesorter">
        <tr>
          <th><CENTER style="">ID Admin</th>
          <th><CENTER style="">Nama Admin</th>
          <th><CENTER style="">Username</th>
          <th><CENTER style="">Password</th>
          <th><CENTER style="">Aksi</th>
    </tr> 
 
   
        <?php
          $query = mysql_query("SELECT * FROM admin");
          while ($record = mysql_fetch_array($query)) {
          ?>      
        <tr>

            <td> <CENTER style=""><?php echo $record['user_id']; ?></td>
            <td> <?php echo $record['fullname']; ?></td>
            <td> <?php echo $record['username']; ?></td>
            <td> <?php echo $record['password']; ?></td>

            <td> <CENTER style="">
            <a href="?vr=updtadmn&user_id=<?php echo $record['user_id']?>" class="btn btn-sm btn-success"> <i class="fa fa-edit"> </i>Update</a>
            <a href="?vr=dltadmn&user_id=<?php echo $record['user_id']?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"> <i class="fa fa-wrench"></i>Delete</a>      
            </td>
        </tr>
		
   <?php } ?>
    </table>
	               <div class="text-right">
                  <a href="?vr=tmbhadmn" class="btn btn-sm btn-warning">Tambah Data Admin <i class="fa fa-plus"></i></a>
              
                </div>
	</div>
	</div>
	</div>

