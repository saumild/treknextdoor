
!DOCTYPE html>
<html>
<head>

<title>TREK NEXT DOOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
  div.transbox {
  margin: 100px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.7
}
  </style>
  </head>
  <body background="logo2.jpg">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      
      <img src="logo2.jpg" class="img-rounded" alt="mount" width="150" height="65" id="im2">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">GALLARY</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<div class="transbox">
<center><br><br><br><br>



 
   <form name = "loginform" method="POST" action="logins.php" onsubmit="return(regvalidate())">
    
   <h3>EMAIL ID:<br>
	<input type="text" name="unametxt"><br>
	PASSWORD:<br>
	<input type="password" name="pwdtxt"><br>
	<br>
     
     <font color='red'> <DIV id="une"> </DIV> </font> <input type = "submit" value="Login   " /> 
    <input type="button" onclick="location.href='password.html';" value="Forgot password" />

    </form>
    
     <SCRIPT type="Text/JavaScript"> function regvalidate()
      {   
      
        if(document.loginform.unametxt.value=="")  
         {   document.getElementById('une').innerHTML = "User name field should not be empty";   
		     loginform.unametxt.focus();   
             return(false);  
		} 
		if(document.loginform.pwdtxt.value=="")   
		{   document.getElementById('une').innerHTML = "Please type a password";
			loginform.pwdtxt.focus();
			return(false);    
		}
		else    
         {    
		 return(true);    
		 } 
	} </SCRIPT> </center> 
         </body>
</html>