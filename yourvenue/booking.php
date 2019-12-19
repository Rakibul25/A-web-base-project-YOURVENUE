<?php
  require'connectiontodb.php';
?>
<html>
    <head><link rel="stylesheet" href="booking.css" type="text/css"></head>
    <body>
    <div class="body-content">
    <div class="module">
    <form class="form" action="http://localhost:81/yourvenue/writerequest.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="date" placeholder="Date" name="date" required />
      <input type="submit" value="Send request" name="sendrequest" class="btn btn-block btn-primary" />
    </form>
    </body>
</html>
  </div>
</div>
