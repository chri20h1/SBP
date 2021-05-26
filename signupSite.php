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
        <h1>Opret dig.her</h1>
        <form action="inkludere/signup.ink.php" method="post">
          <input type="text" class="input-box" name="uid" placeholder="Dit username">
          <input type="text" class="input-box" name="mail" placeholder="Din email">
          <input type="password" class="input-box" name="pwd" placeholder="Dit password">
          <input type="password" class="input-box" name="pwd-repeat" placeholder="Gentag password">
          <p><span><input type="checkbox" id="check"></span> Jeg acceptere betingelsesvilkårene</p>
          <button type="submit" class="signup-submit" name="signup-submit">Opret dig</button>
          <p>Gå til login siden her --- <a href="loginSite.php">Login side</a></p>
        </form>
    </div>
  </body>
</html>
