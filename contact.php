<?php
if(isset($_POST['name']))
{
$servername = "localhost";
$username = "id20151106_trial";
$password = "qwertyuiopAPS-1";
$dbname = "id20151106_trial1";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if ($name==""){
	echo("The name cannot be blank.");
}
elseif ($email==""){
	echo("The email address cannot be blank.");
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo("The email '".$email."' is not a valid email.");
}
elseif ($message==""){
	echo("The message cannot be blank.");
}
else {
	$sqlquery = "INSERT INTO `contact` (`name`,`email`,`sub`,`dsc`) VALUES ('$name','$email','$subject','$message')";

	$rs=mysqli_query($conn, $sqlquery);

	if($rs)
	{
		echo "Message Sent! We'll get back to you shortly!";
	}
}
}
?>
