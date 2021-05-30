<?php
  include_once "header.php";
  include_once "includes/dbh.inc.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if($_SESSION['userid']){

      $brugeren = $_SESSION['userid'];
      $bint = (int)$brugeren;

      $sql = "SELECT * FROM users WHERE usersId ='$bint';";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
          echo "
         <td>Navn: {$row['usersName']}</td><br>
         <td>Username: {$row['usersUid']}</td><br>
         <td>Email: {$row['usersEmail']}</td><br>
         <td>User ID: {$row['usersId']}</td>    </div>";

         }
       }
else {
    echo "fejl";
  }
}
  ?>

       </section>
      </div>
     </main>

<?php
   include_once "footer.php";
?>
