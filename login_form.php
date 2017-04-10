			
<div style=" width: 550px; ">
<div style="margin-top:-250px; width: 400px; margin-left: 50px;  " >
			<form id="login_form1" class="form-signin" method="post">
						<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign in</h3>
						<h4>Username</h4>  <input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
					 <h4>Password</h4>	 <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
						<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
						</div></div>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin').tooltip('show');
															$('#signin').tooltip('hide');
														});
														</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'notification_teacher.php'  }, delay);  
									}else if (html == 'true_student'){
										$.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'student_notification.php'  }, delay);  
									}
                                else if (html == 'true_coordinator'){
										$.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'dashboard_coordinator.php'  }, delay);  
									}

									else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
						<div style="width: 1050px; height: 170px; ">
			<div id="button_form" class="form-signin" style="margin-top:-20px; width: 700px; margin-left: 100px;"   >
			New to CHMSC OLMS 
			<hr>
				<div style="margin-top: -20px;"><h3 class="form-signin-heading"><i class="icon-edit"></i> Sign up</h3><br></div>
				<div style=" margin-top: 60px;" ><button data-placement="top" title="Sign In as Student" id="signin_student" onclick="window.location='signup_student.php'" id="btn_student" name="login" class="btn btn-info" type="submit">I`m a Student</button></div>
				<div class="pull-right" style="margin-right: 5px; margin-top: -30px;">
					<button data-placement="top" title="Sign In as Teacher" id="signin_teacher" onclick="window.location='signup_teacher.php'" name="login" class="btn btn-info" type="submit">I`m a Teacher</button></div>
					<div class="pull-right " style="margin-right: 110px; margin-top: -80px;" >
					<button data-placement="top" title="Sign In as Teacher" id="signin_teacher" onclick="window.location='signup_Coordinator.php'" name="login" class="btn btn-info" type="submit">I`m a Coordinator</button>
				</div>
				</div>
			</div>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
														});
														</script>	
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
														});
														</script>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#signin_coordinator').tooltip('show'); $('#signin_coordinator').tooltip('hide');
														});
														</script>