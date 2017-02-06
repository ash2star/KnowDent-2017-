<?php 
require('DBConnectivity.php');
$USerName = $_POST['USerName'];
$Password = $_POST['Password'];
$sql ="SELECT * FROM register WHERE username = '$USerName' AND password = '$Password'";//verify ur column name of where condition;
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0) {
 $row = mysqli_fetch_array($result);
 session_start();
 $_SESSION['uid'] = $row['id'];//verify ur primary key vala column
 $_SESSION['email'] = $row['email'];
 header('location:');//after sucessful login re direct to ......
} else {
	header('location:login.html');
}
?>