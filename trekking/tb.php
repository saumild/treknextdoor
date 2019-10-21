<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$fn=$_POST["fn"];
$mn=$_POST["mn"];
$ln=$_POST["ln"];
$name1=$_POST["name1"];
$e1=$_POST["e1"];
$e2=$_POST["e2"];
$pass=$_POST["pass"];
$adb=$_POST["text"];
$tel=$_POST["tel"];
$mob=$_POST["mob"];
$mob1=$_POST["mob1"];
$mob2=$_POST["mob2"];
$mob3=$_POST["mob3"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO login (firstname,middlename,lastname,name1,email1,email2,password,comment,tel2,mob,tel,mob1,tel1,dob,gender) VALUES ('$fn', '$mn', '$ln', '$name1', '$e1', '$e2', '$pass', '$adb', '$tel', '$mob', '$mob1', '$mob2', '$mob3', '$dob', '$gender')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br>
<br>
		
						
</body>
</html>