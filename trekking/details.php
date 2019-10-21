<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Library Recsys</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/java.js"></script>
</head>
<body>
       
<?php 
include('header.php');	   
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="user"; // Database name 
$tbl_name="longtrek"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
//$tname = $_GET['tname'];

$page=$_GET['page'];
$page=$page-1;
$sql="SELECT tname,tduration,tdiff,tcharges,titernary FROM $tbl_name limit $page,1";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$count=mysql_num_rows($result);
	
		echo "<table>";
				echo "<tr>";
					echo "<td>";
						echo "<p>".$row['tname']."</p>";
						echo "<p>".$row['tduration']."</p>";
						echo "<p>".$row['tdiff']."</p>";
						echo "<p>".$row['tcharges']."</p>";
						echo "<p>".$row['titernary']."</p>";
					echo "</td>";
				echo "</tr>";
		echo "</table>";	   
	
?>
       
	   
</body>
</html>