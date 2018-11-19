<!DOCTYPE html>
<?php
session_start();
error_reporting(1);
if($_SESSION['sid']=="")
{
header('Location:index.php');
}
$id=$_SESSION['sid'];
?>
<html>
<title>HandWritten</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<html lang="en">
<head>
  
  <title>HandWritten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
/*Style for footer icons */
img.icon{
	height: 30px;
	width: auto;
}
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 100px;}
  .bg-1 { 
      background-color: #FF4500; /* Orange */
      color: #FFFFFF;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #FF4500;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  ul
  {
   position: -webkit-sticky; /* Safari */
    position: sticky;
  }

  </style>
</head>
<?php
$chk=$_GET['chk'];
	if($chk=="logout")
	{
	unset($_SESSION['sid']);
	header('Location:index.php');
	}
?>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default bg-1" >
  <div class="container ">
    <div class="navbar-header ">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	<button id="openNav" class="w3-button w3-xlarge" onclick="w3_open()">&#9776;</button>
      <a class="navbar-brand" href="home.php"><font color="white">HandWritten</font></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav navbar-centre " position: sticky>
	<li><a href="index.php"></a></li>
        <li ><a href="home.php?chk=chngPass"><font color="white">CHANGE PASSWORD</font></a></li>
       
        <li><a href=""></a></li>
        <li><a href="home.php?chk=logout"><font color="white">LOGOUT</font></a></li>
	
      </ul>
    </div>
  </div>
</nav>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <font color="orange"><button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button></font>
  <font color="orange"><a href="home.php?chk=compose" class="w3-bar-item w3-button">Compose</a></font>
  <font color="orange"><a href="home.php?chk=inbox" class="w3-bar-item w3-button">Inbox</a></font>
  <font color="orange"><a href="home.php?chk=sent" class="w3-bar-item w3-button">Sent</a></font>
  <font color="orange"><a href="home.php?chk=draft" class="w3-bar-item w3-button">Draft</a></font>
</div>

<div id="main" class="bg-3">

<?php
		@$id=$_SESSION['sid'];
		@$chk=$_REQUEST['chk'];
			if($chk=="compose")
			{
			include_once('compose.php');
			}
			if($chk=="sent")
			{
			include_once('sent.php');
			}
			if($chk=="inbox")
			{
			include_once('inbox.php');
			}
			if($chk=="chngPass")
			{
			include_once('chngPass.php');
			}
			if($chk=="draft")
			{
			include_once('draft.php');
			}
			
		?>
		
		<!--inbox -->
		<?php
		$id=$_SESSION['sid'];
		@$coninb=$_GET['coninb'];
			
			if($coninb)
			{
			$sql="SELECT * FROM usermail where rec_id='$id' and mail_id='$coninb'";
			$dd=mysqli_query($con,$sql);
			$row=mysqli_fetch_object($dd);
			echo "Subject :".$row->subject."<br/>";
			echo "Message :".$row->message;
			}
			
			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		
		$d="DELETE from usermail where mail_id='$v'";
		mysqli_query($con,$d);
		}
		echo "msg deleted";
	}
			
		?>
		
		
		
	<!--sent box-->
	<?php
		$id=$_SESSION['sid'];
		@$consent=$_GET['consent'];
			
			if($consent)
			{
			$sql="SELECT * FROM usermail WHERE sen_id='$id' and mail_id='$consent'";
			$dd=mysqli_query($con,$sql);
			$row=mysqli_fetch_object($dd);
			echo "Subject :".$row->subject."<br/>";
			echo "Message :".$row->message;
			}
			
			
	@$cheklist=$_REQUEST['ch'];
	if(isset($_GET['delete']))
	{
		foreach($cheklist as $v)
		{
		$d="DELETE from usermail where mail_id='$v'";
		mysqli_query($con,$d);
		}
		echo "msg deleted";
	}
			
		?>
</div>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p ><font color="orange">Website Made By <a href="https://www.w3schools.com">Shubham Kale</font></a></p>
  <div class="footer3">
            All rights reserved<br/><br/> 
            <span>
            Follow us @ 
            <a href="https://www.facebook.com/shubham.kale.9237" onclick="target='_blank'"> <img src="img/fb.png" alt="Facebook" class="icon" title="Click here to follow us on Facebook"/> </a>
            <a href="https://www.linkedin.com/in/shubhamkale31/" onclick="target='_blank'"> <img src="img/li.png" alt="LinkedIn" class="icon" title="Click here to follow us on LinkedIn"/> </a>
            <a href="https://twitter.com/sinukalehere" onclick="target='_blank'"> <img src="img/twit.png" alt="Twitter" class="icon" title="Click here to follow us on Twitter"/> </a>
            <a href="https://www.instagram.com/shubh_kale/" onclick="target='_blank'"> <img src="img/insta.png" alt="Instagram" class="icon" title="Click here to follow us on Instagram"/> </a>
            </span>
        </div> 
</footer>
</body>
</html>
