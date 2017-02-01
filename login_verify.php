<?php

$con=mysqli_connect('localhost','root','','knowdent');

//checking the connection.
if(mysqli_connect_errno()){
	die ("Failed to connect :".mysqli_connect_error());
}

$email=$_POST['email_id'];
$password=$_POST['password'];

$query="Select email_id, password from register where email_id = '$email' AND password = '$password'";

$result=mysqli_query($con,$query);

if(@mysqli_num_rows($result)==0)
{
	header("Location: Sign-in.php?n=1");
}
else
{
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$uid=$row['uid'];
	$password1=$row['password'];
	if($password1!=$password){
		header("location: Sign-in.php?m=1");
	}
	else{
	session_start();
	$_SESSION['name']=$name;
	$_SESSION['uid']=$uid;
	header("location: home.php");
	}
}
mysqli_close($con);
?>
