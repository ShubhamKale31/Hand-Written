<!DOCTYPE html>

<html lang="en">
<?php
session_start();
include_once('connection.php');

if(isset($_POST['signIn']))
{
	if($_POST['id']=="" || $_POST['pwd']=="")
	{
	$err="Fill your username and password first";
	}
	else
	{
	$d=mysqli_query($con,"SELECT * FROM info WHERE username='{$_POST['id']}'");
	$row=mysqli_fetch_object($d);
		$fid=$row->username;
		$fpass=$row->pwd;
		if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
		{
		$_SESSION['sid']=$_POST['id'];
		header('location:home.php?chk=compose');
		}
		else
		{
		$err="Invalid username or password";
		}
	}
}
?>
<head>
  
  <title>HandWritten</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 100px;}
  .bg-1 { 
      background-color: #FF4500; /* Orange */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
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
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
/*Style for footer icons */
img.icon{
	height: 30px;
	width: auto;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default bg-1" >
  <div class="container ">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><font color="white">HandWritten</font></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav navbar-centre " position: sticky>
	<li><a href="index.php"></a></li>
        <li ><a href="index.php"><font color="white">HOME</font></a></li>
        <li><a href="#footer"><font color="white">ABOUT US</font></a></li>
        <li><a href="index.php?chk=1"><font color="white">LOGIN</font></a></li>
	<li><a href="index.php?chk=2"><font color="white">NEW USER</font></a></li>
	<li><a href="index.php?chk=3"></a></li>
	<li><a href="#footer"><font color="white">CONTACT US</font></a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-3 text-center">
<h2>Login Form</h2>

<form method="post">
  <div class="imgcontainer">
    <img src="handwritten.gif" alt="HandWritten">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="id" required></br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required></br>
        
    <button type="submit" name="signIn">Sign In</button>
    <label for="register"><a href="http://localhost/index.php?chk=4">Create Account?</label></a>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label></br>
  </div>

  <div class="container" style="background-color:#f1f1f1">
   
   
  </div>
</form>


</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p ><font color="orange">Website Made By <a href="https://www.w3schools.com">Shubham Kale</font></a></p>
  <div id="footer" class="footer3">
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









