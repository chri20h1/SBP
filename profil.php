<?php
  include_once "header.php";
<<<<<<< HEAD
  include_once "includes/dbh.inc.php"
=======
  include_once "includes/dbh.inc.php";
>>>>>>> 8450faf8d7f668e157c6398610b534adf8738d31
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if($_SESSION['useruid']){

   $sql = "SELECT * FROM users;";
<<<<<<< HEAD
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
         echo "akdfkjd";
         }

else {
=======
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
      echo "akdfkjd";
      }
   
}else {
>>>>>>> 8450faf8d7f668e157c6398610b534adf8738d31
header("location: ../signup.php?error=seserror");
}

  ?>

       </section>
      </div>
     </main>

<?php
   include_once "footer.php";
?>
