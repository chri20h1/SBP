<?php
  require "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
        <form class="highscoreSubmit" action="inkludere/highscore.ink.php" method="post">
         <input type="text" name="highscore" class="input-box" placeholder="Din highscore" id="txthighscore">
         <button type="submit" class="highscore-submit" name="highscore-submit">submit</button>
        </form>
       </section>
      </div>
     </main>
<?php
   require "footer.php";
?>
