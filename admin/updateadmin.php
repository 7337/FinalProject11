<?php
require_once ("../koneksi.php");
$query1 = mysql_query("SELECT * FROM admin where user_id='".$_GET['user_id']."' ");
while ($record = mysql_fetch_array($query1)) {
?>

<div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h1 class="panel-title"><i class="fa fa-user"></i> Update Data Admin </h1> 
              </div>
              <div class="panel-body">
    <form action="" method="post">
    <table class="table table-condensed">
  <tr>
    <td><label>Id Admin</label></td>
    <td><input name="user_id" type="text" value="<?php echo $record['user_id']?>" readonly="readonly"></td>
  </tr>
  <tr>
    <td><label>Nama Admin</label></td>
    <td><input name="fullname" type="text" value="<?php echo $record['fullname']?>"></td>
  </tr>
  <tr>
    <td><label>Username</label></td>
    <td><input name="username" type="text" value="<?php echo $record['username']?>"></td>
  </tr>
  <tr>
    <td><label>Password</label></td>
    <td><input name="password" type="password" id="password" value="<?php echo $record['password']?>"></td>
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
$query="UPDATE `admin` SET `username` =  '".$_POST['username']."', `password` =  '".$_POST['password']."', `fullname` ='".$_POST['fullname']."' WHERE  `admin`.`user_id` ='".$_POST['user_id']."' ;";

//eksekusi query
$hasil=mysql_query($query) or die (mysql_error());
?>

<script>
alert("data sukses Diupdate");
window.location='?vr=dtadmn';</script>
<?php
}
?>