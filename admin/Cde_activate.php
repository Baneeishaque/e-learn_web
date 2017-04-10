<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysql_query("update coordinator set Coordinator_stat= 'Deactivated' where C_Id = '$get_id'");
header('location:coordinator.php');
?>