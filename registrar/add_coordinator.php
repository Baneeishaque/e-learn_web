   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Coordinator</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								<!--
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>
									-->	
										
										  
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="Cid" id="focusedInput" type="text" placeholder = "Coordinator Id">
                                          </div>
                                        </div>

										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="Cname" id="focusedInput" type="text" placeholder = "Coordinator Name">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="Cadress" id="focusedInput" type="text" placeholder = "Coordinator Address">
                                          </div>
                                        </div>
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					    <?php
                            if (isset($_POST['save'])) {
                           
                                $Cid = $_POST['Cid'];
                                $Cname = $_POST['Cname'];
                                $Cadress = $_POST['Cadress'];
								
								
								$query = mysql_query("select * from coordinator where  C_Name = '$Cname' and  C_Adress = '$Cadress' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{

                                mysql_query("insert into coordinator (C_Id,C_Name,C_Adress)
								values ('$Cid','$Cname','$Cadress')         
								") or die(mysql_error()); ?>
								<script>
							 	window.location = "teachers.php"; 
								</script>
								<?php   }} ?>
						 
						 