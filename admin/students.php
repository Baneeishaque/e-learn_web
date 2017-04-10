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
                
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" >Student List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" id="studentTableDiv" style="margin-left: 0px;">
                                    <?php include('student_table.php'); ?>
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