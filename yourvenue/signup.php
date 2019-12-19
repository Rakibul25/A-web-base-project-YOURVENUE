<?php
  require'connectiontodb.php';
?>
<html>
<head><link rel="stylesheet" href="signup.css" type="text/css"></head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="http://localhost:81/yourvenue/signupaction.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
	  <input type="phone" placeholder="Phone Number" name="phone" required />
      <input type="password" placeholder="Password" name="password1"  required />
      <input type="password" placeholder="Confirm Password" name="password2" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>