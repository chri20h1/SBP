<?php
if (isset($_POST['highscore-submit'])) {
   require 'dbh.ink.php';
   $highscoredbh = $_POST['highscore'];
   $sql = "INSERT INTO brugere (highscoreBrugere) VALUES ('$highscoredbh')";
   mysqli_query($conn, $sql);
   header("Location: ../index.php?submit=succes");
   exit();
}
