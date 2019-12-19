<?php
session_start();
$con= mysqli_connect('localhost','root');

mysqli_select_db($con,'yourvenue');
$id = $_POST['id'];
$pass = $_POST['password'];

$q = "SELECT * From editor where E_ID = '$id' && E_PASS='$pass'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$rows=mysqli_fetch_assoc($result);

if($num == 1){
	$_SESSION["loggedIn"] = true;
    $_SESSION['editorid'] = $id;
    $_SESSION['editorhall'] = $rows['HALLSH_ID'];
	header('location:editorview.php');
	
}
else{
	  echo "log in unnsuccess";
	}
?>