<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Social Beach</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <header>
    <nav>
      <div class="wrapper">
        <ul>
           <a href="forside.php">
           <li><img src="img/sbLogo.png" class="logo" alt="logo" width="103" height="75"><a/></li>
           <li><a class="spilNav" href="index.php">Feed</a></li>
           <li><a class="aftalerNav" href="aftaler.php">Aftaler</a></li>
           <li><a class="chatNav" href="chat.php">Chat</a></li>
           <li><a class="skiteNav1" href="skitse.php">Temp site</a></li>
           <li><a class="skiteNav2" href="skitse2.php">Temp site</a></li>
        </ul>
          <?php
        if (isset($_SESSION['useruid'])) {
          echo '<a class="logout" href="logout.php"><button type="submit" class="HeaderKnap" name="logout-submit" action="logout.php">Logout</button></a>
            <a class="profil" href="profil.php"><button type="button" class="HeaderKnap" name="profil-submit">Min profil</button></a>';
        }
        else {
          echo '<a class="login" href="login.php"><button type="button" class="HeaderKnap" name="login-submit" action="login.php">Login</button></a>';
          echo '<a class="signup" href="signup.php"><button type="button" class="HeaderKnap" name="signup-submit" action="signup.php">Signup</button></a>';

        }
       ?>


      </div>
    </nav>

<!--A quick wrapper to align the content (ends in footer.php)-->
<div class="wrapper">
</header>
