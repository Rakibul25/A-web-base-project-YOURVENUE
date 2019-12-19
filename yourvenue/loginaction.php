<?php
session_start();
$con= mysqli_connect('localhost','root');

mysqli_select_db($con,'yourvenue');
$name = $_POST['username'];
$pass = $_POST['password'];

$q = "SELECT * From user where U_NAME = '$name' && U_PASS='$pass'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$rows=mysqli_fetch_assoc($result);

if($num == 1){
	$_SESSION["loggedIn"] = true;
	$_SESSION['userName'] = $name;
	$_SESSION['userid'] = $rows['U_ID'];
	header('location:home.php');
	
}
else{
	  echo "log in unnsuccess";
	}
?>