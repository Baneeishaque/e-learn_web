<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<div style="margin-top: -65px;">
        <?php include('navbar1.php') ?></div>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
				<div class="span3" id="adduser" style="margin-left: 250px;">
				<?php include('add_school_year.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block" style="margin-left: 20px;">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">School Year List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_sy.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>School Year</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysql_query("select * from school_year")or die(mysql_error());
													while($row = mysql_fetch_array($user_query)){
													$id = $row['school_year_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['school_year']; ?></td>
	
												
											
												<td width="40">
												<a href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
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