
<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<body>

		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_sidebar_teacher.php'); ?>
				<div style="background-color: #3385ff; width: 300px; height: 900px; margin-left: -30px; margin-top: -20px;">
				
				</div>
                <div class="span9" id="content" style="margin-top: -850px; margin-left: 350px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
									<ul class="breadcrumb">
										<?php
										$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
										$school_year_query_row = mysql_fetch_array($school_year_query);
										$school_year = $school_year_query_row['school_year'];
										?>
											<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
										<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span class="divider">/</span></li>
										<li><a href="#"><b>Quiz</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="pull-right">
									<a href="teacher_quiz.php" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
									</div>
								
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Quiz</label>
											<div class="controls">
											<select name="quiz_id">
											<option></option>
												<?php  $query = mysql_query("select * from quiz where teacher_id = '$session_id'")or die(mysql_error());
												while ($row = mysql_fetch_array($query)){ $id = $row['quiz_id']; ?>
												<option value="<?php echo $id; ?>"><?php echo $row['quiz_title']; ?></option>
												<?php } ?>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Test Time (in minutes)</label>
											<div class="controls">
											<input type="text" class="span3" name="time" id="inputPassword" placeholder="Test Time" required>
											</div>
										</div>
										<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>

<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<label class="control-label" for="inputPassword">Test Start Date</label>
											<div class="controls">
        <input class="form-control" id="date" name="date" placeholder="yyyy-mm-dd" type="text" id="inputPassword" placeholder="Start  Date" required style="width: 200px;height: 20px;"  />
       
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <div class="control-group">
											
      
      



<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
</div>
</div></div></div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Test Start Time</label>
											 <div class="col col-lg-4">
                
                <p><input type="text" id="t1" value="2:30 PM" data-format="hh:mm A" class="form-control" style="width: 200px; height: 20px; margin-left: 20px;"  name="st"></p>
                
            </div>
											        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

        

        <link rel="stylesheet" href="js/time/css/clockface.css">    
        <script src="js/time/js/clockface.js"></script> 
        <div class="row">
           
    
           <script>
             $(function(){
                 $.each(['t1', 't2', 't3'], function(i, v){
                    var t = $('#src-tpl').clone().attr('id', 'src-'+v).appendTo('#sources');
                    t.find('pre').eq(0).text($.trim(v === 't2' ? $('#'+v).parent().parent().html() : $('#'+v).parent().html()));
                    t.find('pre').eq(1).text($.trim($('#js-'+v).text()));
                 });
             });
				</script>                 

				<script id="js-t1">
				$(function(){
				    $('#t1').clockface();  
				});
				</script>

										</div>
										
		</form>





												<table class="table" id="question">
                <th></th>
                <th>Class</th>
                <th>Subject</th>
                <th></th>
				
				<tbody>
					<?php $query = mysql_query("select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and school_year = '$school_year' ")or die(mysql_error());
										$count = mysql_num_rows($query);
										

										while($row = mysql_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
					</td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_code']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>
										
									
										
										<?php
										if (isset($_POST['save'])){
											$quiz_id = $_POST['quiz_id'];
											$time = $_POST['time'] * 60;
											$id=$_POST['selector'];
											$date=$_POST['date'];
                                            $st=$_POST['st'];
											
													$name_notification  = 'Add Practice Quiz file';
													
											$N = count($id);
											for($i=0; $i < $N; $i++)
											{
												mysql_query("insert into class_quiz (teacher_class_id,quiz_time,quiz_id,Start_date,Start_time) values('$id[$i]','$time','$quiz_id','$date=','$st')")or die(mysql_error());
												mysql_query("insert into notification (teacher_class_id,notification,date_of_notification,link) value('$id[$i]','$name_notification',NOW(),'student_quiz_list.php')")or die(mysql_error());
											} ?>
											<script>
												window.location = 'teacher_quiz.php';
											</script>
											<?php
										}
										?>
								
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