<?php
  require'connectiontodb.php';
?>
<html>
    <head><link rel="stylesheet" href="login.css" type="text/css"></head>
    <body>
    <div class="body-content">
    <div class="module">
    <h1>Log In As Editor</h1>
    <form class="form" action="http://localhost:81/yourvenue/editorloginaction.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Id" name="id" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary" />
    </form>
    </body>
</html>
  </div>
</div>
