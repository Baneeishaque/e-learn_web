   <div class="row-fluid">
       <a href="Coordinator.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Coordinator</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Coordinator</div>
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
									<?php
									$query = mysql_query("select * from Coordinator where C_id= '$get_id' ")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
										
										 
										
										
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['C_Name']; ?>"  name="Cname" id="focusedInput" type="text" placeholder = "Coordinator Name">
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['C_Adress']; ?>"  name="Cadress" id="focusedInput" type="text" placeholder = "Coordinator Addres">
                                          </div>
                                        </div>
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
				   <?php
                            if (isset($_POST['update'])) {
                       
                                
                                $Cname = $_POST['Cname'];
                                $Cadress = $_POST['Cadress'];
								
								
								$query = mysql_query("select * from Coordinator where C_Name = ' $Cname' and C_Adress = '$Cadress' ")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 1){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{
								
								mysql_query("update Coordinator set C_Name ='$Cname',C_Adress = '$Cadress' where C_Id = '$get_id' ")or die(mysql_error());	
								
								?>
								<script>
							 	window.location = "Coordinator.php"; 
								</script>
								<?php   }} ?>
						 
						 