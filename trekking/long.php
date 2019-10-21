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
  h4
  {
	color: #239B56;
  }
  div.implinks,div.ouractivities
{
		 font-family: Montserrat, sans-serif;
		  background-color: #239B56;
		  font-size: 12px !important;
         line-height: 1.42857143 !important;
		     border-radius: 5px;
		 
}
.title{
	font-size:16px;
	font-weight:bold;
	color:#4b3c30;
}
div.implinks ul{
	list-style-type:none;
	padding-top:5px;
	padding-left:15px;
	padding-right:15px;
}

div.implinks ul li{
	display:inline-block;
	padding-bottom:9px;
	padding-top:9px;
	text-align:left;
	margin-right:6px;
}

div.implinks ul li a{
	font-size:13px;
	font-weight:bold;
	color:#FFFFFF;
}

div.implinks ul li a:hover{
	font-size:13px;
	font-weight:bold;
	color:#4b3c30;
	text-decoration:underline;
}
div.ouractivities ul{
	list-style-type:none;
}

div.ouractivities ul li{
	display:list-item;
	margin-left:15px;
	margin-top:8px;
}

.ouractivitiestitle{
	margin-top:8px;
	margin-bottom:15px;
	margin-left:15px;
	font-size:16px;
	font-weight:bold;
	color:#4b3c30;
}

.activity tr{
	height:29px;
}

.activity td{
	color:#4b3c30;
	font-family:Calibri;
	width:150px;
	font-size:18px;
}
  </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
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
<br><br><br><br><br>
  <div class="container">
	<?php
		$db = mysqli_connect("localhost", "root", "", "user");
		$sql="SELECT id,image,tname FROM longtrek";
		$result=mysqli_query($db,$sql);
	
		echo "<table>";
		
		while($row=mysqli_fetch_array($result))
		{
				$id=$row['id'];
				echo "<tr>";
					echo "<td>";
						echo "<a href='details.php?page=$id'><img height='250px' width='600px' src='images/".$row['image']."'/></a>";
						echo "<br>";
						echo "<p>".$row['tname']."</p>";
					echo "</td>";
				echo "</tr>";
	
		}
		echo "</table>";
		
	?>
            		
    </div>
	</body>
	</html>