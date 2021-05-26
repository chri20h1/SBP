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
         <li><img src="img/tietgenLogo.png" alt="logo" width="75" height="75" href="index.php"></li>
         <li><a class="spilNav" href="index.php">Spil</a></li>
         <li><a class="leaderboardNav" href="leaderboard.php">Leaderboard</a></li>
         <li><a class="omOsNav" href="#">Om os</a></li>
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
