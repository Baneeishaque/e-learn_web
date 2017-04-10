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
<script type="text/javascript">
function MM_validateForm() { //v4.0
  var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  var phone = /^\d{10}$/;

   if(document.getElementById("oldpassword").value =="")
   {
    alert('first fill old password text field !!');
    document.getElementById("oldpassword").focus();
    return false;
   }
      if(document.getElementById("newPassword").value =="")
   {
    alert('first fill new Password text field !!');
    document.getElementById("newPassword").focus();
    return false;
   }
      if(document.getElementById("confirmPassword").value =="")
   {
    alert('first fill confirmPassword field!!');
    document.getElementById("confirmPassword").focus();
    return false;
   }
        if(document.getElementById("password").length() !=  document.getElementById("confirmPassword").length())
   {
    alert('New password does not match!!');
    document.getElementById("confirmPassword").focus();
    return false;
   }
}
</script>
<script language="javascript">

function load() {
var load = window.open ('changepasswords.php','_self',false);

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
          <div align="left"><a href="index.php">Login </a></div>
        </li>
      </ul>
</div><!--close menubar-->
   <div id="sub-menu">
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
 </div>
  <div id="site_content">
    <!--close menubar-->
<center>
  	<p class="style5">

  	<h2><?php print "Welcome "."<b>".$_SESSION['User_Name'];?> </h2>
		   </p></center>
  <?php
//session_start();
?>
<?php
if(isset($_POST['submit']))
{
$oldpass = $_POST['oldpassword'];
$newpass = $_POST['newPassword'];
$confirmpass = $_POST['confirmPassword'];
		require_once('database.php');
$query="select * from user where Password='{$oldpass}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
    if($newpass!=$confirmpass){
	       echo'  <p align="center"><font color="red" size="2">New Password and Confirm Password does not Match! </font></p>';                                
		   echo' <meta content="5;changepasswords.php" http-equiv="refresh" />';
		   }
		   else
		   {
  $query="update user set Password='{$newpass}' where Password='{$oldpass}'";
        $result=mysql_query($query);
		 echo'  <p align="center"><font color="green" size="2">Your password has been changed successfuly!</font></p>';
         echo' <meta content="changepasswords.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo'  <p align="center"><font color="red" size="2">Wrong Old password!</font></p>';
 echo' <meta content="5"changepasswords.php" http-equiv="refresh" />';
}
}
?>
</p>
	<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
      <p>

    <center> <fieldset>
	<table width="450" height="300" border="0" align="center" cellpadding="10" cellspacing="0" class="style1">


		<!--<?php if(isset($message)) { echo $message; }?> </script> -->
        <tr class="tableheader">
           <td colspan="2" bgcolor="white"align="center" class="style26">Change Password</h1></td>
        </tr>
         <tr>
           <td width="300" bgcolor="white"><label class="style7">old password</label></td>
           <td width="300" bgcolor="white"><input type="password" name="oldpassword" id="oldpassword" class="form_settings"/>
               <span id="oldpassword" class="required"></span></td>
         </tr>
         <tr>
           <td bgcolor="white"><label class="style7">New Password</label></td>
           <td bgcolor="white"><input type="password" name="newPassword" id="newPassword" class="form_settings"/>
               <span id="newPassword" class="required"></span></td>
         </tr>
         <tr>
           <td bgcolor="white"><label class="style7">Confirm Password</label></td>
           <td bgcolor="white"><input type="password" name="confirmPassword" id="confirmPassword" class="form_settings"/>
               <span id="confirmPassword" class="required"></span></td>
         </tr>
         <tr>
           <td colspan="2" bgcolor="white"><input type="submit" name="submit" value="Change" class="submit" Onclick="return MM_validateForm(this.form);"/></td>
         </tr>
      </table> </fieldset>
	  </center> 
	  

	  <p>&nbsp;</p>
	</form>

    <!--close content_item-->
    </div>
   </div>
   <!--close site_content-->

	<div id="footer">
	  <p>Copyright &copy; 2016 reserved </a> | www.dbwss.et</p></div>
  <!--close footer-->

</div><!--close main-->
</div>




</body>
</html>
