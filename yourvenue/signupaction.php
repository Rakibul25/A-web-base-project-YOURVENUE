<?php
require'connectiontodb.php';
session_start();
if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $useremail = $_POST["email"];
    $userphone = $_POST["phone"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
}
    
    if ($password1 !== $password2) {
        ?>
        <script>
            window.alert("Password doesn't match!");
        </script>
    <?php
  } else{
    $qy=" INSERT INTO user (U_NAME,U_PASS,U_EMAIL,U_CONTACT) values('$username','$password1','$useremail','$userphone')";
    $conn->query($qy);
  }
  $_SESSION["loggedIn"] = true;
  $_SESSION['userName'] = $username;
  header('location:home.php');
  ?>