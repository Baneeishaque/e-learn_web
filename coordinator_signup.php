<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$Cname = $_POST['CName'];
$Cadress = $_POST['Cadress'];


$query = mysql_query("select * from Coordinator where  C_Name='$Cname' and C_Adress='$Cadress'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['C_Id'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update Coordinator set Username='$username', Password = '$password' where C_Id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>