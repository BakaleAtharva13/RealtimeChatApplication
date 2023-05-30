<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "realtime_chat_application";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database Connection Error. ".mysqli_connect_error();
  }
?>
