<?php
	session_start();
?>
<html>
<head>
<style>
 body {
      font: 300 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
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

	<div class="feat_prod_box_details">
			
					<center>
					<div class="contact_form">
						<div class="form_subtitle"><h1>Add new Trek</h1></div>
						<form name='registration'  action="savetrek.php" method="post" enctype="multipart/form-data">
						<table>
							<tr>
							<td></td>
							<td><input type="file" name="file" /><br></td>
							</tr>

							<tr>
							<td>Trek name:</td>
							<td><input type="text" name="tname" size="30" /><br></td>
							</tr>
													
							<tr>
							<td>Duration:</td>
							<td><textarea type="text" name="tduration" size="30" ></textarea><br></td>
							</tr>
																		
							
							<tr>
							<td>Difficulty</td>
							<td><input type="text" name="tdiff" size="30" /><br></td>
							</tr>
													
							<tr>
							<td>Charges:</td>
							<td><input type="text" name="tcharges" size="30" /><br></td>
							</tr>
							
							<tr>
							<td>Iternary:</td>
							<td><textarea type="text" name="titernary" size="1000" ></textarea><br></td>
							</tr>
							
							<tr>
							<td></td><td><input type="submit" name="submit" class="register" value="Submit" />
							</td>
							</tr>
							
						</table>
						</form>
					</div>
					</center>
				</div>

</body>
</html>