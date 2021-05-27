<?php
  include_once "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php
          if (isset($_SESSION['useruid'])) {
            echo '<p class="login-status">Du er logget på!!!!</p>
            <form class="highscoreSubmit" action="inkludere/highscore.ink.php" method="post">
             <input type="text" name="highscore" class="input-box" placeholder="Hvad har du på hjertet? <3" id="txthighscore">
             <button type="submit" class="highscore-submit" name="highscore-submit">Slå op</button>
            ';

         }

          else {
            echo '<p class="login-status">Du er ikke logget på!</p>';
          }
         ?>
       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
