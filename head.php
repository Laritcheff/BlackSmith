<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php echo"<title> $title</title>"?>
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>

<?php echo'<h1>'.$title.'</h1>'?>
    <form id="form" method= "post" action="registr.php" enctype="multipart/form-data">     
    <fieldset>
      <label for="username">Имя пользователя</label> 
      <input type="text" id="username" name="user_name"></br>
      <label for="password">password</label> 
      <input type="text" id="password" name="password"></br>
      <button type="submit">PRESS a KEY</button>
    </fieldset>
</form>
</body>
</html>