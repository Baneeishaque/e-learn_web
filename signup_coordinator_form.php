			<form id="signin_teacher" class="form-signin" method="post">
					<h3 class="form-signin-heading"><i class="icon-lock"></i> Sign up as Coordinator</h3>
					<input type="text" class="input-block-level"  name="CName" placeholder="Coordinator Name" required>
					<input type="text" class="input-block-level"  name="Cadress" placeholder="Coordinator Adress" required>
					
					<input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
					<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
					<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
					<button id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-check icon-large"></i> Sign in</button>
			</form>
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_teacher").submit(function(e){
					e.preventDefault();
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "coordinator_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Sign up Success' });
						var delay = 1000;
							setTimeout(function(){ window.location = 'dashboard_coordinator.php'  }, delay);  
						}else{
							$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
						}
					});
			
					}else
						{
						$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>
			<a onclick="window.location='index.php'" id="btn_login" name="login" class="btn" type="submit"><i class="icon-signin icon-large"></i> Click here to Login</a>
			
			
			
				
		
					
		