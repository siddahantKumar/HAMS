<!DOCTYPE html>
<html lang="en">
<head>
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
          <li ><a href="HomePage.php" class="m1">Home Page</a></li>
          <li ><a href="Hprofile.php" class="m2">Profile</a></li>
          <li><a href="notification.php" class="m3">Notification</a></li>
          <li><a href="mess.php" class="m4">Mess Menu</a></li>
          <li class="current last"><a href="Hsiteinfo.php" class="m5">Hostel Information</a></li>
        </ul>
      </nav>
	  
 </div>
 
  <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(24.9201514, 67.0520778),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
  </header>
  <div class="container">
    <aside>
      <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="LeaveApplication.php">Apply For Leave</a></span></li>
        <li><span><a href="#">Search a Mate</a></span></li>
		<li><span><a href="EntryRegister.php">Entry Register</a></span></li>
        <li><span><a href="roster.php">Roster</a></span></li>
		<li><span><a href="attendance.php">View Attendance</a></span></li>
		<br></br>
		<br></br>
		<br></br>
		<h2><li class="last"><a href="index.php">LOGOUT</a></li></h2>
              </ul>
    </aside>
    <section id="content">
    <p>
	  <i>
	  <b>
 
		This Hostel Management and Allotment System is Developed by Siddahant Kumar and Ali Akbar in 2020
		to provide web-based portal between Hostellers and Warden of FAST University. It is tried
		to manage every facility on line to Hostel Rentors and Management
		Committee. In short, It is tried to substitute File Management with E-Database and 
		to provide a better user Interface.
		</b>
		</i>
		</P >
		<div id="map"></div>
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
