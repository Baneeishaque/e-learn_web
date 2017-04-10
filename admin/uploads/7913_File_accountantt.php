<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>የደብረ ብርሃን ከተማ ዉሃ አገልግሎት የደንበኞች አገልግሎት ሲሰተም</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-size: medium;
}
-->
  </style>
<script language="javascript">

function load() {
var load = window.open ('accountant.html','_self',false);

}
// -->
</script>
<script type="text/javascript">
<!--
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

  	    <!--<div id="welcome_slogan"> -->

  	     <img width="918" height="105" src="images/bann.jpg">
  	   <!--</div> <!--close welcome_slogan-->
  	  </div>
    </div>
    <!--close banner-->
   </div><!--close header-->
	<div id="navigation">
      <ul>
        <li class="current">
          <div align="center"><a href="indexx.php">መግቢያ</a></div>
        </li>

        <li>
          <div align="center"><a href="background2.php">ስለ መስሪያ ቤቱ </a>
                <ul class="sub-menu">
                      <li><a href="background2.php"> የመ/ቤቱ ታሪክ</a></li>
                  <li><a href="missionn.php">ራዕይ እና ተልዕኮ </a></li>
                  <li><a href="missionn.php">አቅጣጫ</a></li>
                </ul>
          </div>
        </li>
        <li>
          <div align="center"><a href="recordOfficee.php">የመ/ቤቱ ክፍሎች</a>
                <ul class="sub-menu">
                      <li><a href="recordOfficee.php">መዝ/ቤት ክፍል</a></li>
                  <li><a href="billOfficee.php">ቢል ክፍል</a></li>
                  <li><a href="accountantt.php"> ገ/ተቀባይ ክፍል</a></li>
                  <li><a href="ictt.php"> የአይሲት ክፍል</a></li>
                  <li><a href="technciann.php"> የቴክ.ባለሙያ</a></li>
                </ul>
          </div>
        </li>
        <li>
          <div align="center"><a href="background.php">ቋንቋ </a>
                <ul class="sub-menu">
                      <li><a href="http://localhost/customer/customer_am/indexx.php">አማርኛ</a></li>
                        <li><a href="http://localhost/customer/index.php">English</a></li>
                </ul>
          </div>
      </li>
        <li>
          <div align="center"><a href="contactt.php">አድራሻ </a></div>
        </li>

      </ul>
    </div><!--close menubar-->
   <div id="sub-menu">

	  <span class="style1"><font color="#000000"> ቋንቋ </font></span>
	    <select name="language" size="1" >
        <option value="amh" onClick="loadamh()">አማርኛ(Amharic)</option>
	     	<option value="eng" onClick="loadeng()">English</option>
    </select>
	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
echo "<b>".date('l\, F jS\, Y ')."</b>";
?>
   </div>
  <div id="site_content">
      <ul class="slideshow">
        <li class="show"><img width="880" height="250" src="images/front.jpg" alt="&quot;Main Get Way of dbcwss office &quot;" /></li>
        <li><img width="880" height="250" src="images/pip.jpeg" alt="&quot;Somewhere water pumping project for public&quot;" /></li>
		<li><img width="880" height="250" src="images/hbt.jpg" alt="&quot;Customers waiting to get service from the dbcwss &quot;" /></li>
		<li><img width="880" height="250" src="images/bb.jpeg" alt="&quot;Structure of water read bulb&quot;" /></li>
		<li><img width="880" height="250" src="images/office.jpg" alt="&quot;Employee in dbcwss &quot;" /></li>
      </ul>
</div><!--close header-->



	<div id="site_content">
	  <div class="sidebar_container">
	    <!--close sidebar-->
<div class="sidebar">
          <div class="sidebar_item">
           <img width="200" height="100" src="images/key.jpg">
             <form action="login.php" method="post" id="form1" onsubmit="MM_validateForm('username','','R','password','','R');return document.MM_returnValue">

		መገልግያ ስም:<?php if(isset($_GET['fail'])) echo "<font color=\"red\"><b> Login Error</b></font>"; ?> <input type="text" name ="username" >
			የይለፍ ቃል: <input type="password" name ="password" >
			<input type="Submit" name="send" value ="አስገባ" >

			<a href="NewUserAccountt.php">አዲስ የደንበኛ መመዝገብያ   </a>
			</form>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->

		<div class="sidebar">
          <div class="sidebar_item">
            <h2>ማስታወቅያዎች</h2>
            <h3>ሰኔ 2008  </h3>
            <p> የዚህ ፕሮጄክት ስራ ላይ ለመዋል የሚያልቅበት በ 2008 ዓ.ም ሰኔ መጨረሻ ላይ ይሆናል.</p>
          </div><!--close sidebar_item-->
        </div><!--close sidebar-->
        <!--close sidebar-->
      </div>
	  <!--close sidebar_container-->

	  <div id="content">
        <div class="content_item">
		  <h2><strong>የደብረ ብርሃን ከተማ የንጽሁ ዉሃ አገልገሎት መስሪያቤት ዋና አገልግሎቶች</strong></h2>
		  <p align="justify">ይህ የገንዘብ ተቀባይ ክፍል ዋናዉ ስራዉ የደንበኛን አገልግሎቶችን የሚመለከት የሂሳብ ስሌቶችን ይሰራል፡፡</p>

		  <div class="content_image">
		    <img src="images/lll.jpg" alt="image1" width="199" height="185"/>	      </div>
		  <h2 align="justify"><span class="style4">የሂሳብ ሰራተኛ የዚህ ክፍል ሃላፊ ሲሆን የሚከተሉት የስራ ድርሻዎች አሉት</span>:-</h2>
		  <ul>
		    <li>የዚህ ክፍል የሂሳብ ሰራተኛ የፋይናንስ የሚመለከቱትን ነገሮና እና ደንበኞች የሚከፍሉት ማንኛዉም ክፍያ የተጣራ፤ ትክክለኛ እና ተገቢ መሆኑን ይከታተላል .</li>
	        <li>. </li>
		  </ul>
		  <p align="justify">&nbsp; </p>
		  <p>&nbsp;</p>
		  <br style="clear:both"/>

		  <div class="content_image">
		    <img src="images/22.jpg" alt="image1" width="650" height="150"/><br style="clear:both"/>
		    <!--close content_container-->
            <!--close content_container-->
        </div>
	    </div>
        <!--close content_item-->
      </div><!--close content-->
	</div><!--close site_content-->

</div><!--close main-->

  <div id="footer">
	  <div align="center"><p>© የቅጂ መብት 2016 | www.dbcws.et</p></div>
  </div>
  <!--close footer-->

</body>
</html>
