<!DOCTYPE html>
<html>
<head>

<title>TREK NEXT DOOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
		<script>
			$(document).ready(function(){
			$("#sub").validate({
				rules:{
					tel:
					{
					
						digits:true,
						minlength:10,
						maxlength:10
					},
					mob:
					{
						required:true,
						digits:true,
						minlength:10,
						maxlength:10
					},
					mob1:
					{
					
						digits:true,
						minlength:10,
						maxlength:10
					},
					pass:{
						required:true,
						minlength:5,
						digits:true
					},
					cpass:{
						required:true,
						equalTo:"#pass"
					},
					mob2:
					{
						required:true,
						digits:true,
						minlength:10,
						maxlength:10
					},
				mob3:
				{
				
					digits:true,
					minlength:10,
					maxlength:10
				},
				},
				messages:{
					tel:"Maximum length should be 10",
					mob1:"Maximum length should be 10",
					mob3:"Maximum length should be 10",
					pass:{
						required:"please enter your password",
						minlength:"mininum length should be 5",
						digits:"digit"
					},
					cpass:{
						required:"please re-enter your password",
						equalTo:"not match"
					},
					mob:{
						required:"please enter your phone no",
						maxlength:"Maximum length should be 10"
					},
					mob2:{
						required:"please enter your phone no",
						maxlength:"Maximum length should be 10"
					},
					
				},
				submitHandler:function(form)
				{
					form.submit();
					alert("sucessful");
				}
			});
			});
			$(document).ready(function(){
				$(":reset");
			});
		</script>
<style>
form{
    width: 400px;
    padding: 25px;
    border:25 px solid green;
    margin: 25px
}
div.transbox {
  margin: 100px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.7
}
input,textarea
{
	border:0;
	border-bottom:2px solid #c3c3c3;
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
  .image
  { 
   	position: relative; 
  	 width:100%;
  }
  
</style>
</head>
<body background="logogo.jpg">
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
 <center>
<h2><b>REGISTRATION FORM</b></h2>
<form  id="sub" action="tb.php" method="post" novalidate="novalidate">
<table  align="center"border="border"cellspacing="5" cellpadding="5">
<tr><td><b>FIRST NAME:</b></td>
<td><input type="text" name="fn" border="bottom" placeholder="first name"size="30" required autofocus onunfocus="send()"></td></tr>
<tr><td>
<b>MIDDLE NAME:</b></td>
<td><input type="text" name="mn"placeholder="middle name"size="30" required autofocus></td></tr>
<tr><td>
<b>LAST NAME:</b></td>
<td><input type="text" name="ln"placeholder="last name" size="30" required autofocus></td></tr>
<tr><td><b>PARENT NAME:</b></td>
<td><input type="text" name="name1" size="30" required></td></tr>
<tr>
<td rowspan="2">
<b>EMAIL:</b></td>
<td><input type="email" name="e1" size="30" required></td></tr>
<tr><td><input type="email" name="e2"size="30"></td></tr>
<tr><td><b>PASSWORD:</b></td>
<td><input type="password" name="pass" id="pass" required></td></tr>
<tr><td><b>RE-ENTER PASSWORD:</b></td>
<td><input type="password" name="cpass" id="cpass" required></td></tr>

<tr><td>
<b>ADDRESS:</b></td>
<td><textarea rows="2" cols="35" name="text" align="center" >
</textarea></td></tr>
<tr>
<td>
<b>TELEPHONE NO:</b></td>
<td><input type="tel" name="tel"size="30"></td></tr>
<tr><td rowspan="2">
<b>MOBILE NO:</b></td>
<td><input type="tel" name="mob"size="30" required></td></tr>
<tr><td><input type="tel" name="mob1" size="30"></td></tr>
<tr><td rowspan="2">
<b>PARENT NO:</b></td>
<td><input type="tel" name="mob2"size="30" required></td></tr>
<tr><td><input type="tel" name="mob3" size="30"></td></tr>
<tr><td>
<b>DATE OF BIRTH(YYYY-MM-DD):</b></td>
<td><input type="date" name="dob" value=""size="30" required></td></tr>
<tr><td>
<b>GENDER:</b></td>
<td align="center"><label><input type="radio" name="gender" value="male" checked> Male</label>
  <label><input type="radio" name="gender" value="female"> Female</label></td></tr>
</table>
<input type="submit" name="submit">
<input type="reset" name="reset">

</form>
</center>
</div>
</body>
</html>