<?php
if (isset($_POST['signup-submit'])) {

  require 'dbh.ink.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  $klasseBrugere = $_POST['klasse-b'];
  $highscoreBrugere = $_POST['highscore-p'];

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../signupSite.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signupSite.php?error=invalidmail&uid");
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signupSite.php?error=invalidmail&uid=".$username);
    exit();
  }

  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signupSite.php?error=invaliduid&mail=".$email);
    exit();
  }
  else if ($password !== $passwordRepeat) {
    header("Location: ../signupSite.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {

   $sql = "SELECT uidBrugere FROM brugere WHERE uidBrugere=?";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
     header("Location: ../signupSite.php?error=sqlerror");
     exit();
   }
   else {
     mysqli_stmt_bind_param($stmt, "s", $username);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_store_result($stmt);
     $resultCheck = mysqli_stmt_num_rows($stmt);
     if ($resultCheck > 0) {
       header("Location: ../signupSite.php?error=usernametaken&mail=".$email);
       exit();
     }
     else {

       $sql = "INSERT INTO brugere (uidBrugere, emailBrugere, pwdBrugere) VALUES (?, ?, ?)";
       $stmt = mysqli_stmt_init($conn);
       if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../signupSite.php?error=sqlerror");
         exit();
       }
       else {
         $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

         mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
         mysqli_stmt_execute($stmt);
         header("Location: ../loginSite.php?signup=success");
         exit();
       }
     }
   }
 }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);

}
else {
  header("Location: ../signupSite.php");
  exit();
}
