<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";
$name=$_POST["UserName"];
$email=$_POST["EmailId"];
$mob=$_POST["Mobile"];
$exp=$_POST["textarea"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO feed (name,email,mob,exp) VALUES ('$name', '$email', '$mob', '$exp')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header("location:trkf.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<br>			
</body>
</html>