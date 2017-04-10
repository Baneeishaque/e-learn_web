<?php
include('admin/dbcon.php');

$id = $_POST['id'];
$post_id = $_POST['post_id'];
$get_id = $_POST['get_id'];
$grade = $_POST['grade'];

mysql_query("update student_assignment set grade = '$grade' where student_assignment_id = '$id'")or die(mysql_error());
  $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										 $r1= $class_row['subject_code'];
										 
										
	   							


 $sql=mysql_query("select * from grade ");
										 $row=mysql_fetch_array($sql);
										 $r2=$row['Course_id'];

										mysql_query("update grade set assignment=$grade where Course_id='$r1' ");
?>
<script>
 window.location = 'view_submit_assignment.php<?php echo '?id='.$get_id.'&'.'post_id='.$post_id; ?>'; 
</script>