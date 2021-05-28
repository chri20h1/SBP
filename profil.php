<?php
  include_once "header.php";
  include_once "includes/dbh.inc.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if($_SESSION['useruid']){

   $sql = "SELECT * FROM users";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         while ($row = mysqli_fetch_assoc($result)){
           echo $row['usersName'];
         }
}
else {
header("location: ../signup.php?error=seserror");
}
}
  ?>

       </section>
      </div>
     </main>

<?php
   include_once "footer.php";
?>
