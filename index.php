<?php
  require "header.php";
  include_once 'inkludere/dbh.ink.php';
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
         <?php
          if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">Du er logget på!!!!</p>';
            $sql = "SELECT * FROM brugere";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo $row['emailBrugere'];
           }
          }
         }
          else {
            echo '<p class="login-status">Du er ikke logget på!</p>';
          }
         ?>
       </section>
      </div>
     </main>
<?php
   require "footer.php";
?>
