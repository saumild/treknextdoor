<?php



if($_POST['submit'])
{
	$target="./images/".basename($_FILES['file']['name']);

$conn = mysql_connect("localhost","root","");
$db=mysql_select_db("user", $conn);	

$image=$_FILES['file']['name'];
$tname=$_POST['tname'];
$tduration=$_POST['tduration'];
$tdiff=$_POST['tdiff'];
$tcharges=$_POST['tcharges'];
$titernary=$_POST['titernary'];	

//inserting data order
 $sql = "INSERT INTO longtrek (id,image,tname,tduration,tdiff,tcharges,titernary) VALUES ('$image','$tname', '$tduration', '$tdiff', '$tcharges', '$titernary')";
 
$query = mysql_query($sql) or die(mysql_error());	//order executes
//echo $query;
if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
{
	$msg="Image uploaded successfully";
}
else{
	$msg="There was a problem uploading the image";
}
if(!$query){
	echo "Failed";
} else{
	header("location:xyz.php");
	} 
}



//declare in the order variable

?>