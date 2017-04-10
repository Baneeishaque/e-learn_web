<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $class_id = $_POST['class_id'];

               mysql_query("insert into student (username,firstname,lastname,location,class_id,status,student_stat)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','registered','Activated')                                    
		") or die(mysql_error()); ?>
<?php    ?>