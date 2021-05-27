<?php
  include_once "header.php";
?>

   <main>
     <div class="wrapper-main">
       <section class="section-default">
 <?php
 if(!$_SESSION['useruid']){

 header('location:login.php?error=login please');
}else {
 echo "hej";
}
  ?>

       </section>
      </div>
     </main>
<?php
   include_once "footer.php";
?>
