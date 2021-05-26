<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "SBPDatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  die("Forbindelse tabt: ".mysqli_connect_error());
}
