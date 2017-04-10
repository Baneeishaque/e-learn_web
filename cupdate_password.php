 <?php
 include('dbcon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysql_query("update coordinator set Password = '$new_password' where C_Id = '$session_id'")or die(mysql_error());
 ?>