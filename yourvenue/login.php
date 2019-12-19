<?php
  require'connectiontodb.php';
?>
<html>
    <head><link rel="stylesheet" href="login.css" type="text/css"></head>
    <body>
    <div class="body-content">
    <div class="module">
    <h1>Log In</h1>
    <form class="form" action="http://localhost:81/yourvenue/loginaction.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary" />
    </form>
    <a href="http://localhost:81/yourvenue/signup.php" style="background-color:#ffffa0">Create a new acoount!</a>
    <a href="http://localhost:81/yourvenue/editorlogin.php" style="background-color:#ffffa0">Log In as editor!</a>
    </body>
</html>
  </div>
</div>
