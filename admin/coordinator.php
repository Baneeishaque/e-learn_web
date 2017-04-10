<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>

        <div style="margin-top: -65px;">
        <?php include('navbar1.php') ?></div>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('sidebar_dashboard.php'); ?>
                <div class="span3" id="adduser">
                                
                </div>
                <div class="span6" id="" style="margin-right: 100px;">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">coordinator List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="delete_teacher.php" method="post">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    
                                    <?php include('modal_delete.php'); ?>
                                        <thead>
                                            <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Username</th>

                                    <th></th>
                                </tr>
                                        </thead>
                                        <tbody>
                                                 <?php
                                    $c_query = mysql_query("select * from coordinator") or die(mysql_error());
                                    while ($row = mysql_fetch_array($c_query)) {
                                    $id = $row['C_Id'];
                                    $Coordinator_stat = $row['Coordinator_stat'];

                                        ?>
                                    <tr>
                                        <td width="30">
                                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                        </td>
                                    
                                     <td><?php echo $row['C_Adress']; ?></td> 
                                    <td><?php echo $row['C_Name']; ?></td> 
                                    <td><?php echo $row['Username']; ?></td> 
                               
                                    
                                    
                                    <?php if ($Coordinator_stat== 'Activated' ){ ?>
                                    <td width="120"><a href="Cde_activate.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivate</a></td>
                                    <?php }else{ ?>
                                    <td width="120"><a href="Cactivate.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activate</a></td>                
                                    <?php } ?>
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