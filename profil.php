<?php
  include_once "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if($_SESSION['useruid']){



}else {
header("location: ../signup.php?error=seserror");
}
  ?>

       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
