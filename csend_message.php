<?php
include('admin/dbcon.php');
include('session.php');
$r_id = $_POST['user_id'];
$my_message = $_POST['my_message'];


$query = mysql_query("select * from registrar where user_id = '$r_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$name = $row['firstname']." ".$row['lastname'];

$query1 = mysql_query("select * from coordinator where C_Id = '$session_id'")or die(mysql_error());
$row1 = mysql_fetch_array($query1);
$name1 = $row1['C_Name']." ".$row1['C_Adress'];


mysql_query("insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$r_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
mysql_query("insert into message_sent (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$r_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
?>