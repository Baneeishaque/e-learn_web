<?php
include('dbcon.php');
include('session.php');
$registrar_id = $_POST['user_id'];
$my_message = $_POST['my_message'];


$query = mysql_query("select * from registrar where user_id = '$registrar_id'")or die(mysql_error());
$row = mysql_fetch_array($query);
$name = $row['firstname']." ".$row['lastname'];

$query1 = mysql_query("select * from users where user_id = '$session_id'")or die(mysql_error());
$row1 = mysql_fetch_array($query1);
$name1 = $row1['firstname']." ".$row1['lastname'];


mysql_query("insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$registrar_id','$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
mysql_query("insert into message_sent (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) values('$registrar_id ,'$my_message',NOW(),'$session_id','$name','$name1')")or die(mysql_error());
?>