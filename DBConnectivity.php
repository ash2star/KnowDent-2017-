<?php
$conn = mysqli_connect('','localhost','root','knowdent');
if(!$conn) {
	die('Connection failed: '.mysqli_error($conn));
}
?>