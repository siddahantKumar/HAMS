<?php
session_start();

?><html>
<body>
<head>
<title>Hostel Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
.modal {
  display:block;
}
body {
    background-color:lightblue;
	background-image:url("images/loginback.jpg");
}

.login {
    width: 300px;
    height: 300px;
    overflow: hidden;
    background: white;
    border-radius: 6px;
    margin: 50px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

.login .titulo {
    width: 300px;
    height: auto;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: green;
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
    border: 10px;
    color: #bfbfbf;
    background: #223344;
    outline: none;
    margin: 0;
}

.login form input[type=text] {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
	margin-left: 24px;
    border-top: #0b0b0b solid 1px;
    background: #141414 url(http://dev.dhenriquez.com/test-img/icons/111-user.png) 10px center no-repeat;
}

.login form input[type=password] {
    border-bottom-left-radius: 6px;
	margin-left: 24px;
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

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}






</style>
</head>
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
	 if(isset($_POST['Submit']) && isset($_POST['id']) && isset($_POST['pswd'])){
		
		$pswd= $_POST['pswd'];
		 $id= $_POST['id'];
		 
$sql1 = "SELECT * FROM employee where eId='$id' and ePass='$pswd'";
$sql2 = "SELECT * FROM hostelier where HID='$id' and Hpassword='$pswd'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0 ) {
	Echo "Warden";
	$_SESSION['user']=$id;
	header("location: WHomePage.php");
	
	$_POST=array();
 } else 
	if ($result2->num_rows > 0)
	{Echo "Student";
$_SESSION['user']=$id;
header("location: HomePage.php");
	$_POST=array();

		}
	else{
echo <<<_END
<body 
onLoad="$('#my-modal').modal('show');">

  <!-- Modal -->
  <div class="modal fade" id="my-modal"  role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">INVALID LOGIN</h4>
        </div>
        <div class="modal-body">
          <p>ID and Password You Entered did not Match!!! </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>

_END;
		
		
	}
    $_POST=array();

	 }


if(true){
echo <<<_END
<section class="login">
	<div class="titulo">USER LOGIN PANEL</div>
	<form action="index.php" method="post" >
	   <input type="text" name="id" placeholder="ID" >
	   <br> </br>
		<input type="password" name="pswd" placeholder="Password" >
		 <br> </br>
       <input class="enviar"  type="Submit" name="Submit" value="Login"> 
    </form>
</section>
_END;
}
	?>		
			 
</body>
</html>