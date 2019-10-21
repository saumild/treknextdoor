<?php
	session_start();
?>

<html lang="en">
<head>
  <title>TREK NEXT DOOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
	 body {
      font: 300 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  
	.jumbotron {
      background-color: #239B56;
      color: #fff;
      padding: 35px 9px;
      font-family: Montserrat, sans-serif;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #239B56;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #239B56 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  h2 { 
   position: absolute; 
   top: 100px; 
   left: 550; 
   width: 100%; 
   color:white;
   text-align:center;
}
  
  </style>
  </head>
 <body>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #239B56">
  <div class="container">
    <div class="navbar-header">
      
      <img src="logo1.jpg" class="img-rounded" alt="mount" width="150" height="65">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php
		if(isset($_SESSION['user']))
		{ ?>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">GALLARY</a></li>
        <li><a href="contact.html">CONTACT</a></li>
		<li><a href="sign.php">SIGNUP</a></li>
		<li><a href="logout.php">LOGOUT</a></li>
	  </ul>
			
	<?php	}else{ ?>
		<ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">GALLARY</a></li>
        <li><a href="contact.html">CONTACT</a></li>
		<li><a href="sign.php">SIGNUP</a></li>
		<li><a href="login.php">LOGIN</a></li>
	  </ul>
	<?php } ?>	
    </div>
  </div>
</nav>
</body>
</html>