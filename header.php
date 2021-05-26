<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
   <body>
    <header>
     <nav>
       <ul>
         <a href="index.php">
         <li><img src="img/sbLogo.png" alt="logo" width="100" height="75"><a/></li>
         <li><a class="spilNav" href="index.php">Feed</a></li>
         <li><a class="leaderboardNav" href="leaderboard.php">Aftaler</a></li>
         <li><a class="omOsNav" href="#">Profil</a></li>
       </ul>
       <?php
        if (isset($_SESSION['userId'])) {
          echo '<a class="logout" href="inkludere/logout.ink.php">
            <button type="submit" class="HeaderKnap" name="logout-submit" action="inkludere/logout.ink.php">Logout</button>
            </a>
            <a class="profil" href="profil.php">
              <button type="button" class="HeaderKnap" name="profil-submit">Min profil</button>
              </a>';
        }
        else {
          echo '<a class="login" href="loginSite.php">
              <button type="button" class="HeaderKnap" name="login-submit" action="loginSite.php">Login</button>
            </a>';

        }
       ?>

     </nav>
    </header>
