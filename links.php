<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Stayfit Multipurpose Health Template | Home Page Style One</title>
<!-- Stylesheets -->

<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<img src="images/logo.png" width="1600px" height="400px" style="margin-top: -100px;" >

<div class="page-wrapper">
    

    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header">
        <div class="auto-container clearfix">
            
            <!-- Logo -->
            <div class="logo"><a href="#"><img src="images/har.jpg" width="200px" height="70px" style="margin-left: -100px;" alt="Logo" title="StayFit"></a></div>
            
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">                                                                                              
                    <ul class="nav navbar-nav navbar-right"  ">
                     <li class="active"><a href="index.php"><i class="icon-home"></i>&nbsp;Home</a></li>
                        <li><a href="about.php"><i class="icon-info-sign"></i>&nbsp;About</a></li>
                           
                        </li>
                        <li><a href="calendar_of_events.php"><i class="icon-calendar"></i>&nbsp;Calendar of Events</a></li>
                        <li class="divider-vertical"></li>
        <li><a href="#directories" data-toggle="modal"><i class="icon-phone"></i>&nbsp;Directories</a></li>
                <?php include('directories.php'); ?>
            <li class="divider-vertical"></li>
        <li><a href="#campuses" data-toggle="modal"><i class="icon-building"></i>&nbsp;Campuses</a></li>
                <?php include('campuses.php'); ?>
            <li class="divider-vertical"></li>
               

                       <li><a href="developers.php"><i class="icon-user"></i>&nbsp;Contuct Us</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </nav>
            <!-- Main Menu End-->
            
        </div>
        
        
    </header>
    <!--End Main Header -->
    

   
    <!--Main Footer-->
   
    
</div>

<script src="js/revolution.min.js"></script>




<script src="js/script.js"></script>




</body>
</html>
