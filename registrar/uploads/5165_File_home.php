<?php
session_start();
include("database.php");
if(isset($_SESSION['User_Name']))
{
$username=$_SESSION['User_Name'];
}
else
{
  if(!$_SESSION["User_Name"])
  {
      header('Location: index.php');
  }
?>
<script>
alert("you are already loged out");
alert(window.location='index.php');
</script>
<?php
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>DEBRE BERHAN CITY WATER SUPPLY CUSTOMER SERVICE MANAGEMENT SYSTEM</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
  </style>
  <script language="javascript">

function load() {
var load = window.open ('home.php','_self',false);

}
// -->
</script>
<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>

  <script type="text/javascript">
tday =new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
d = new Date();
nday = d.getDay();
nmonth = d.getMonth();
ndate = d.getDate();
nyear = d.getYear();
nhour = d.getHours();
nmin = d.getMinutes();
nsec = d.getSeconds();

if(nyear<1000) nyear=nyear+1900;

if(nhour == 0) {ap = " AM";nhour = 12;}
else if(nhour <= 11) {ap = " AM";}
else if(nhour == 12) {ap = " PM";}
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}
if(nsec <= 9) {nsec = "0" +nsec;}


document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;
</script>
</head>

<body>
 <div id="main">
  <?php
if (!isset($_SESSION)) {
  session_start();
}
?>
  <div id="header">
    <div id="div">
      <div id="banner">
      <img width="918" height="105" src="images/bann.jpg">
   </div><!--close banner-->
    </div>
    <!--close banner-->
</div><!--close header-->
	<div id="navigation">
    <ul>
        <li class="current">
		  <div align="center"><a href="index.php">Home</a></div>
        </li>

        <li>
          <div align="center"><a href="background.php">About Us </a>
                <ul class="sub-menu">
                      <li><a href="background.php">Background</a></li>
                  <li><a href="mission.html">Misson</a></li>
                </ul>
          </div>
      </li>
        <li>
          <div align="center"><a href="recordOffice.html">Offices</a>
                <ul class="sub-menu">
                      <li><a href="recordOffice.html">Record office</a></li>
                  <li><a href="billOffice.html">Bill office</a></li>
                  <li><a href="accountant.html"> Accountant</a></li>
                  <li><a href="ict.html"> ICT office</a></li>
                  <li><a href="techncian.html"> Technician Office</a></li>
                </ul>
          </div>
        </li>
        <li>
          <div align="center"><a href="contact.html">Contact Us</a></div>
        </li>
<li>
          <div align="center"><a href="view_message.php">View message</a></div>
        </li>
      </ul>
    </div><!--close menubar-->
	<div id="sub-menu">
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
   </div>
<div id="site_content">
       <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/front.jpg" alt="&quot;Main Get Way of dbcwss office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg"/></li>
		<li><img width="880" height="250" src="images/hbt.jpg"/></li>
		<li><img width="880" height="250" src="images/bb.jpeg"/></li>
		<li><img width="880" height="250" src="images/office.jpg"/></li>
      </ul>
       <table width="880" height="219" border="3"  cellpadding="1" cellspacing="2" bordercolor="#99CC66" bgcolor="white" class="style12">
         <tr bordercolor="#000000" bgcolor="#003399" class="button_small">
           <th width="208" scope="col" bgcolor="gray"><div align="left" class="style25"><a href="ReadBillValueResult.php">Read Bill Value</a><a href="CustmerUpdate.php"></a></div></th>
           <th width="652" rowspan="5" class="style26" scope="col" bgcolor="white"><a href="index.php" class="style13"></a><a href="Admin/Debitt.php" class="style25"></a>
             <div class="content_item">
               <h1 class="style27">Custemer Bill Payment Information </h1>
               <form id="form1" method="post" action="">
                 <fieldset>
                 <p>Well come &quot;
                     <?php  print "<b><u>".$_SESSION['User_Name']."<u></b>"?>
                   &quot; you are login as customer </p>
                 </fieldset>
               </form>
             </div>
             <p class="style29">   <div id="clockbox" style="font-size:14px" align="center"></div></th>
         </tr>
         <tr bordercolor="#000000" bgcolor="#003399" class="button_small">
           <th scope="col" bgcolor="gray"><div align="left"><span class="style26"><a href="MaintenanceOrder.php">Maintenance Order</a><a href="Admin/NewUserAccount.php" class="style25"></a></span></div></th>
         </tr>
         <tr bordercolor="#000000" bgcolor="#003399" class="button_small">
           <th height="30" scope="col" bgcolor="gray"><div align="left"><a href="changepasswords.php">Change Password </a></div></th>
         </tr>
		    <tr bordercolor="#000000" bgcolor="#003399" class="button_small">
           <th scope="col" bgcolor="gray"><div align="left"><a href="index.php" class="style13">Logout</a></div></th>
         </tr>
		          <tr bordercolor="#000000" bgcolor="#003399" class="button_small">
           <th scope="col" bgcolor="gray"><div align="left"><a href="#"></a><a href="Admin/BillValue.php" class="style25"></a></div></th>
         </tr>
  </table>
       <p>
  </p>
</div>
<!--close header-->
	<div id="site_content">



	  <div id="content">

        <!--close content_item-->
      </div><!--close content-->
  <?php
//session_start();
?>
  <?php
$_SESSION['User_Name'];
		require_once('database.php');
if(count($_POST)>0) {
$result = mysql_query("SELECT *from user WHERE User_Name='" . $_SESSION['User_Name'] . "'");
$row=mysql_fetch_array($result);
if($_POST["oldpassword"] == $row["Password"]) {
mysql_query("UPDATE user set Password='" . $_POST["newPassword"] . "' WHERE User_Name='" . $_SESSION['User_Name'] . "'");
$message = "Password Changed";
} else $message = "oldpassword Password is not correct";
}
?>
</p>
	<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
       <script>
       </script>
	</form>
</body></html>



	  <div id="content">
        <div class="content_item">

	    </div>
        <!--close content_item-->
      </div><!--close content-->
	</div><!--close site_content-->
</div><!--close main-->

  <div id="footer">
	  <p>Copyright &copy; 2016 | www.dbws.et </p></div>
  <!--close footer-->

</body>
</html>
