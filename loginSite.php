<?php
  require "header.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
   <body>
  <div class="loginBoks">
    <h1>Login her</h1>
    <form action="inkludere/login.ink.php" method="post">
      <input type="email" name="mailuid" class="input-box" placeholder="Din Email" id="txtemail">
      <input type="password" name="pwd" class="input-box" placeholder="Dit Password" id="txtpass">
      <p><span><input type="checkbox" id="check"></span> Jeg acceptere betingelsesvilkårene</p>
      <button type="submit" class="login-submit" name="login-submit">Login</button>
      <p>Har du ikke en bruger? <a href="signupSite.php">Opret dig</a></p>
    </form>
  </div>
  </body>
</html>
