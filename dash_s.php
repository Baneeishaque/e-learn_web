
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		
        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span9" id="content">
                     <div class="row-fluid" style="width: 1450px;">
    <body>
		
        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avenxo Admin Theme </title>
    
            <link type="text/css" href="css/styles3.css" rel="stylesheet">                                    
            

    </head>

    <body class="animated-content">
        
        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner" style="background-color:  #ff00ff;">

		<?php include('navbar_student.php'); ?>
</header>

        <div id="wrapper" style="margin-top: -60px; height: 750px; margin-left: -20px;" >
            <div id="layout-static"  >
                <div class="static-sidebar-wrapper sidebar-default" style="background-color:  #3385ff; ">
               <div style="width: 1000px; margin-left: 10px;"> <?php include('student_notification_sidebar.php'); ?> ?></div>
                    <div class="static-sidebar">
                        <div class="sidebar">
	
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	
		
	</ul>
</nav>
    </div>

    
</div>

                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                


                          			
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
						$school_year_query_row = mysql_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
							
						
  					<form action="read.php" method="post">
						<?php if($not_read == '0'){
								}else{ ?>
							<button id="delete"  class="btn btn-info" name="read"><i class="icon-check"></i> Read</button>
													<div class="pull-right">
							Check All <input type="checkbox"  name="selectAll" id="checkAll" />
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
	
								<?php } ?>
				
					<?php $query = mysql_query("select * from teacher_class_student
					LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
					LEFT JOIN class ON class.class_id = teacher_class.class_id 
					LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
					LEFT JOIN teacher ON teacher.teacher_id = teacher_class_student.teacher_id 
					JOIN notification ON notification.teacher_class_id = teacher_class.teacher_class_id 	
					where teacher_class_student.student_id = '$session_id' and school_year = '$school_year'  order by notification.date_of_notification DESC
					")or die(mysql_error());
					$count = mysql_num_rows($query);
					if ($count  > 0){
					while($row = mysql_fetch_array($query)){
					$get_id = $row['teacher_class_id'];
					$id = $row['notification_id'];
					
					
					$query_yes_read = mysql_query("select * from notification_read where notification_id = '$id' and student_id = '$session_id'")or die(mysql_error());
					$read_row = mysql_fetch_array($query_yes_read);
					
					$yes = $read_row['student_read'];
				
					?>
									<div class="post"  id="del<?php echo $id; ?>">
										<?php if ($yes == 'yes'){
										}else{
										?>
										<input id="" class="" name="selector[]" type="checkbox" value="<?php echo $id; ?>">	
										<?php } ?>	
											<strong><?php echo $row['firstname']." ".$row['lastname'];  ?></strong>
											<?php echo $row['notification']; ?> In 
											<a href="<?php echo $row['link']; ?><?php echo '?id='.$get_id; ?>">
											<?php echo $row['class_name']; ?> 
											<?php echo $row['subject_code']; ?> 
									 
											</a>
										<hr>
										<div class="pull-right">
										<i class="icon-calendar"></i>&nbsp;<?php echo $row['date_of_notification']; ?> 
										</div>
											
									
											
											</div>
					<?php
					} }else{
					?>
					<div class="alert alert-info"><strong><i class="icon-info-sign"></i> No Notifications Found</strong></div>
					<?php
					}
					?>
					
					</form>
						
                                </div>
  
                                </div>
                                </div>


		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>