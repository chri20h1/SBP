<?php
  include_once "header.php";
  include_once "includes/dbh.inc.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if($_SESSION['userid']){

      $sql = "SELECT * FROM users WHERE usersId='1';";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
           echo $row['usersName'];
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
