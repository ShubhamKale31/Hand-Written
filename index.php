<!DOCTYPE html>

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
.carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #FF4500 !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }  
/*Style for footer icons */
img.icon{
	height: 30px;
	width: auto;
}	
  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Navbar -->
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
  
        <?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<?php
	}
	if($chk==2)
	{
	header('location:register.php');
	}
	if($chk==1)
	{
	header('location:login.php');
	}
	
	?>
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/handwritten.gif" alt="Handwritten" width="100" height="600">
        <div class="carousel-caption">
          <h3>HandWritten</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="img/compose1.png" alt="Compose" width="1000" height="600">
        <div class="carousel-caption">
          <h3>Compose</h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/access.png" alt="Access" width="1000" height="600">
        <div class="carousel-caption">
          <h3>Access</h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
  <div  id="footer" class="footer3">
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









