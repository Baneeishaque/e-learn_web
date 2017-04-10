<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('progress_link_student.php'); ?>
				<div style="background-color: #3385ff; width: 300px; height: 1000px; margin-left: -30px; margin-top: -20px;">
				
				</div>
                <div class="span4" id="content" style="margin-top: -900px; margin-left: 400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
										<?php $class_query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysql_error());
										$class_row = mysql_fetch_array($class_query);
										$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Progress</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							    <div id="" class="muted pull-left"><h4> Assignment Grade Progress</h4></div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th>Course Code</th>
												<th>Assignment Result</th>
											
												<th>Exam Result</th>
                                                <th>Total Result</th>
												<th>Grade</th>
												
												
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM grade where student_id='$session_id'")or die(mysql_error());

										
										while($row = mysql_fetch_array($query)){
										
										
									?>        

										<tr>
										 <td><?php echo $row['Course_id']; ?></td>
                                         <td><?php  echo $row['Assignment']; ?></td>
                                         <td><?php  echo $row['Exam']; ?></td>
                                         <?php
                                         $total=$row['Assignment']+$row['Exam'];?>
                                         <td><?php  echo $total; ?></td>
                                         <?php
                                         if ($total >"90") {
    										$grade='A+';}
    										if ($total <"90" && $total >="85") {
    										$grade='A';}
    										if ($total <"85" && $total >="80") {
    										$grade='A-';}
    										if ($total <"80" && $total >="75") {
    										$grade='B+';}
    										if ($total <"75" && $total >="70") {
    										$grade='B';}
    										if ($total <"70" && $total >="65") {
    										$grade='B-';}
    										if ($total <"65" && $total >"60") {
    										$grade='C+';}
    										if ($total <"60" && $total >="55") {
    										$grade='C';}
    										if ($total <"55" && $total >"40") {
    										$grade='D';}
    										if ($total <"55" ) {
    										$grade='F';}

    										?>
                                         <td><?php  echo $grade; ?></td>
                                    <?php }?>

										 </tr>
						  
										</tbody>
									</table>
						
                                </div>
                            </div>
                        </div>
                        
                    </div>
                     

                </div>
				
				
				                <div class="span5" id="content">
                     <div class="row-fluid">
					 
				<?php /* include('downloadable_sidebar.php') */ ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>