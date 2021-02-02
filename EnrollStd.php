<!DOCTYPE html>
<html lang="en">
<head>
<style >
body 
{background-color:   white ;

}

.login {
    width: 600px;
    height: 900px;
    overflow: hidden;
    background: #1e;
    border-radius: 6px;
    margin: 50px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

.login .titulo {
    width: 298px;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: #121212;
    border: #2d2d2d solid 1px;
    margin-bottom: 30px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    font-family: Arial;
}

.login form {
    width: 240px;
    height: auto;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
}

.login form input[type=text], .login form input[type=password] {
    width: 200px;
    font-size: 12px;
    padding-top: 14px;
    padding-bottom: 14px;
    padding-left: 40px;
    border: none;
    color: #bfbfbf;
    background: #141414;
    outline: none;
    margin: 0;
}

.login form input[type=text] {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-top: #0b0b0b solid 1px;
    background: #141414 url(http://dev.dhenriquez.com/test-img/icons/111-user.png) 10px center no-repeat;
}

.login form input[type=password] {
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top: #0b0b0b 1px solid;
    border-bottom: #353535 1px solid;
    background: #141414 url(http://dev.dhenriquez.com/test-img/icons/54-lock.png) 10px center no-repeat;
}


.login form .enviar {
    width: 240px;
    height: 12px;
    display: block;
    padding-top: 14px;
    padding-bottom: 14px;
    border-radius: 6px;
    border: none;
    border-top: #4eb2a8 1px solid;
    border-bottom: #161616 1px solid;
    background: #349e92;
    text-align: center;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    color: #FFF;
    text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
    font-family: Arial;
}

.login .olvido {
    width: 240px;
    height: auto;
    overflow: hidden;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 10px;
    text-align: center;
}

.login .olvido .col {
    width: 50%;
    height: auto;
    float: left;
}

.login .olvido .col a {
    color: #fff;
    text-decoration: none;
    font: 12px Arial;
}

/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block }

body { line-height: 1 }

ol, ul { list-style: none }

blockquote, q { quotes: none }

blockquote:before, blockquote:after, q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

</style>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
          <li ><a href="WHomePage.php" class="m1">Home Page</a></li>
          <li><a href="profile.html" class="m2">Profile</a></li>
          <li><a href="notification.html" class="m3">Notification</a></li>
          <li><a href="modifymess.php" class="m4">Mess Menu</a></li>
          <li class="last"><a href="siteinfo.html" class="m5">Hostel Information</a></li>
        </ul>
      </nav>
 </div>
  </header>
  <div class="container">
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="LeaveLog.php">Leave Log</a></span></li>
        <li><span><a href="viewentry.php">Show Entry Register</a></span></li>
        <li><span><a href="Wattendance.php">View Attendance</a></span></li>
        <li><span><a href="StdRecord.php">Student Record</a></span></li>
        
        <li><span><a href="EnrollStd.php">Enroll a student</a></span></li>
		<li><span><a href="RoomAllocation.php">Room Allocation</a></span></li>
		<li ><span><a href="RoomMgmt.php">Room Management</a></span></li>
		<br></br>
		<br></br>
		<br></br>
		<h2><li class="last"><a href="index.php">LOGOUT</a></li></h2>
		
      </ul>
    </aside>
    <section id="content">

<section class="login">
	<div class="titulo">Enroll A Student</div>
	<form action="" method="post" >

    	<input type="text" name="Name"  placeholder="Hostelier Name" >
		<br> </br>
		<input type="text" name="HID"  placeholder="Hostelier ID" >
		<br> </br>
	
        <input type="password" name="Hpassword"  placeholder="Password" >
       <br> </br>
	   <input type="text" name="Email" placeholder="Email" >
		<br> </br>
		
       Graduate:<input type="radio" name="education" value="graduate">
       Undergraduate:<input type="radio" name="education" value="undergraduate">
	   <br></br>
	    Birthdate:<input type="date" name="Birthdate"  placeholder="Birthdate" >
       <br> </br>
	    <input type="text" name="Address"  placeholder="Address" >
       <br> </br>
	    <input type="text" name="HCNIC"  placeholder="HCNIC" >
       <br> </br>
           <input type="text" name="Degree"  placeholder="Degree" >
       <br> </br>
	    EnrollDate:<input type="date" name="EnrollDate"  placeholder="Enroll date" >
       <br> </br>
	    <input type="text" name="MessId"  placeholder="Mess ID" >
       <br> </br>
	    <input type="text" name="FloorNo"  placeholder="FloorNO" >
       <br> </br>
	    <input type="text" name="RoomNo"  placeholder="RoomNO" >
       <br> </br>
	   
	   <a class="enviar"><input type="Submit" name="Submit"> </a>
    </form>
</section>

<?php
		if(isset($_POST['Submit'])){	
			 
			 echo "<br>";
		 $deg=$a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k=$l="";
		 if(isset($_POST['Submit'])){
			 if(isset($_POST['Name']))
				 $a=$_POST['Name'];
			 if(isset($_POST['HID']))
		 $b=$_POST['HID'];
		 if(isset($_POST['Hpassword']))
		 $c=$_POST['Hpassword'];
	 if(isset($_POST['Email']))
				 $d=$_POST['Email'];
			 if(isset($_POST['education']))
				 $e=$_POST['education'];
			 if(isset($_POST['Birthdate']))
				 $f=$_POST['Birthdate'];
			 if(isset($_POST['Address']))
				 $g=$_POST['Address'];
			 if(isset($_POST['HCNIC']))
				 $h=$_POST['HCNIC'];
			  if(isset($_POST['Degree']))
				 $deg=$_POST['Degree'];
			 if(isset($_POST['EnrollDate']))
				 $i=$_POST['EnrollDate'];
			 if(isset($_POST['MessId']))
				 $j=$_POST['MessId'];
			 if(isset($_POST['FloorNo']))
				 $k=$_POST['FloorNo'];
			 if(isset($_POST['RoomNo']))
				 $l=$_POST['RoomNo'];
			 
			 
		 }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hams";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `hams`.`hostelier` (`HID`,`Hpassword`,`Hemail`,`BDate`,`Heducation`,`Haddress`,`HNIC`,`HName`,`enrollDate`,`Degree`,`messID`,`FloorNo`,`RoomNo`)
 VALUES ('$b', '$c', '$d', '$f', '$e', '$g','$h','$a','$i','$deg','$j','$k','$l')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>record inserted successfully</h1>";
} else {
    echo "" ;
}
$conn->close();

			 }	 		 
?>	
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2020 - All Rights Reserved</p>
    <p class="rf">Designed by:  <a href="#">Siddahant Kumar</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
