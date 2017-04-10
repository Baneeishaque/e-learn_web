<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
<div style="margin-top: -65px;">
        <?php include('navbar1.php') ?></div>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="margin-left: 300px;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Exam details</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
						
										<thead>
										        <tr>

												<th>Exam name</th>
												<th>Description</th>
												<th>Date</th>
												<th>Instructor</th>
												<th>Class</th>
                                   
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysql_query("select * FROM quiz LEFT JOIN teacher ON teacher.teacher_id = quiz.teacher_id ")or die(mysql_error());
										while($row = mysql_fetch_array($query)){
									?>
							

					
                              
										<tr>

                                         <td><?php  echo $row['quiz_title']; ?></td>
                                         <td><?php echo $row['quiz_description']; ?></td>
                                         <td><?php echo $row['date_added']; ?></td>
                                         <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                        

                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>