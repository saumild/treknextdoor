<?php

	session_start();
//	echo $_SESSION['user'];
?>
<!DOCTYPE html>
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
.upcomingevents
{
		 font-family: Montserrat, sans-serif;
		  background-color: #239B56;
		  font-size: 12px !important;
         line-height: 1.42857143 !important;
		     border-radius: 5px;
		 
}
.upcomingevents li p
{
	color: #fff !important;
}
li{
	
	color: #fff !important;

}
a
{
	color: #fff !important;
	font-size: 15px!important;
    
}	 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
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

<div class="jumbotron text-center">
  <h1>TREK NEXT DOOR</h1>
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="trekh.jpg" alt="Chania" width="560" height="400">
        <div class="carousel-caption">
          <h3>TREKKING</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="treke.jpg" alt="Chania" width="560" height="400">
        <div class="carousel-caption">
          <h3>CAMPS</h3>
          
        </div>
      </div>
    
      <div class="item">
        <img src="treks.jpg" alt="Flower" width="560" height="400">
        <div class="carousel-caption">
          <h3>JUNGLE SAFARI</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="trekw.jpg" alt="Flower" width="560" height="400">
        <div class="carousel-caption">
          <h3>RIVER RAFTING</h3>
       
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
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h3>About Us</h3><br>
      <p>TREK NEXT DOOR - Mulund Trekkers Trek next door is an organisation with a commitment to 
	  promise adventurous activities and to beckon the spirit of adventure in the youth and in general
	  of the country. It is committed to promote awareness towards nature, environmental protection, 
	  brotherhood and national integration.
			The organisation conducts various programs throughout the year which includes Trekking, Rock Climbing,
	  Rappelling, River Crossing, Jummaring, Night Trek, Star Gazing, Field Cooking, Caving, Jungle Games,
	  Use of Mountaineering Equipments & Ropes, Nature Study, Scuba Diwing, Para Sailing, Water Sports, Slide Shows,
	  Camp Fire, River Rafting, etc.</p>
	</div>
   <div class="col-sm-4">
      <div class="upcomingevents">
    	<ul>
        	<li class="title"><h3><b>Upcoming Events</b></h3></li><hr>
			<marquee direction="up" scrollamount="2" onmouseover="this.stop();" onmouseout="this.start();" height="200px" style="height: 200px;">
            <li class="upcomingtext"><a href="refreshers-zone.htm"><b>REFRESHER'S ZONE</b><br> <b>( FOR 08 YEARS TO 18 YEARS AGE )</b>
            <p>1. Mount Abu Camp</p>
             <p>2.Panchagani Camp</p><p>3.Teen Spl. Matheran</p>
			</a></li><li class="upcomingtext"><a href="ssc-hsc.htm"><b>SSC HSC SPECIAL CAMPS</b><br><b> ( For 14 years to 20 years of age )</b>
            <p>1. Matheran Camp</p>
            <p>2. Dandeli Camp</p>
            <p>3. Refreshing Goa</p>
            <p>4. Dodital Adventure Trek</p>
			<p>5. Exotic Tarkarli</p>
			<p>6. Manali Magic Trek</p>
			<p>7. Beas Kund Trek</p></a></li>
			<li class="upcomingtext"><a href="teeny-zone.htm"><b>TEENY ZONE</b><br> <b>( For 11 years to 16 years of age )</b>
            <p>1. Chail, Shimla Camp</p>
            <p>2. Nainital Camping &amp; Sight - Seeing</p>
            <p>3. Mussoorie Camping, Rafting in Rishikesh</p>
            <p>4. Camping at Manali</p>
			<p>5. Camping at Shitlakhet</p>
			<p>6. Camping at Dandeli</p></a></li>
			<li class="upcomingtext"><a href="hardrock-zone.htm"><b>HARDROCK ZONE</b><br> <b>( For 14 years to 35 years of age </b>
            <p>1. Dodital Adventure Trek (11,575Ft.)</p>
            <p>2. Har-Ki-Doon Trek (12,000Ft.)</p>
            <p>3. Malana Chandrakhani Pass Trek (12,730Ft.)</p>
            <p>4. Kara Lake Trek </p>
            <p>5. Dhana Kunu in Manali (12,000Ft.)</p></a></li>
			<li class="upcomingtext"><a href="hardrock-zone-nx.htm"><b>HARDROCK ZONE NX</b><br> <b>( For 14 years to 35 years of age )</b>
			<p>1. Deo Tiba Base Trek (13,000Ft.)</p>
            <p>2. Hamta Pass Trek (14,700Ft.)</p>
            <p>3. Roopkund Trek (15,700Ft.)</p>
            <p>4. Rupin Pass Trek (15,750Ft.)</p></a></li>
			</marquee>
        </ul>
    </div>
    </div>
  </div>
  

  
  <div class="container" id="services">
  <div class="row">
  <div class="col-sm-6">
  <a href="long.php">
	<img src="im1.jpg" class="img-rounded" alt="mount" width="570" height="450"></a>
	<h2>LONG TREKS</h2>
  </div>
  <div class="col-sm-6">
  <a href="short.php">
  <img src="im3.jpg" class="img-rounded" alt="mount" width="570" height="450"></a>
  <h2>SHORT TREKS</h2>
  </div>
  </div>
  </div>
  <div id="portfolio" class="container-fluid text-center bg-grey">
  
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek1.jpg" alt="Paris" width="400" height="300">
       
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek2.jpg" alt="New York" width="400" height="300">
        
      
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek3.jpg" alt="San Francisco" width="400" height="300">
        
        
      </div>
    </div>
  </div>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek4.jpg" alt="Paris" width="400" height="300">
       
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek5.jpg" alt="New York" width="400" height="300">
        
      
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="trek6.jpg" alt="San Francisco" width="400" height="300">
        
        
      </div>
    </div>
  </div>
  
</body>
</html>
