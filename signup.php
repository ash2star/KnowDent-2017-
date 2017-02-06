<?php 
require('DBConnectivity.php');//this page consist of database connection;
$Name = $_POST['Name'];
$Email = $_POST['Email']; 
$USerName = $_POST['USerName'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['ConfirmPassword'];
$Address = $_POST['Address'];
$Age = $_POST['Age'];
if(!empty($Password) && !empty($ConfirmPassword))
{
	if($Password != $ConfirmPassword) {
		die('password does not matched');
	} else {
		$sql ="INSERT INTO register VALUES('','$Name','$Email','$USerName','$Password','$Address','$Age')";
		$result=mysqli_query($conn,$sql);
		if($result) {
			echo '<script>alert(Data Inserted);</script>';
		} else {
			die('Not inserted: '.die(mysqli_error()));
		}
		
	}
}
?>