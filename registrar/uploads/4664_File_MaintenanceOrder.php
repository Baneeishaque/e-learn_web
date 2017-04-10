<?php
session_start();
include("database.php");
if(isset($_SESSION['User_Name']))
{
$username=$_SESSION['User_Name'];
}
else
{
	?>
<script>
alert("you are already loged out");
alert(window.location='../index.php');
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
  <link rel="stylesheet" type="text/css" href="demo/css/datePicker.css" />
  <script src="demo/js/jquery-1.6.1.min.js" type="text/javascript"></script>
  <script src="demo/js/jquery.datePicker-min.js" type="text/javascript"></script>
   <script src="js/scrypt.js" type="text/javascript"></script>
  <script type="text/javascript">
  
  $(window).ready(function(){
  $('#date-pick').datePicker({clickInput:true});
});
</script>
  </style>
  <script language="javascript">
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
<script language="javascript">

function load() {
var load = window.open ('MaintenanceOrderr.php','_self',false);

}
// -->
</script>
<script language="javascript">
function MM_validateForm() { //v4.0
 if(document.getElementById("mainCustID").value =="")
   {
    alert('first fill maintainance ID!!'); 
    document.getElementById("mainCustID").focus();
    return false;
   }
      if(document.getElementById("MaintenaceType").value =="")
   {
    alert('first fill Maintenace Type text field !!');
    document.getElementById("MaintenaceType").focus();
    return false;
   }
}
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

    <!--<div id="welcome_slogan"> -->

     <img width="918" height="105" src="images/bann.jpg">
   <!--</div> <!--close welcome_slogan-->
  </div><!--close banner-->
    </div>
    <!--close banner-->
   </div><!--close header-->
	<div id="navigation">
	  <ul>
        <li class="current">
          <div align="left"><a href="home.php" class="style27">Back to Main</a><a href="index.php"></a></div>
        </li>
      </ul>
   </div><!--close menubar-->
	<div id="sub-menu">
	 <div align="right"="clockbox"></div>
   </div>
   <div id="site_content">


   </div>
   <!--close header-->
	<div id="site_content">
	  <p>
	    <?php
           print "Welcome "."<b><u>".$_SESSION['User_Name']."<u></b>"."<br/>";

			echo "<b>".date('l\, F jS\, Y ')."</b>";
			?>
	    <!--close sidebar_container-->
      </p>
	  <div id="content">
        <div class="content_item">
		     <?php
		if(isset($_POST['Save'])){

		//$customerid= $_POST['mainCustID'] ;
		$mainNumber=$_POST['mainNumber'];
		$hidden=$_POST['remark'];
        $Customer_ID=$_SESSION['CustomerID'];
		$maintananceDate=$_POST['maintananceDate'];
		$MaintenaceType=$_POST['MaintenaceType'];
		$date = date('Y-m-d');
		require_once('database.php');
		$sql="insert into maintenance values('$mainNumber','$Customer_ID','$maintananceDate','$MaintenaceType','$hidden')";
		$result=mysql_query($sql);
		if(!$result)
		die("unable to insert values".mysql_error());
		mysql_close($con);
		}
		else {
		?> 
		<center>  <form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		  <fieldset>
		  <legend><span class="style7"></span></legend>
		      <p>&nbsp;</p>
		        <table width="624" height="203">
                <tr>
                  <td height="24"><div align="right"></div></td>
                  <td><label>
				  <input type="hidden" name="mainNumber" />

                  </label></td>
                </tr>
                <tr>
                  <td height="25"><div align="right"><span class="style5">Maintainance Date </span></div></td>
                  <td>
				  <input type="text"  name="maintananceDate"  id="maintananceDate" readonly="readonly" value="<?php echo date('Y-m-d'); ?>" />

                 </td>
                </tr>
                <tr>
                  <td valign = "top" height="44"><div align="right"><span class="style5">Maintainance Type </span></div></td>
                  <td><label>

                  <textarea name="MaintenaceType" id="MaintenaceType" cols="50" rows="6"  ></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td  align="right" valign="top" height="35">&nbsp;</td>
                  <td>
                    <input type="hidden" name="remark" />
                  </td>
                </tr>
				
                <tr>
                  <td  align="right" valign="top" height="35"><span class="style5">
                    <input type="submit" name="Save" value="Send" Onclick="return MM_validateForm(this.form);"/>
                  </span></td>
                  <td>
                    <input type="submit" name="Clear" value="Clear" />                    </td>
                </tr>
				 <td height="24">&nbsp;</td>
                <td><label>
                  <input type="hidden" name="Customer_ID" />
                </label></td>
				 <td height="24">&nbsp;</td>
          </table>
	      <p>&nbsp;</p>
		  </fieldset>
          </form>
		  </center>
		<?php } ?>
        </div><!--close content_item-->
      </div><!--close content-->
   </div><!--close site_content-->

</div><!--close main-->

  <div id="footer">
	  <p>Copyright &copy; 2016 | www.dbws.et </p></div>
  <!--close footer-->

</body>
</html>
