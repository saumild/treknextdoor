<?php	
	
	require 'connection.php';
	
	$user=$_POST['unametxt'];
	$pass=$_POST['pwdtxt'];
//to escape mysql injections	
$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
	
	$query = mysql_query("SELECT * FROM login WHERE email1 = '$user' AND password = '$pass' ");
	
	if(!mysql_query)
	{
		die(mysql_error());
	}
	$row = mysql_fetch_array($query);
	$check =mysql_num_rows($query);
	
	if($check==1)
	{
		session_start(); 
		$_SESSION['user']=$row['user'];
		
		header('location:aftrlo.html');
		
	}
	else
	{
		if($user=="Admin@gmail.com" && $pass=="admin123") 
		{
			$_SESSION['user'] = "Admin";
			header("location:add_trek.php");
		}
		else {
			echo "Wrong Username or Password";
		}
	}

?>
