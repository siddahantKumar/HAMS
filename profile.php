<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body 
{background-color:   white ;

}


.login {
    width: 250px;
    height: auto;
    overflow: hidden;
    background: #1e;
    border-radius: 6px;
    margin: 50px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}
.button {
    width: 500px;
    height: 20px;
    overflow: hidden;
    background: #1e;
    border-radius: 6px;
    margin: 10px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

.login .loginhead {
    width: 250px;
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


.enviar {
    width: 180px;
    height: 20px;
    padding-top: 10px;
    padding-bottom: 25px;
    border-radius: 10px;
    border: none;
    border-top: #4eb2a8 1px solid;
    border-bottom: #161616 1px solid;
    background: #008cc4;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    color: #FFF;
    text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
    font-family: Arial;
	margin-left: 35px;
}
.myheading {
    width: 600px;
    height: 10px;
    padding-top: 10px;
    padding-bottom: 25px;
    border-radius: 10px;
    border: none;
    border-top: #4eb2a8 1px solid;
    border-bottom: #161616 1px solid;
    background: #333333;
    text-align: center;
    text-decoration: none;
	
    font-size: 20px;
    font-weight: bold;
    color: #FFF;
    text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
    font-family: lucida calligraphy;
	margin-left: 10px;
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

table,th,td,tr {
    width:50%;
    table border:2px;
	border: 1px solid black
	cell-padding:3px;
	
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
          <li class="current"><a href="profile.php" class="m2">Profile</a></li>
          <li><a href="createnotification.php" class="m3">Notification</a></li>
          <li><a href="modifymess.php" class="m4">Mess Menu</a></li>
          <li class="last"><a href="siteinfo.php" class="m5">Hostel Information</a></li>
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
     	<?php
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
if(!isset($_POST['edit'])){
$ID=$_SESSION['user'];
$query="SELECT * FROM `employee` where eId='$ID'";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$row = mysqli_fetch_row($result);


echo <<<_END

ID: $row[0] <br>
NAME: $row[1] <br>
Salary: $row[3] <br>
Contact: $row[4] <br>
Address:$row[5] <br>
Email: $row[7] <br>

_END;
}
if(!isset($_POST['edit'])){
echo <<<_END
<form action="profile.php" method="post">
<input class ="enviar" type="submit" name="edit" value="Change Password">
</form>
_END;
}
if(isset($_POST['edit']) ){
echo <<<_END
<section class="login" >
<div class="loginhead">change password</div>
<form action="profile.php" method="post">
<input type="password" size="25" name="oldpass" placeholder="Old Password">
<br><br>
<input type="password" size="25" name="newpass" placeholder="new Password">
<br><br>
<input type="password" size="25" name="confpass" placeholder="Confirm Password">
<br><br>
<input class ="enviar" input type="submit" name="submit" value="UPDATE"></form>
<br><br>
</section>
_END;
}
$old= "";
$new= "";
$conf= "";
if(isset ($_POST['submit']) && $_POST['oldpass'] &&$_POST['newpass']&&$_POST['confpass']){
$old=$_POST['oldpass'];  
$new=$_POST['newpass'];  
$conf=$_POST['confpass'];
$ID=$_SESSION['user'];
$sql = "SELECT ePass FROM `employee` where eId='$ID'";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$pas=$row['ePass'];
if($old===$pas && $new===$conf){
$sql="UPDATE `employee` SET `ePass` = '$new' WHERE `employee`.`eId` = '$ID';
";
if (mysqli_query($conn, $sql)) {
    echo "Password Changed";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
}

else{
	echo "you entered wrong password";
}
}
$conn->close();

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
