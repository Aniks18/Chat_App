<?php
  $hostname = "localhost";
  $username = "niksLnn18";
  $password = "Aniks0108";
  $dbname = "chat_app";

  $conn = mysqli_connect($hostname, $username, $password, $database);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
