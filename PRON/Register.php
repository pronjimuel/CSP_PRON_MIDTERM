<?php
require('connection.php');


$username = addslashes( $_POST['username'] );
$password = $_POST['password'];
$newpass = md5($password);


$sql = mysqli_query($con, "INSERT INTO Register(id,username,password) 
VALUES ('$Id','$username', '$newpass') ");

if($connection->query$sql()== true)
{
	echo "Login Successful";
}
else
"Error in login".$sql ."<br>". $connection->error
>