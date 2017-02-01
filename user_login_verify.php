<?php

if(isset($_POST['submit'])){
	$user_name = $_POST['email_id'];
	$user_password = $_POST['password'];
	$conn = mysqli_connect("localhost","root","","knowdent");
	if(!$conn){
		die("connection failed..!" . mysqli_error($conn));
	}

	$sql = "SELECT email_id, password FROM register WHERE email_id = '$user_name' AND password ='$user_password'";
	$res = mysqli_query($conn,$sql);
	echo $user_name;
	if(!$res){
		die("Select query failed...!!" . mysqli_error($conn));
	}
	session_start();
		if(mysqli_num_rows($res) > 0){
			$_SESSION['email_id']=$user_name;
		header('Location: Sign-in.php');
	}
	else{
		echo "Enter proper User name and Password.";
	}
}
?>