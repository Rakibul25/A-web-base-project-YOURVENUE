<?php
require'connectiontodb.php';
session_start();

  $t = $_SESSION['userid'];
  $u = $_SESSION['hid'];
  $date = $_POST["date"];
 

  $qy2=" INSERT INTO request (REQ_DATETIME,HALLSH_ID,user_id) values('$date','$u','$t')";
    $conn->query($qy2);
    header('location:confirmation.php');
  ?>