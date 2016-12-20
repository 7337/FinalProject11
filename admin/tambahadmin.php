<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Tambah Admin </h3>
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                  
    <form action="" method="post">
    <table class="table table-condensed">
	<tr>
    <td><label>Nama </label></td>
    <td><input name="fullname" type="text"></td>
  </tr>
    <tr>
    <td><label>Username</label></td>
    <td><input name="username" type="text"></td>
  </tr>
  <tr>
    <td><label>Password<label></td>
    <td><input name="password" type="password" id="password"></td>
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

$query="insert into admin (user_id, fullname, username, password) values ('','".$_POST['fullname']."','".$_POST['username']."','".$_POST['password']."')";

//eksekusi query
$hasil=mysql_query($query) or die (mysql_error());
?>

<script>
alert("data sukses ditambahkan");
window.location='?vr=dtadmn';</script>
<?php
}
?>
