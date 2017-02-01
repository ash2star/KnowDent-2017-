<?php

$con=mysqli_connect('localhost','root','','knowdent');

//checking the connection.
if(mysqli_connect_errno()){
	die ("Failed to connect :".mysqli_connect_error());
}
$qsql="select * from register";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
$count++;

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$gender=$_POST['radio1'];
$age=$_POST['option1'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO register VALUES('$count','$f_name','$l_name','$gender','$age','$email','$password')";
mysqli_query($con,$query);

header('Location: user_login.php');

?>

