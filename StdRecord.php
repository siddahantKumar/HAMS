<!DOCTYPE html>
<html lang="en">
<head>
<style >
body 
{background-color:   white ;

}


.login {
    width: 250px;
    height: 200px;
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
          <li><a href="profile.php" class="m2">Profile</a></li>
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
		<li class="last"><span><a href="RoomMgmt.php">Room Management</a></span></li>
		
      </ul>
    </aside>
    <section id="content">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli ($servername, $username, $password,"hams");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


echo <<<_END
<section class="login">
<div class="loginhead">View Student Record</div>
<form action="StdRecord.php" method="post">
ENTER ID: <input type="text" name='HID' placeholder="YYRRRR"><br> <br>
<input class ="enviar" type="submit" name="check" value="CHECK RECORD">
</form>
</section>
_END;

if(isset($_POST['HID']) && isset($_POST['delete']) )
{	$HID=$_POST['HID'];

	$sql = "delete from hostelier where HID='$HID'";


	if ($conn->query($sql) === TRUE) {
    echo "Student Record Deleted successfully";
	}
	else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
if(isset($_POST['HID']) && isset($_POST['edit']) )
{	$HID=$_POST['HID'];
$sql = "SELECT * FROM `hostelier` where HID='$HID'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$name=$row["HName"];
	$HID=$row["HID"];
	$email=$row["Hemail"];
	$bdate=$row["BDate"];
	$adrs=$row["Haddress"];
	$cnic=$row["HNIC"];
	$edate=$row["enrollDate"];
	$mid=$row["messID"];
	echo <<<_END
	
		<section class="login" style="width:600px; height: 800px">
	<div class="loginhead" style="width: 600px">Edit Profile</div>
	<form action="StdRecord.php" method="post" >

    	<input type="text" name="Name"  value="$name">
		<br> </br>
		<input type="text" name="HID"  value="$HID" >
		<br> </br>
	
        	   <input type="text" name="Email" value="$email" >
		<br> </br>
		
       Graduate:<input type="radio" name="education" value="graduate">
       Undergraduate:<input type="radio" name="education" value="undergraduate">
	   <br></br>
	    Birthdate:<input type="date" name="Birthdate"  value="$bdate" >
       <br> </br>
	    <input type="text" name="Address"  value="$adrs" >
       <br> </br>
	    <input type="text" name="HCNIC"  value="$cnic" >
       <br> </br>
	    EnrollDate:<input type="date" name="EnrollDate"  value="$edate" >
       <br> </br>
	    <input type="text" name="MessId"  value="$mid" >
       <br> </br>
	   <input type="hidden" name="HID" value="$HID">
	   <input class ="enviar" type="submit" name="update" value="UPDATE RECORD"> </a>
	   <br>
    </form>
</section>
		
_END;
	
			 echo "<br>";
		 $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k=$l="";

	
}

}
		 if(isset($_POST['update'])){
			 
			 
			 $HID=$_POST['HID'];
		 $a=$_POST['Name'];
		 $c=$_POST['Birthdate'];
		 $d=$_POST['Email'];
		 $f=$_POST['Name'];
		 $g=$_POST['Address'];
		 $h=$_POST['HCNIC'];
		 $i=$_POST['EnrollDate'];
		 $j=$_POST['MessId'];
		$sql = "update `hams`.`hostelier` set `Hemail`='$d',`BDate`='$c',`HName`='$a',
					`Haddress`='$g',`HNIC`='$h',`enrollDate`='$i',`messID` = '$j'
								           	  where HID='$HID'";
if (mysqli_query($conn, $sql)) {
    echo "<h1>Record Updated Successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}
 

if(isset($_POST['HID']) && isset($_POST['check']) )
{
$HID=$_POST['HID'];
$sql = "SELECT HID, HName,Heducation,HNIC, Haddress,RoomNo,FloorNo,messID,enrollDate FROM `hostelier` where HID=$HID";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	 while($row = $result->fetch_assoc())
	{
		echo "ID:	" . $row["HID"]."<br><br>" . "Name:	" . $row["HName"]. "<br><br>" ."education:	". $row["Heducation"].
		"<br><br>"."NIC:	". $row["HNIC"]. "<br><br>". "Address:	". $row["Haddress"]. "<br><br>" . "Room No:	". 
		$row["RoomNo"]. "  Floor No:	".
		$row["FloorNo"]. "<br><br>"."Mess ID:	". $row["messID"]. "<br><br>". "Enroll Date:	". $row["enrollDate"];
	}
			echo <<<_END
<br><br>

<form action="StdRecord.php" method="post">
<input type="hidden" name="HID" value="$HID">
<input class ="enviar" type="submit" name="delete" value="DELETE RECORD">
<input class ="enviar" type="submit" name="edit" value="EDIT RECORD">
</form>

_END;
	
}
else {
    echo "No Record Found";
}

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
