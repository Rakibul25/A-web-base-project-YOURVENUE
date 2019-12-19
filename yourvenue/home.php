<?php
session_start();
  if (!isset($_SESSION['loggedIn'])) {
    header('Location:login.php');
    exit();
  }
?>
<html>
<head>
<link rel="stylesheet" href="home.css" type="text/css">
</head>
<body>

<button class="s01" type="button" name="logout" onclick="logout()">Log Out</button>

<form class="form" action="http://localhost:81/yourvenue/show.php" method="post">
  <div></div>
  <input type="text" placeholder="event type" name="evnt" required />
  <input type="text" placeholder="location" name="loc" required />
  <input type="submit" value="Search" name="search" class="btn btn-block btn-primary" />
  </form>

  <form class="form" action="http://localhost:81/yourvenue/vendorshow.php" method="post">
  <div></div>
  <input type="text" placeholder="vendor type" name="vendor" required />
  <input type="submit" value="Search" name="search" class="btn btn-block btn-primary" />
  </form>

<script>
  function logout(){
    location.assign('logutaction.php');
  }

</script>

</html>
