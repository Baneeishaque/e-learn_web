<?php
		include('admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM student WHERE username='$username' AND password='$password' and student_stat='Activated'";
			$result = mysql_query($query)or die(mysql_error());
			$row = mysql_fetch_array($result);
			$num_row = mysql_num_rows($result);
		/* teacher */
		$query_teacher = mysql_query("SELECT * FROM teacher WHERE username='$username' AND password='$password' and teacher_stat='Activated'")or die(mysql_error());
		$num_row_teacher = mysql_num_rows($query_teacher);
		$row_teahcer = mysql_fetch_array($query_teacher);
       $status=$row_teahcer['teacher_stat'];

		$query_coordinator = mysql_query("SELECT * FROM Coordinator WHERE username='$username' AND password='$password' and coordinator_stat='Activated'")or die(mysql_error());
		$num_row_coordinator = mysql_num_rows($query_coordinator);
		$row_coordinator = mysql_fetch_array($query_coordinator);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo 'true_student';	

		}
		else if ($num_row_teacher > 0){
		$_SESSION['id']=$row_teahcer['teacher_id'];
		echo 'true';
		
		 

		}
		 else if ($num_row_coordinator > 0){
		$_SESSION['id']=$row_coordinator['C_Id'];
		echo 'true_coordinator';
		
		 }

		 else{ 
				echo 'false';
		}	
		
		?>