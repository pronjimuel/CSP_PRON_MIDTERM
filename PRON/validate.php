<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";
require('connection.php');

$sql=mysqli_query($con, "SELECT * FROM Register WHERE Id='$username' and password='$encrypted_mypassword'");


$conn = new mysqli($servername.$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error)
}
$sql = "INSERT INTO MYguest (username, password) Values ('pron', '12345')"; 
if($conn->query(sql) == TRUE){
	echo "Log in successful:"
}else{
	echo "ERROR log in" .sql."<br>".$conn->error;
}
$conn->close();

$newpass = md5($myPassword);

echo "You Successfuly Login";
>